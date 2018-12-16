<?php
/**
 * Created by Abek Narynov.
 * Date: 2018-12-15
 * @link https://github.com/KebaCorp
 * @copyright Copyright (c) 2018 KebaCorp
 */

namespace KebaCorp\ArrayExcelBuilder;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Writer\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * Class ArrayExcelBuilder.
 *
 * The extension creates an Excel file from the data array.
 * Read more about the component in README.md
 *
 * @package KebaCorp\ArrayExcelBuilder
 */
class ArrayExcelBuilder
{
    /**
     * Default value of "is it row direction"
     */
    const IS_ROW_DEFAULT = false;

    /**
     * PhpOffice\PhpSpreadsheet\Spreadsheet
     *
     * @var Spreadsheet
     */
    private $_spreadsheet;

    /**
     * Array data.
     *
     * @var array - must consist of nested arrays and key of the composite array must be an integer
     */
    private $_data;

    /**
     * Number of sheets.
     *
     * @var int
     */
    private $_sheetCount;

    /**
     * Global params.
     *
     * @var array
     */
    private $_params = array();

    /**
     * Is it row direction.
     *
     * @var bool
     */
    private $_isRowDirection = self::IS_ROW_DEFAULT;

    /**
     * Create a new ArrayExcelBuilder.
     *
     * @param array $data - must consist of nested arrays and key of the composite array must be an integer
     */
    public function __construct(array $data)
    {
        $this->_spreadsheet = new Spreadsheet();
        $this->_data = $data;
        $this->_sheetCount = count($data);
    }

    /**
     * Set global params.
     *
     * @param array $params - global params
     *
     * @return ArrayExcelBuilder
     *
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function setParams(array $params)
    {
        // Set global params
        $this->_params = $params;

        // Apply global params
        $this->_setGlobalParams();

        return $this;
    }

    /**
     * Apply global params.
     *
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _setGlobalParams()
    {
        // Set data from params and cell data to cell DTO
        $data = new ArrayExcelBuilderCellDTO();
        $data->setDataFromArray($this->_params);

        // Set the border on the top of all cells on the page
        if ($data->getAllBorderTop()) {
            $this->_spreadsheet->getDefaultStyle()
                ->getBorders()
                ->getTop()
                ->setBorderStyle($data->getAllBorderTop());
        }

        // Set the border on the bottom of all cells on the page
        if ($data->getAllBorderBottom()) {
            $this->_spreadsheet->getDefaultStyle()
                ->getBorders()
                ->getBottom()
                ->setBorderStyle($data->getAllBorderBottom());
        }

        // Set the border on the left of all cells on the page
        if ($data->getAllBorderLeft()) {
            $this->_spreadsheet->getDefaultStyle()
                ->getBorders()
                ->getLeft()
                ->setBorderStyle($data->getAllBorderLeft());
        }

        // Set the border on the right of all cells on the page
        if ($data->getAllBorderRight()) {
            $this->_spreadsheet->getDefaultStyle()
                ->getBorders()
                ->getRight()
                ->setBorderStyle($data->getAllBorderRight());
        }
    }

    /**
     * Save to file.
     *
     * For example:
     *  - 'home/fileName.xlsx'
     *  - 'fileName.xlsx'
     *
     * @param string $pathToFile - path to file with filename
     *
     * @return bool|\Exception|Exception - true, if successfully saved
     */
    public function save($pathToFile = '')
    {
        // If the file name is not transferred, then set the default value
        $pathToFile = $pathToFile ? $pathToFile : 'Document ' . date('Y-m-d H-i-s') . '.xlsx';

        // Build excel
        try {
            $this->_buildExcel();
        } catch (Exception $e) {
            return $e;
        } catch (\PhpOffice\PhpSpreadsheet\Exception $e) {
            return $e;
        }

        // Saving
        $writer = new Xlsx($this->_spreadsheet);
        $writer->setIncludeCharts(true); // Enable charts
        try {
            $writer->save($pathToFile);
        } catch (Exception $e) {
            return $e;
        }

        return true;
    }

    /**
     * Build excel.
     *
     * @throws Exception
     *
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     *
     * @return ArrayExcelBuilder
     */
    private function _buildExcel()
    {
        // Sheet index
        $sheetIndex = 0;

        foreach ($this->_data as $sheetData) {

            // If $sheetData is not array
            if (!is_array($sheetData) && !isset($sheetData['data']) && !is_array($sheetData['data'])) {
                throw new Exception('The data array must consist of nested arrays.');
            }

            // Set active sheet
            $this->_spreadsheet->setActiveSheetIndex($sheetIndex++);

            // Rename sheet
            if (isset($sheetData['sheetName']) && is_string($sheetData['sheetName']) && $sheetData['sheetName']) {
                $this->_spreadsheet->getActiveSheet()->setTitle($sheetData['sheetName']);
            }

            // Freeze cell
            if (isset($sheetData['freezeCell']) && is_string($sheetData['freezeCell'])) {
                $this->_spreadsheet->getActiveSheet()->freezePane($sheetData['freezeCell']);
            }

            // Is it row direction
            if (isset($sheetData['isRowDirection']) && is_bool($sheetData['isRowDirection'])) {
                $this->_isRowDirection = $sheetData['isRowDirection'];
            } else {
                $this->_isRowDirection = self::IS_ROW_DEFAULT;
            }

            // Is show grid lines
            if (isset($sheetData['showGridLines']) && is_bool($sheetData['showGridLines'])) {
                $this->_spreadsheet->getActiveSheet()->setShowGridlines($sheetData['showGridLines']);
            }

            // Build sheet
            $this->_buildSheet($sheetData['data']);

            // Set current sheet autosize
            if (!isset($sheetData['autosize']) || (isset($sheetData['autosize']) && $sheetData['autosize'])) {
                $this->_setAutoSize();
            }

            // Create charts by array data
            if (isset($sheetData['charts']) && is_array($sheetData['charts'])) {
                $this->_setCharts($sheetData['charts']);
            }

            // Create a new worksheet, if sheet index < sheet count
            if ($sheetIndex < $this->_sheetCount) {
                $this->_spreadsheet->createSheet();
            }
        }

        return $this;
    }

    /**
     * Set sheet autosize.
     *
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _setAutoSize()
    {
        $sheet = $this->_spreadsheet->getActiveSheet();
        $cellIterator = $sheet->getRowIterator()->current()->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(true);

        foreach ($cellIterator as $cell) {
            $sheet->getColumnDimension($cell->getColumn())->setAutoSize(true);
        }
    }

    /**
     * Create charts by array data.
     *
     * @param array $chartsData
     *
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _setCharts(array $chartsData)
    {
        foreach ($chartsData as $chartData) {
            if (is_array($chartData)) {

                // Create chart
                $arrayExcelBuilderChart = new ArrayExcelBuilderChart($chartData);
                try {
                    $chart = $arrayExcelBuilderChart->createChart();
                } catch (\Exception $e) {
                    continue;
                }

                // Add the chart to the active worksheet
                $this->_spreadsheet->getActiveSheet()->addChart($chart);
            }
        }
    }

    /**
     * Build sheet.
     *
     * @param array $sheetData
     *
     * @return ArrayExcelBuilder
     *
     * @throws Exception
     *
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _buildSheet(array $sheetData)
    {
        foreach ($sheetData as $parentIndex => $parentData) {

            // if $parentIndex is not integer
            if (!is_int($parentIndex)) {
                throw new Exception('The key of the composite array must be an integer.');
            }

            // If $parentData is not array
            if (!is_array($parentData)) {
                throw new Exception('The data array must consist of nested arrays.');
            }

            // Build column or row
            $this->_buildColumnOrRow($parentIndex, $parentData);
        }

        return $this;
    }

    /**
     * Build column or row.
     *
     * @param int $parentIndex
     *
     * @param array $parentData
     *
     * @throws Exception
     *
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _buildColumnOrRow($parentIndex, array $parentData)
    {
        foreach ($parentData as $childIndex => $cellData) {

            // if $childIndex is not integer
            if (!is_int($childIndex)) {
                throw new Exception('The key of the composite array must be an integer.');
            }

            // If $cellData is not array
            if (!is_array($cellData)) {
                throw new Exception('The data array must consist of nested arrays.');
            }

            // Determine the row id and column id
            $columnID = $this->_isRowDirection ? $childIndex + 1 : $parentIndex + 1;
            $rowID = $this->_isRowDirection ? $parentIndex + 1 : $childIndex + 1;

            // Build cell
            $this->_buildCell($columnID, $rowID, $cellData);
        }
    }

    /**
     * Build cell.
     *
     * @param int $columnID - column id start with 1 for column A
     *
     * @param int $rowID - row id start with 1 for first row
     *
     * @param array $cellData
     *
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _buildCell($columnID, $rowID, array $cellData)
    {
        // Set data from params and cell data to cell DTO
        $data = new ArrayExcelBuilderCellDTO();
        $data->setDataFromArray($this->_params);
        $data->setDataFromArray($cellData);

        // Get active sheet
        $sheet = $this->_spreadsheet->getActiveSheet();

        // Cell text
        $sheet->setCellValueByColumnAndRow($columnID, $rowID, $data->getValue());

        // Cell comment
        if ($data->getComment()) {
            $sheet->getCommentByColumnAndRow($columnID, $rowID)->getText()->createTextRun($data->getComment());
        }

        // Cell background
        if ($data->getFillColor()) {
            $sheet->getStyleByColumnAndRow($columnID, $rowID)
                ->getFill()
                ->setFillType(Fill::FILL_SOLID)
                ->getStartColor()
                ->setRGB($data->getFillColor());
        }

        // Is cell text bold
        if ($data->isBold()) {
            $sheet->getStyleByColumnAndRow($columnID, $rowID)->getFont()->setBold($data->isBold());
        }

        // Merge columns and rows
        if ($data->getMergeColumns() || $data->getMergeRows()) {
            $columnDestinationID = $data->getMergeColumns() > 0 ? $columnID + $data->getMergeColumns() : $columnID;
            $rowDestinationID = $data->getMergeRows() > 0 ? $rowID + $data->getMergeRows() : $rowID;

            $sheet->mergeCellsByColumnAndRow($columnID, $rowID, $columnDestinationID, $rowDestinationID);
        }

        // Merge rows
        if ($data->getMergeRows()) {
            $sheet->mergeCellsByColumnAndRow($columnID, $rowID, $columnID, $rowID + $data->getMergeRows() - 1);
        }

        // Set the border on the top
        if ($data->getBorderTop()) {
            $sheet->getStyleByColumnAndRow($columnID, $rowID)
                ->getBorders()
                ->getTop()
                ->setBorderStyle($data->getBorderTop());
        }

        // Set the border on the bottom
        if ($data->getBorderBottom()) {
            $sheet->getStyleByColumnAndRow($columnID, $rowID)
                ->getBorders()
                ->getBottom()
                ->setBorderStyle($data->getBorderBottom());
        }

        // Set the border on the left
        if ($data->getBorderLeft()) {
            $sheet->getStyleByColumnAndRow($columnID, $rowID)
                ->getBorders()
                ->getLeft()
                ->setBorderStyle($data->getBorderLeft());
        }

        // Set the border on the right
        if ($data->getBorderRight()) {
            $sheet->getStyleByColumnAndRow($columnID, $rowID)
                ->getBorders()
                ->getRight()
                ->setBorderStyle($data->getBorderRight());
        }

        // Set font size
        if ($data->getFontSize()) {
            $sheet->getStyleByColumnAndRow($columnID, $rowID)->getFont()->setSize($data->getFontSize());
        }

        // Text wrap
        if ($data->isWrapText()) {
            $sheet->getStyleByColumnAndRow($columnID, $rowID)->getAlignment()->setWrapText($data->isWrapText());
        }

        // Set style from array
        if (count($data->getStyleArray()) > 0) {
            $sheet->getStyleByColumnAndRow($columnID, $rowID)
                ->applyFromArray($data->getStyleArray());
        }

        // Set column width
        if ($data->getColumnWidth()) {
            $sheet->getColumnDimensionByColumn($columnID)->setWidth($data->getColumnWidth());
        }

        // Set row height
        if ($data->getRowHeight()) {
            $sheet->getRowDimension($rowID)->setRowHeight($data->getRowHeight());
        }

        // Horizontal and vertical alignment
        $sheet->getStyleByColumnAndRow($columnID, $rowID)
            ->getAlignment()
            ->setHorizontal($data->getHAlignment())
            ->setVertical($data->getVAlignment());
    }
}

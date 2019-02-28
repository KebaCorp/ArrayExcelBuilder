<?php
/**
 * Created by Abek Narynov.
 * Date: 2018-12-15
 * @link https://github.com/KebaCorp
 * @copyright Copyright (c) 2018 KebaCorp
 */

namespace KebaCorp\ArrayExcelBuilder;

use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Writer\Exception;

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
     * Cells array data.
     *
     * @var array
     */
    private $_data;

    /**
     * Number of sheets.
     *
     * @var int
     */
    private $_sheetCount;

    /**
     * Global ArrayExcelBuilderCellDTO params.
     *
     * @var ArrayExcelBuilderCellDTO
     */
    private $_params = array();

    /**
     * Is it row direction.
     *
     * @var bool
     */
    private $_isRowDirection = self::IS_ROW_DEFAULT;

    /**
     * Cell values.
     *
     * @var array
     */
    private $_values = array();

    /**
     * Max column coordinate.
     *
     * @var int
     */
    private $_maxColumn = 0;

    /**
     * Max row coordinate.
     *
     * @var int
     */
    private $_maxRow = 0;

    /**
     * Max cell coordinate.
     *
     * @var string
     */
    private $_maxCellCoordinate = 'A1';

    /**
     * Columns that should not be involved in the auto size.
     *
     * @var array
     */
    private $_notAutoSizeColumns = array();

    /**
     * ArrayExcelBuilder constructor.
     *
     * @param array $data - cells array data
     * @param array $params - global params
     */
    public function __construct(array $data = [], array $params = [])
    {
        // Sets new Spreadsheet
        $this->_spreadsheet = new Spreadsheet();

        // Sets cells array data
        $this->setData($data);

        // Sets global params from array to cell DTO
        $this->setParams($params);
    }

    /**
     * Sets cells array data.
     *
     * @param array $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->_data = $data;
        $this->_sheetCount = count($data);

        return $this;
    }

    /**
     * Sets global params from array to cell DTO.
     *
     * @param array $params
     * @return $this
     */
    public function setParams(array $params)
    {
        $paramsDTO = new ArrayExcelBuilderCellDTO();
        $paramsDTO->setDataFromArray($params);

        $this->_params = $paramsDTO;

        return $this;
    }

    /**
     * Save spreadsheet to file or variable.
     *
     * @param string $pathToFile
     * @param array $options
     * @param bool $saveToVariable
     * @return bool|\Exception|null|\PhpOffice\PhpSpreadsheet\Exception|Exception
     */
    public function save($pathToFile = '', array $options = [], $saveToVariable = false)
    {
        // If the file name is not transferred, then set the default value
        $pathToFile = $pathToFile ? (string)$pathToFile : 'Document_' . date('Y-m-d_H-i-s');

        // Build excel
        try {
            $this->_buildExcel();
        } catch (Exception $e) {
            return $e;
        } catch (\PhpOffice\PhpSpreadsheet\Exception $e) {
            return $e;
        }

        // Creates ArrayExcelBuilderWriter
        $writer = new ArrayExcelBuilderWriter($this->_spreadsheet);
        $writer->setOptionsFromArray($options);

        // Gets file format
        $format = isset($options['format']) ? strtolower((string)$options['format']) : 'xlsx';
        $extension = 'xlsx';

        // Gets file writer
        switch ($format) {
            case 'xls':
                $writer = $writer->getXLSWriter();
                $extension = 'xls';
                break;

            case 'ods':
                $writer = $writer->getODSWriter();
                $extension = 'ods';
                break;

            case 'csv':
                $writer = $writer->getCSVWriter();
                $extension = 'csv';
                break;

            case 'html':
                $writer = $writer->getHTMLWriter();
                $extension = 'html';
                break;

            case 'pdf':
                $writer = $writer->getPDFWriter();
                $extension = 'pdf';
                break;

            default:
                $writer = $writer->getXLSXWriter();
        }

        // Save spreadsheet to file or return to variable
        if ($saveToVariable) {
            try {
                ob_start();
                $writer->save('php://output');

                return ob_get_clean();
            } catch (Exception $e) {
                return $e;
            }
        } else {
            try {
                $writer->save($pathToFile . '.' . $extension);

                return true;
            } catch (Exception $e) {
                return $e;
            }
        }

        return false;
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
            if (isset($sheetData['showGridLines']) && is_bool($sheetData['showGridLines']) && !$sheetData['showGridLines']) {
                $this->_spreadsheet->getActiveSheet()->setShowGridlines($sheetData['showGridLines']);
            }

            // Apply global params
            $this->_setGlobalParams($sheetData['data']);

            // Build sheet
            $this->_buildSheet($sheetData['data']);

            // Mass set values from array
            $this->_spreadsheet->getActiveSheet()->fromArray($this->_values, NULL);

            // Set current sheet auto size
            if (!$this->_params->getColumnWidth() && isset($sheetData['autoSize']) && $sheetData['autoSize']) {
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
        $cellIterator->setIterateOnlyExistingCells(false);

        foreach ($cellIterator as $cell) {
            $cellIndex = $cell->getColumn();

            if (!isset($this->_notAutoSizeColumns[$cellIndex])) {
                $sheet->getColumnDimension($cell->getColumn())->setAutoSize(true);
            }
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
     * Builds sheet.
     *
     * @param array $sheetData
     * @return $this
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _buildSheet(array $sheetData)
    {
        $counter = 0;

        foreach ($sheetData as $key => $parentData) {

            // If $parentData is not array
            if (!is_array($parentData)) {
                continue;
            }

            // If the array key is a number, then use it
            // Otherwise the value of the counter
            $parentIndex = is_int($key) ? $key : $counter;
            ++$counter;

            // Build column or row
            $this->_buildColumnOrRow($parentIndex, $parentData);
        }

        return $this;
    }

    /**
     * Builds column or row.
     *
     * @param $parentIndex
     * @param array $parentData
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _buildColumnOrRow($parentIndex, array $parentData)
    {
        $counter = 0;

        foreach ($parentData as $key => $cellData) {

            // If the array key is a number, then use it
            // Otherwise the value of the counter
            $childIndex = is_int($key) ? $key : $counter;
            ++$counter;

            // Determine the row id and column id by sheet's "isRowDirection" parameter
            $columnID = $this->_isRowDirection ? $childIndex : $parentIndex;
            $rowID = $this->_isRowDirection ? $parentIndex : $childIndex;

            // Build cell
            $this->_buildCell($columnID, $rowID, $cellData);
        }
    }

    /**
     * Builds cell.
     *
     * If "$cellData" an array, then it is an array of cell parameters.
     * If not an array, then this is the value of the cell.
     *
     * @param int $columnID - column id start with 0 for column A
     * @param int $rowID - row id start with 0 for first row
     * @param array|string|number|bool|mixed $cellData
     * @return bool
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _buildCell($columnID, $rowID, $cellData)
    {
        $data = new ArrayExcelBuilderCellDTO();

        if (!is_array($cellData)) {
            // Sets cell value to DTO
            $data->setValue($cellData);

            // Sets cell value
            $this->_values[$rowID][$columnID] = $data->getValue();

            return true;
        }

        // Set data from params and cell data to cell DTO
        $data->setDataFromArray($cellData);

        // Cell value
        $this->_values[$rowID][$columnID] = $data->getValue();

        // Cell counting starts from one
        ++$columnID;
        ++$rowID;

        // Get column index
        $columnIndex = Coordinate::stringFromColumnIndex($columnID);

        // Get active sheet
        $sheet = $this->_spreadsheet->getActiveSheet();

        // Get active sheet cell style
        $style = $sheet->getStyleByColumnAndRow($columnID, $rowID);

        // Cell comment
        if ($data->getComment()) {
            $sheet->getCommentByColumnAndRow($columnID, $rowID)->getText()->createTextRun($data->getComment());
        }

        // Cell font color
        if ($data->getFontColor()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getFontColor());
            $style->getFont()->setColor($phpColor);
        }

        // Cell background
        if ($data->getFillColor()) {
            $style->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB($data->getFillColor());
        }

        // Is cell value bold
        if ($data->isBold()) {
            $style->getFont()->setBold($data->isBold());
        }

        // Merge columns and rows
        if ($data->getMergeColumns() || $data->getMergeRows()) {
            $columnDestinationID = $data->getMergeColumns() > 0 ? $columnID + $data->getMergeColumns() : $columnID;
            $rowDestinationID = $data->getMergeRows() > 0 ? $rowID + $data->getMergeRows() : $rowID;

            $sheet->mergeCellsByColumnAndRow($columnID, $rowID, $columnDestinationID, $rowDestinationID);
        }

        // Set the border on the top
        if ($data->getBorderTop()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderTop());
            $style->getBorders()->getTop()->setBorderStyle($data->getBorderTop())->setColor($phpColor);
        }

        // Set the border on the bottom
        if ($data->getBorderBottom()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderBottom());
            $style->getBorders()->getBottom()->setBorderStyle($data->getBorderBottom())->setColor($phpColor);
        }

        // Set the border on the left
        if ($data->getBorderLeft()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderLeft());
            $style->getBorders()->getLeft()->setBorderStyle($data->getBorderLeft())->setColor($phpColor);
        }

        // Set the border on the right
        if ($data->getBorderRight()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderRight());
            $style->getBorders()->getRight()->setBorderStyle($data->getBorderRight())->setColor($phpColor);
        }

        // Set font size
        if ($data->getFontSize()) {
            $style->getFont()->setSize($data->getFontSize());
        }

        // Text wrap
        if ($data->isWrapText()) {
            $style->getAlignment()->setWrapText($data->isWrapText());
        }

        // Set style from array
        if (!empty($data->getStyleArray())) {
            $style->applyFromArray($data->getStyleArray());
        }

        // Set global column width
        if ($this->_params->getColumnWidth() && !$data->getColumnWidth()) {
            $sheet->getColumnDimensionByColumn($columnID)->setWidth($this->_params->getColumnWidth());

            // If the column has a width, then we include it in the auto size exceptions
            $this->_notAutoSizeColumns[$columnIndex] = true;
        }

        // Set column width
        if ($data->getColumnWidth()) {
            $sheet->getColumnDimensionByColumn($columnID)->setWidth($data->getColumnWidth());

            // If the column has a width, then we include it in the auto size exceptions
            $this->_notAutoSizeColumns[$columnIndex] = true;
        }

        // Set row height
        if ($data->getRowHeight()) {
            $sheet->getRowDimension($rowID)->setRowHeight($data->getRowHeight());
        }

        // Horizontal alignment
        if ($data->getHAlignment()) {
            $style->getAlignment()->setHorizontal($data->getHAlignment());
        }

        // Vertical alignment
        if ($data->getVAlignment()) {
            $style->getAlignment()->setVertical($data->getVAlignment());
        }

        // Sets image
        if (($image = $data->getImage())) {
            $objDrawing = new Drawing();
            $objDrawing->setName($image->getName());
            $objDrawing->setDescription($image->getDescription());
            $objDrawing->setPath($image->getPath());
            $objDrawing->setOffsetX($image->getOffsetX());
            $objDrawing->setOffsetY($image->getOffsetY());
            $objDrawing->setWidth($image->getWidth());
            $objDrawing->setHeight($image->getHeight());
            $objDrawing->setResizeProportional($image->isResizeProportional());
            $objDrawing->setRotation($image->getRotation());

            // Sets image shadow
            if ($image->getShadow()) {
                $objDrawing->setShadow($image->getShadow());
            }

            // Sets image hyper link
            if ($image->getHyperlink()) {
                $objDrawing->setHyperlink($image->getHyperlink());
            }

            $objDrawing->setWorksheet($sheet);
            $objDrawing->setCoordinates($columnIndex . $rowID);
        }

        return true;
    }

    /**
     * Apply global params.
     *
     * @param $sheetData
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _setGlobalParams($sheetData)
    {
        // Set data from global params DTO
        $data = $this->_params;

        // Fills values with default data for the maximum data key
        $this->_fillSheetEmptyValue($sheetData, $data->getValue());

        // Get active sheet cells default style
        $defaultStyle = $this->_spreadsheet->getDefaultStyle();

        // Get active sheet
        $sheet = $this->_spreadsheet->getActiveSheet();

        // Get active sheet cells style
        $style = $sheet->getStyle('A1:' . $this->_maxCellCoordinate);

        // Set the border on the top of all cells on the page
        if ($data->getAllBorderTop()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getAllBorderTopColor());
            $defaultStyle->getBorders()->getTop()->setBorderStyle($data->getAllBorderTop())->setColor($phpColor);
        }

        // Set the border on the bottom of all cells on the page
        if ($data->getAllBorderBottom()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getAllBorderBottomColor());
            $defaultStyle->getBorders()->getBottom()->setBorderStyle($data->getAllBorderBottom())->setColor($phpColor);
        }

        // Set the border on the left of all cells on the page
        if ($data->getAllBorderLeft()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getAllBorderLeftColor());
            $defaultStyle->getBorders()->getLeft()->setBorderStyle($data->getAllBorderLeft())->setColor($phpColor);
        }

        // Set the border on the right of all cells on the page
        if ($data->getAllBorderRight()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getAllBorderRightColor());
            $defaultStyle->getBorders()->getRight()->setBorderStyle($data->getAllBorderRight())->setColor($phpColor);
        }

        // Cells font color
        if ($data->getFontColor()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getFontColor());
            $style->getFont()->setColor($phpColor);
        }

        // Cells background
        if ($data->getFillColor()) {
            $style->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB($data->getFillColor());
        }

        // Is cells value bold
        if ($data->isBold()) {
            $style->getFont()->setBold($data->isBold());
        }

        // Set borders on the top
        if ($data->getBorderTop()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderTopColor());
            $style->getBorders()->getTop()->setBorderStyle($data->getBorderTop())->setColor($phpColor);
        }

        // Set borders on the bottom
        if ($data->getBorderBottom()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderBottomColor());
            $style->getBorders()->getBottom()->setBorderStyle($data->getBorderBottom())->setColor($phpColor);
        }

        // Set borders on the left
        if ($data->getBorderLeft()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderLeftColor());
            $style->getBorders()->getLeft()->setBorderStyle($data->getBorderLeft())->setColor($phpColor);
        }

        // Set borders on the right
        if ($data->getBorderRight()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderRightColor());
            $style->getBorders()->getRight()->setBorderStyle($data->getBorderRight())->setColor($phpColor);
        }

        // Set vertical borders
        if ($data->getBorderVertical()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderVerticalColor());
            $style->getBorders()->getVertical()->setBorderStyle($data->getBorderVertical())->setColor($phpColor);
        }

        // Set horizontal borders
        if ($data->getBorderHorizontal()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderHorizontalColor());
            $style->getBorders()->getHorizontal()->setBorderStyle($data->getBorderHorizontal())->setColor($phpColor);
        }

        // Set font sizes
        if ($data->getFontSize()) {
            $style->getFont()->setSize($data->getFontSize());
        }

        // Texts wrap
        if ($data->isWrapText()) {
            $style->getAlignment()->setWrapText($data->isWrapText());
        }

        // Set styles from array
        if (!empty($data->getStyleArray())) {
            $style->applyFromArray($data->getStyleArray());
        }

        // Set columns width
        if ($data->getColumnWidth()) {
            for ($columnID = 1; $columnID <= $this->_maxColumn; $columnID++) {
                $sheet->getColumnDimensionByColumn($columnID)->setWidth($data->getColumnWidth());
            }
        }

        // Set rows height
        if ($data->getRowHeight()) {
            for ($rowID = 1; $rowID <= $this->_maxRow; $rowID++) {
                $sheet->getRowDimension($rowID)->setRowHeight($data->getRowHeight());
            }
        }

        // Horizontal alignments
        if ($data->getHAlignment()) {
            $style->getAlignment()->setHorizontal($data->getHAlignment());
        }

        // Vertical alignments
        if ($data->getVAlignment()) {
            $style->getAlignment()->setVertical($data->getVAlignment());
        }
    }

    /**
     * Fills sheet's values with default data for the maximum data key.
     *
     * @param $data
     * @param $defaultValue
     */
    private function _fillSheetEmptyValue($data, $defaultValue)
    {
        $maxColumn = 0;
        $maxRow = 0;

        foreach ($data as $key => $datum) {
            if ($key > $maxColumn) {
                $maxColumn = $key;
            }

            $maxKey = max(array_keys($datum));
            if ($maxKey > $maxRow) {
                $maxRow = $maxKey;
            }
        }

        // Switch column with row if the direction is by rows
        if ($this->_isRowDirection) {
            list($maxRow, $maxColumn) = [$maxColumn, $maxRow];
        }

        // Sets null values
        $values = [];
        for ($i = 0; $i <= $maxRow; $i++) {
            $values[] = array_fill(0, $maxColumn + 1, $defaultValue);
        }
        $this->_values = $values;

        // Sets max column coordinate
        $this->_maxColumn = $maxColumn;

        // Sets max row coordinate
        $this->_maxRow = $maxRow;

        // Sets max cell coordinate
        $this->_maxCellCoordinate = Coordinate::stringFromColumnIndex($this->_maxColumn) . $this->_maxRow;
    }
}

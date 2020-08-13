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
     * Uses ArrayExcelBuilderReader to load from file.
     */
    use ArrayExcelBuilderReader;

    /**
     * PhpOffice\PhpSpreadsheet\Spreadsheet
     *
     * @var Spreadsheet
     */
    private $_spreadsheet;

    /**
     * Flag to determine if Spreadsheet is built.
     *
     * @var bool
     */
    private $_isBuilt = false;

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
    private $_params = [];

    /**
     * Is it row direction.
     *
     * @var bool
     */
    private $_isRowDirection = false;

    /**
     * Cell values.
     *
     * @var array
     */
    private $_values = [];

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
    private $_maxCellCoordinates = 'A1';

    /**
     * Columns that should not be involved in the auto size.
     *
     * @var array
     */
    private $_notAutoSizeColumns = [];

    /**
     * Allow callback function.
     *
     * @var bool
     */
    private $_allowCallback = true;

    /**
     * ArrayExcelBuilder constructor.
     *
     * @param array $data - cells array data
     * @param array $params - global params
     * @param bool $allowCallback - allow callback param
     */
    public function __construct(array $data = [], array $params = [], $allowCallback = true)
    {
        // Sets new Spreadsheet
        $this->_spreadsheet = new Spreadsheet();

        // Sets allow callback param
        $this->setAllowCallback($allowCallback);

        // Sets cells array data
        if (!empty($data)) {
            $this->setData($data);
        }

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
        // Sets data
        $this->_data = $data;

        // Sets sheets count
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
     * Sets allow callback param.
     *
     * @param $allowCallback
     * @return $this
     */
    public function setAllowCallback($allowCallback)
    {
        $this->_allowCallback = (bool)$allowCallback;

        return $this;
    }

    /**
     * Save spreadsheet to file or variable.
     *
     * @param string $pathToFile
     * @param array $options
     * @param bool $saveToVariable
     * @return bool|false|string
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function save($pathToFile = '', array $options = [], $saveToVariable = false)
    {
        // Build the spreadsheet if it is not built before saving
        if (!$this->_isBuilt) {
            $this->build();
        }

        // If the file name is not transferred, then set the default value
        $pathToFile = $pathToFile ? (string)$pathToFile : 'Document_' . date('Y-m-d_H-i-s');

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
            ob_start();
            $writer->save('php://output');

            return ob_get_clean();
        } else {
            $writer->save($pathToFile . '.' . $extension);

            return true;
        }
    }

    /**
     * Build excel.
     *
     * @return ArrayExcelBuilder
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     *
     * @throws Exception
     */
    public function build()
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
            if (isset($sheetData['isRowDirection'])) {
                $this->_isRowDirection = (bool)$sheetData['isRowDirection'];
            }

            // Is show grid lines
            if (isset($sheetData['showGridLines']) && is_bool($sheetData['showGridLines'])
                && !$sheetData['showGridLines']
            ) {
                $this->_spreadsheet->getActiveSheet()->setShowGridlines($sheetData['showGridLines']);
            }

            // Sets page orientation
            if (isset($sheetData['orientation']) && is_string($sheetData['orientation'])) {
                $this->_spreadsheet->getActiveSheet()->getPageSetup()->setOrientation($sheetData['orientation']);
            }

            // Sets page's paper size
            if (isset($sheetData['paperSize'])) {
                $this->_spreadsheet->getActiveSheet()->getPageSetup()->setPaperSize((int)$sheetData['paperSize']);
            }

            // Apply global params
            $this->_setGlobalParams($sheetData['data']);

            // Build sheet
            $this->_buildSheet($sheetData['data']);

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

        unset($this->_values);

        // Sets that the excel is built
        $this->_isBuilt = true;

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
            $columnId = $this->_isRowDirection ? $childIndex : $parentIndex;
            $rowId = $this->_isRowDirection ? $parentIndex : $childIndex;

            // Build cell
            $this->_buildCell($columnId, $rowId, $cellData);
        }
    }

    /**
     * Builds cell.
     *
     * If "$cellData" an array, then it is an array of cell parameters.
     * If not an array, then this is the value of the cell.
     *
     * @param int $columnId - column id start with 0 for column A
     * @param int $rowId - row id start with 0 for first row
     * @param array|string|number|bool|mixed $cellData
     * @return bool
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _buildCell($columnId, $rowId, $cellData)
    {
        // Cell counting starts from one
        ++$columnId;
        ++$rowId;

        // Get active sheet
        $sheet = $this->_spreadsheet->getActiveSheet();

        // Sets cell value if cell data is not array
        if (!is_array($cellData)) {
            if ($cellData === '') {
                return false;
            } else {
                $sheet->setCellValueByColumnAndRow($columnId, $rowId, $this->_normalizeValue($cellData));

                return true;
            }
        } else {
            // Optimize set value
            if (!empty($cellData)) {
                if (count($cellData) == 1 && isset($cellData['value'])) {
                    $sheet->setCellValueByColumnAndRow($columnId, $rowId, $this->_normalizeValue($cellData['value']));

                    return true;
                } elseif ($cellData['value'] === '') {
                    return false;
                }
            } else {
                return false;
            }
        }

        // Get column index
        $columnIndex = Coordinate::stringFromColumnIndex($columnId);

        // Set data from params and cell data to cell DTO
        $data = new ArrayExcelBuilderCellDTO();
        $data->setDataFromArray($cellData);

        // Set value
        $sheet->setCellValueByColumnAndRow($columnId, $rowId, $data->getValue());

        // Cell comment
        if ($comment = $data->getComment()) {
            $sheet->getCommentByColumnAndRow($columnId, $rowId)->getText()->createTextRun($comment);
        }

        // Merge columns and rows
        if ($mergeColumns = $data->getMergeColumns() || $mergeRows = $data->getMergeRows()) {
            $columnDestinationID = $data->getMergeColumns() > 0 ? $columnId + $data->getMergeColumns() : $columnId;
            $rowDestinationID = $data->getMergeRows() > 0 ? $rowId + $data->getMergeRows() : $rowId;

            $sheet->mergeCellsByColumnAndRow($columnId, $rowId, $columnDestinationID, $rowDestinationID);
        }

        // Style params
        if ($data->isStyleParams()) {
            $style = $sheet->getCell($columnIndex . $rowId)->getStyle();

            // Cell font color
            if ($fontColor = $data->getFontColor()) {
                $phpColor = new Color();
                $phpColor->setRGB($fontColor);
                $style->getFont()->setColor($phpColor);
            }

            // Cell background
            if ($fillColor = $data->getFillColor()) {
                $style->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB($fillColor);
            }

            // Is cell value bold
            if ($isBold = $data->isBold()) {
                $style->getFont()->setBold($isBold);
            }

            // Set the border on the top
            if ($borderTop = $data->getBorderTop()) {
                $phpColor = new Color();
                $phpColor->setRGB($data->getBorderTopColor());
                $style->getBorders()->getTop()->setBorderStyle($borderTop)->setColor($phpColor);
            }

            // Set the border on the bottom
            if ($borderBottom = $data->getBorderBottom()) {
                $phpColor = new Color();
                $phpColor->setRGB($data->getBorderBottomColor());
                $style->getBorders()->getBottom()->setBorderStyle($borderBottom)->setColor($phpColor);
            }

            // Set the border on the left
            if ($borderLeft = $data->getBorderLeft()) {
                $phpColor = new Color();
                $phpColor->setRGB($data->getBorderLeftColor());
                $style->getBorders()->getLeft()->setBorderStyle($borderLeft)->setColor($phpColor);
            }

            // Set the border on the right
            if ($orderRight = $data->getBorderRight()) {
                $phpColor = new Color();
                $phpColor->setRGB($data->getBorderRightColor());
                $style->getBorders()->getRight()->setBorderStyle($orderRight)->setColor($phpColor);
            }

            // Set font size
            if ($fontSize = $data->getFontSize()) {
                $style->getFont()->setSize($fontSize);
            }

            // Text wrap
            if ($isWrapText = $data->isWrapText()) {
                $style->getAlignment()->setWrapText($isWrapText);
            }

            // Horizontal alignment
            if ($hAlignment = $data->getHAlignment()) {
                $style->getAlignment()->setHorizontal($hAlignment);
            }

            // Vertical alignment
            if ($vAlignment = $data->getVAlignment()) {
                $style->getAlignment()->setVertical($vAlignment);
            }

            // Set style from array
            if ($styleArray = $data->getStyleArray()) {
                $style->applyFromArray($styleArray);
            }
        }

        // Set global column width
        if ($this->_params->getColumnWidth() && !$data->getColumnWidth()) {
            $sheet->getColumnDimensionByColumn($columnId)->setWidth($this->_params->getColumnWidth());

            // If the column has a width, then we include it in the auto size exceptions
            $this->_notAutoSizeColumns[$columnIndex] = true;
        }

        // Set column width
        if ($columnWidth = $data->getColumnWidth()) {
            $sheet->getColumnDimensionByColumn($columnId)->setWidth($columnWidth);

            // If the column has a width, then we include it in the auto size exceptions
            $this->_notAutoSizeColumns[$columnIndex] = true;
        }

        // Set row height
        if ($rowHeight = $data->getRowHeight()) {
            $sheet->getRowDimension($rowId)->setRowHeight($rowHeight);
        }

        // Cell hyperlink. For example: 'sheet://"Sheet name"!A1' or 'www.example.com'
        if ($url = $data->getUrl()) {
            $sheet->getCell($columnIndex . $rowId)->getHyperlink()->setUrl($url);
        }

        // Sets image
        if ($image = $data->getImage()) {
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
            if ($shadow = $image->getShadow()) {
                $objDrawing->setShadow($shadow);
            }

            // Sets image hyper link
            if ($hyperlink = $image->getHyperlink()) {
                $objDrawing->setHyperlink($hyperlink);
            }

            $objDrawing->setWorksheet($sheet);
            $objDrawing->setCoordinates($columnIndex . $rowId);
        }

        // Runs callback function
        if ($this->_allowCallback && $callback = $data->getCallback()) {
            $callbackResult = $callback([
                'spreadsheet'        => $this->_spreadsheet,
                'columnId'           => $columnId,
                'rowId'              => $rowId,
                'dataDto'            => $data,
                'paramsDto'          => $this->_params,
                'columnName'         => $columnIndex,
                'cell'               => $columnIndex . $rowId,
                'sheetsNumber'       => $this->_sheetCount,
                'maxRow'             => $this->_maxRow,
                'maxColumn'          => $this->_maxColumn,
                'maxCellCoordinates' => $this->_maxCellCoordinates,
            ]);

            // Apply callback results
            $this->_spreadsheet = $callbackResult['spreadsheet'];
        }

        return true;
    }

    /**
     * Apply global params.
     *
     * @param array $sheetData
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    private function _setGlobalParams(array $sheetData)
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
        $style = $sheet->getStyle('A1:' . $this->_maxCellCoordinates);

        // Set the border on the top of all cells on the page
        if ($allBorderTop = $data->getAllBorderTop()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getAllBorderTopColor());
            $defaultStyle->getBorders()->getTop()->setBorderStyle($allBorderTop)->setColor($phpColor);
        }

        // Set the border on the bottom of all cells on the page
        if ($allBorderBottom = $data->getAllBorderBottom()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getAllBorderBottomColor());
            $defaultStyle->getBorders()->getBottom()->setBorderStyle($allBorderBottom)->setColor($phpColor);
        }

        // Set the border on the left of all cells on the page
        if ($allBorderLeft = $data->getAllBorderLeft()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getAllBorderLeftColor());
            $defaultStyle->getBorders()->getLeft()->setBorderStyle($allBorderLeft)->setColor($phpColor);
        }

        // Set the border on the right of all cells on the page
        if ($allBorderRight = $data->getAllBorderRight()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getAllBorderRightColor());
            $defaultStyle->getBorders()->getRight()->setBorderStyle($allBorderRight)->setColor($phpColor);
        }

        // Cells font color
        if ($fontColor = $data->getFontColor()) {
            $phpColor = new Color();
            $phpColor->setRGB($fontColor);
            $style->getFont()->setColor($phpColor);
        }

        // Cells background
        if ($fillColor = $data->getFillColor()) {
            $style->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB($fillColor);
        }

        // Is cells value bold
        if ($isBold = $data->isBold()) {
            $style->getFont()->setBold($isBold);
        }

        // Set borders on the top
        if ($borderTop = $data->getBorderTop()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderTopColor());
            $style->getBorders()->getTop()->setBorderStyle($borderTop)->setColor($phpColor);
        }

        // Set borders on the bottom
        if ($borderBottom = $data->getBorderBottom()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderBottomColor());
            $style->getBorders()->getBottom()->setBorderStyle($borderBottom)->setColor($phpColor);
        }

        // Set borders on the left
        if ($borderLeft = $data->getBorderLeft()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderLeftColor());
            $style->getBorders()->getLeft()->setBorderStyle($borderLeft)->setColor($phpColor);
        }

        // Set borders on the right
        if ($borderRight = $data->getBorderRight()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderRightColor());
            $style->getBorders()->getRight()->setBorderStyle($borderRight)->setColor($phpColor);
        }

        // Set vertical borders
        if ($borderVertical = $data->getBorderVertical()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderVerticalColor());
            $style->getBorders()->getVertical()->setBorderStyle($borderVertical)->setColor($phpColor);
        }

        // Set horizontal borders
        if ($borderHorizontal = $data->getBorderHorizontal()) {
            $phpColor = new Color();
            $phpColor->setRGB($data->getBorderHorizontalColor());
            $style->getBorders()->getHorizontal()->setBorderStyle($borderHorizontal)->setColor($phpColor);
        }

        // Set font sizes
        if ($fontSize = $data->getFontSize()) {
            $style->getFont()->setSize($fontSize);
        }

        // Texts wrap
        if ($isWrapText = $data->isWrapText()) {
            $style->getAlignment()->setWrapText($isWrapText);
        }

        // Set styles from array
        $styleArray = $data->getStyleArray();
        if (!empty($styleArray)) {
            $style->applyFromArray($styleArray);
        }

        // Set columns width
        if ($columnWidth = $data->getColumnWidth()) {
            for ($columnId = 1; $columnId <= $this->_maxColumn; $columnId++) {
                $sheet->getColumnDimensionByColumn($columnId)->setWidth($columnWidth);
            }
        }

        // Set rows height
        if ($rowHeight = $data->getRowHeight()) {
            for ($rowId = 1; $rowId <= $this->_maxRow; $rowId++) {
                $sheet->getRowDimension($rowId)->setRowHeight($rowHeight);
            }
        }

        // Horizontal alignments
        if ($hAlignment = $data->getHAlignment()) {
            $style->getAlignment()->setHorizontal($hAlignment);
        }

        // Vertical alignments
        if ($vAlignment = $data->getVAlignment()) {
            $style->getAlignment()->setVertical($vAlignment);
        }

        // Protect from editing
        if ($data->isProtect()) {
            $sheet->getProtection()->setSheet(true);
            $sheet->getProtection()->setSort(true);
            $sheet->getProtection()->setInsertRows(true);
            $sheet->getProtection()->setFormatCells(true);
        }

        // Runs callback function
        if ($this->_allowCallback && $callback = $data->getCallback()) {
            $callbackResult = $callback([
                'spreadsheet'        => $this->_spreadsheet,
                'dataDto'            => $data,
                'paramsDto'          => $this->_params,
                'sheetsNumber'       => $this->_sheetCount,
                'maxRow'             => $this->_maxRow,
                'maxColumn'          => $this->_maxColumn,
                'maxCellCoordinates' => $this->_maxCellCoordinates,
            ]);

            // Apply callback results
            $this->_spreadsheet = $callbackResult['spreadsheet'];
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

        ++$maxColumn;
        ++$maxRow;

        // Sets null values
        $values = [];
        for ($i = 0; $i < $maxRow; $i++) {
            $values[] = array_fill(0, $maxColumn, $defaultValue);
        }
        $this->_values = $values;

        // Sets max column coordinate
        $this->_maxColumn = $maxColumn;

        // Sets max row coordinate
        $this->_maxRow = $maxRow;

        // Sets max cell coordinate
        $this->_maxCellCoordinates = Coordinate::stringFromColumnIndex($this->_maxColumn) . $this->_maxRow;
    }

    /**
     * Get Spreadsheet.
     *
     * @return Spreadsheet
     */
    public function getSpreadsheet()
    {
        return $this->_spreadsheet;
    }

    /**
     * Normalize value.
     *
     * @param $value
     * @return bool|false|int|string
     * @since 4.0.0
     */
    private function _normalizeValue($value)
    {
        return (is_string($value) || is_numeric($value) || is_bool($value))
            ? $value
            : json_encode($value);
    }
}

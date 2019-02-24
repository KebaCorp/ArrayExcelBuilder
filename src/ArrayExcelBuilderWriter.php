<?php
/**
 * Created by Abek Narynov.
 * Date: 2019-02-24
 * @link https://github.com/KebaCorp
 * @copyright Copyright (c) 2018 KebaCorp
 */

namespace KebaCorp\ArrayExcelBuilder;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Writer\Html;
use PhpOffice\PhpSpreadsheet\Writer\Ods;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Mpdf;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Tcpdf;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * Class ArrayExcelBuilderWriter.
 *
 * Writer generator.
 *
 * @package KebaCorp\ArrayExcelBuilder
 */
class ArrayExcelBuilderWriter
{
    /**
     * Spreadsheet.
     *
     * @var Spreadsheet
     */
    private $_spreadsheet;

    /**
     * Include charts.
     *
     * @var bool
     */
    private $_includeCharts = true;

    /**
     * Enable office 2003 compatibility.
     *
     * @var bool
     */
    private $_office2003Compatibility = false;

    /**
     * Pre calculate formulas.
     *
     * @var bool
     */
    private $_calculateFormulas = true;

    /**
     * Use UTF-8 BOM.
     *
     * @var bool
     */
    private $_useBOM = true;

    /**
     * Enclosure.
     *
     * @var string
     */
    private $_enclosure = '';

    /**
     * Line ending.
     *
     * @var string
     */
    private $_lineEnding = "\r\n";

    /**
     * Delimiter.
     *
     * @var string
     */
    private $_delimiter = ';';

    /**
     * Sheet's index to be render.
     *
     * @var int
     */
    private $_sheetIndex = 0;

    /**
     * Images root path.
     *
     * @var string
     */
    private $_imagesRoot = '';

    /**
     * PDF builder class.
     *
     * @var string In lowercase
     */
    private $_pdfBuilder = 'mpdf';

    /**
     * Render all sheets.
     *
     * @var bool
     */
    private $_allSheets = true;

    /**
     * ArrayExcelBuilderWriter constructor.
     * @param Spreadsheet $spreadsheet
     */
    public function __construct(Spreadsheet $spreadsheet)
    {
        // Sets Spreadsheet
        $this->_spreadsheet = $spreadsheet;
    }

    /**
     * Set writer options from array.
     *
     * @param array $options
     *
     * @return bool: true - if the options has been changed, false - if the options has not been changed
     */
    public function setOptionsFromArray(array $options)
    {
        $isChanged = false;

        // Enable charts
        if (isset($options['includeCharts'])) {
            $this->_includeCharts = (bool)$options['includeCharts'];
            $isChanged = true;
        }

        // Sets office 2003 compatibility
        if (isset($options['office2003'])) {
            $this->_office2003Compatibility = (bool)$options['office2003'];
            $isChanged = true;
        }

        // Sets pre calculate formulas
        if (isset($options['calculateFormulas'])) {
            $this->_calculateFormulas = (bool)$options['calculateFormulas'];
            $isChanged = true;
        }

        // Sets UTF-8 BOM
        if (isset($options['useBOM'])) {
            $this->_useBOM = (bool)$options['useBOM'];
            $isChanged = true;
        }

        // Sets enclosure
        if (isset($options['enclosure'])) {
            $this->_enclosure = (string)$options['enclosure'];
            $isChanged = true;
        }

        // Sets line ending
        if (isset($options['lineEnding'])) {
            $this->_lineEnding = (string)$options['lineEnding'];
            $isChanged = true;
        }

        // Sets delimiter
        if (isset($options['delimiter'])) {
            $this->_delimiter = (string)$options['delimiter'];
            $isChanged = true;
        }

        // Sets sheet's index to be saved
        if (isset($options['sheetIndex'])) {
            $this->_sheetIndex = (int)$options['sheetIndex'];
            $isChanged = true;
        }

        // Sets images root
        if (isset($options['imagesRoot'])) {
            $this->_imagesRoot = (string)$options['imagesRoot'];
            $isChanged = true;
        }

        // Sets pdf writer class
        if (isset($options['pdfBuilder'])) {
            $this->_pdfBuilder = strtolower((string)$options['pdfBuilder']);
            $isChanged = true;
        }

        // Sets all sheets to be saved
        if (isset($options['allSheets'])) {
            $this->_allSheets = (bool)$options['allSheets'];
            $isChanged = true;
        }

        return $isChanged;
    }

    /**
     * Creates a XLSX (Excel 2007) writer.
     *
     * @return Xlsx
     */
    public function getXLSXWriter()
    {
        $writer = new Xlsx($this->_spreadsheet);

        // Enable charts
        $writer->setIncludeCharts($this->_includeCharts);

        // Sets office 2003 compatibility
        $writer->setOffice2003Compatibility($this->_office2003Compatibility);

        // Sets pre calculate formulas
        $writer->setPreCalculateFormulas($this->_calculateFormulas);

        return $writer;
    }

    /**
     * Creates a XLS (Excel 5) writer.
     *
     * @return Xls
     */
    public function getXLSWriter()
    {
        $writer = new Xls($this->_spreadsheet);

        // Enable charts
        $writer->setIncludeCharts($this->_includeCharts);

        // Sets pre calculate formulas
        $writer->setPreCalculateFormulas($this->_calculateFormulas);

        return $writer;
    }

    /**
     * Creates a ODS (Libre Office) writer.
     *
     * @return Ods
     */
    public function getODSWriter()
    {
        $writer = new Ods($this->_spreadsheet);

        // Enable charts
        $writer->setIncludeCharts($this->_includeCharts);

        // Sets pre calculate formulas
        $writer->setPreCalculateFormulas($this->_calculateFormulas);

        return $writer;
    }

    /**
     * Creates a CSV writer.
     *
     * @return Csv
     */
    public function getCSVWriter()
    {
        $writer = new Csv($this->_spreadsheet);

        // Sets pre calculate formulas
        $writer->setPreCalculateFormulas($this->_calculateFormulas);

        // Sets UTF-8 BOM
        $writer->setUseBOM($this->_useBOM);

        // Sets enclosure
        $writer->setEnclosure($this->_enclosure);

        // Sets line ending
        $writer->setLineEnding($this->_lineEnding);

        // Sets delimiter
        $writer->setDelimiter($this->_delimiter);

        // Sets sheet's index to be saved
        $writer->setSheetIndex($this->_sheetIndex);

        return $writer;
    }

    /**
     * Creates a HTML writer.
     *
     * @return Html
     */
    public function getHTMLWriter()
    {
        $writer = new Html($this->_spreadsheet);

        // Sets pre calculate formulas
        $writer->setPreCalculateFormulas($this->_calculateFormulas);

        // Sets images root
        $writer->setImagesRoot($this->_imagesRoot);

        return $writer;
    }

    /**
     * Creates a PDF writer.
     *
     * @return Dompdf|Mpdf|Tcpdf
     */
    public function getPDFWriter()
    {
        switch ($this->_pdfBuilder) {
            case 'dompdf':
                $writer = new Dompdf($this->_spreadsheet);
                break;

            case 'tcpdf':
                $writer = new Tcpdf($this->_spreadsheet);
                break;

            default:
                $writer = new Mpdf($this->_spreadsheet);
        }

        // Sets pre calculate formulas
        $writer->setPreCalculateFormulas($this->_calculateFormulas);

        // Sets all sheets or sheet's index to be saved
        if ($this->_allSheets) {
            $writer->writeAllSheets();
        } else {
            $writer->setSheetIndex($this->_sheetIndex);
        }

        return $writer;
    }
}

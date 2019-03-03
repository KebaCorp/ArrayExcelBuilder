<?php
/**
 * Created by Abek Narynov.
 * Date: 2019-03-03
 * @link https://github.com/KebaCorp
 * @copyright Copyright (c) 2019 KebaCorp
 */

namespace KebaCorp\ArrayExcelBuilder;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

/**
 * Trait ArrayExcelBuilderReader.
 *
 * @package KebaCorp\ArrayExcelBuilder
 */
trait ArrayExcelBuilderReader
{
    /**
     * PhpOffice\PhpSpreadsheet\Spreadsheet
     *
     * @var Spreadsheet
     */
    private $_spreadsheet;

    /**
     * Loads Spreadsheet from file.
     *
     * @param $file
     * @return $this
     * @throws \PhpOffice\PhpSpreadsheet\Reader\Exception
     */
    public function load($file)
    {
        $reader = IOFactory::createReaderForFile($file);

        $this->_spreadsheet = $reader->load($file);

        return $this;
    }

    /**
     * Get matrix aray.
     *
     * @return array
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function getMatrixArray()
    {
        // Gets sheets count
        $sheetsCount = $this->_spreadsheet->getSheetCount();

        $result = [];
        for ($sheetIndex = 0; $sheetIndex < $sheetsCount; $sheetIndex++) {

            // Sets active sheet
            $this->_spreadsheet->setActiveSheetIndex($sheetIndex);

            $cells = $this->_spreadsheet->getActiveSheet()->getCellCollection();
            $maxRowAndColumn = $cells->getHighestRowAndColumn();
            $maxRow = $maxRowAndColumn['row'];
            $maxColumn = ++$maxRowAndColumn['column'];

            for ($row = 0; $row <= $maxRow; $row++) {
                for ($col = 'A'; $col != $maxColumn; $col++) {
                    if ($cells->has($col . $row)) {
                        $result[$sheetIndex][$col][$row] = $cells->get($col . $row)->getValue();
                    }
                }
            }
        }

        return $result;
    }

    /**
     * Get flat array.
     *
     * @return array
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function getFlatArray()
    {
        // Gets sheets count
        $sheetsCount = $this->_spreadsheet->getSheetCount();

        $result = [];
        for ($sheetIndex = 0; $sheetIndex < $sheetsCount; $sheetIndex++) {

            // Sets active sheet
            $this->_spreadsheet->setActiveSheetIndex($sheetIndex);

            $cells = $this->_spreadsheet->getActiveSheet()->getCellCollection();
            $maxRowAndColumn = $cells->getHighestRowAndColumn();
            $maxRow = $maxRowAndColumn['row'];
            $maxColumn = ++$maxRowAndColumn['column'];

            for ($row = 1; $row <= $maxRow; $row++) {
                for ($col = 'A'; $col != $maxColumn; $col++) {
                    if ($cells->has($col . $row)) {
                        $result[] = $cells->get($col . $row)->getValue();
                    }
                }
            }
        }

        return $result;
    }
}

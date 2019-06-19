<?php
/**
 * Created by Abek Narynov.
 * Date: 2019-03-03
 * @link https://github.com/KebaCorp
 * @copyright Copyright (c) 2019 KebaCorp
 */

namespace KebaCorp\ArrayExcelBuilder;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
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
     * @param array $params
     * @return $this
     * @throws \PhpOffice\PhpSpreadsheet\Reader\Exception
     */
    public function load($file, $params = [])
    {
        $reader = IOFactory::createReaderForFile($file);

        // Creates params from array
        $paramsDTO = new ArrayExcelBuilderReaderParamsDTO();
        $paramsDTO->setData($params);

        // Sets params if extension is csv
        if ($reader instanceof Csv) {
            $reader->setInputEncoding($paramsDTO->getEncoding());
        }

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

    /**
     * Get vertical key array.
     *
     * @param bool $normalizeKeys
     * @return array
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function getVerticalKeyArray($normalizeKeys = true)
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

            $headers = [];
            for ($row = 0; $row <= $maxRow; $row++) {
                for ($col = 'A'; $col != $maxColumn; $col++) {

                    if ($row === 1) {
                        if ($cells->has($col . $row)) {
                            $header = $cells->get($col . $row)->getValue();

                            // Normalize keys
                            if ($normalizeKeys) {
                                $header = preg_replace('/\s{1,}/', '_', trim($header));
                                $header = mb_strtolower($header);
                            }

                            $headers[$col] = $header;
                        }
                    } else {
                        if ($cells->has($col . $row)) {
                            $result[$sheetIndex][$row][$headers[$col]] = $cells->get($col . $row)->getValue();
                        }
                    }

                }
            }
        }

        return $result;
    }
}

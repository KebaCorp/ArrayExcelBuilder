<?php
/**
 * Created by Abek Narynov.
 * Date: 2019-06-19
 * @link https://github.com/KebaCorp
 * @copyright Copyright (c) 2019 KebaCorp
 */

namespace KebaCorp\ArrayExcelBuilder;

/**
 * Class ArrayExcelBuilderReaderParamsDTO.
 *
 * DTO for params to read data from files.
 *
 * @package KebaCorp\ArrayExcelBuilder
 */
class ArrayExcelBuilderReaderParamsDTO
{
    /**
     * File encoding.
     *
     * @var string
     */
    private $_encoding = 'UTF-8';

    /**
     * Set data from array.
     *
     * @param $data
     * @return bool
     */
    public function setData($data)
    {
        if (!is_array($data)) {
            return false;
        }

        $isChanged = false;

        // Sets file encoding
        if (isset($data['encoding']) && $data['encoding']) {
            $this->_encoding = (string)$data['encoding'];
            $isChanged = true;
        }

        return $isChanged;
    }

    /**
     * Get file encoding.
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->_encoding;
    }
}

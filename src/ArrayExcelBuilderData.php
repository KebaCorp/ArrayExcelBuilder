<?php

namespace KebaCorp\ArrayExcelBuilder;

use Iterator;
use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;

/**
 * Class ArrayExcelBuilderData
 * @package KebaCorp\ArrayExcelBuilder
 */
class ArrayExcelBuilderData implements Iterator
{
    /**
     * Cache.
     *
     * @var CacheInterface|null
     */
    private $_cache;

    /**
     * Cells data.
     *
     * @var array
     */
    private $_data = [];

    /**
     * Cells data count.
     *
     * @var int
     */
    private $_dataCount;

    /**
     * Current iterator position.
     *
     * @var int
     */
    private $_position = 0;

    /**
     * ArrayExcelBuilderData constructor.
     *
     * @param CacheInterface|null $cache
     */
    public function __construct(CacheInterface $cache = null)
    {
        // Sets cache
        $this->_cache = $cache;
    }

    /**
     * Returns cell data by key.
     *
     * @param $key
     * @return mixed
     */
    public function getDataByKey($key)
    {
        return $this->_data[$key];
    }

    /**
     * Sets cells data.
     *
     * @param array $data
     * @param bool $unsetData
     * @throws InvalidArgumentException
     */
    public function setData(array &$data, $unsetData = false)
    {
        // Sets data count
        $this->_dataCount = count($data);

        foreach ($data as $sheetIndex => $sheet) {
            $arrayExcelBuilderSheetData = new ArrayExcelBuilderSheetData($this->_cache);
            $arrayExcelBuilderSheetData->setData($sheet['data'], $unsetData);
            $sheet['data'] = $arrayExcelBuilderSheetData;

            $this->_data[$sheetIndex] = $sheet;
        }

        // Unset data
        if ($unsetData) {
            $data = [];
            unset($data);
        }
    }

    /**
     * Returns cells data count.
     *
     * @return int
     */
    public function getDataCount()
    {
        return $this->_dataCount;
    }

    /**
     * {@inheritdoc}
     * @return mixed
     */
    public function current()
    {
        return $this->getDataByKey($this->_position);
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        ++$this->_position;
    }

    /**
     * {@inheritdoc}
     */
    public function key()
    {
        return $this->_position;
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return $this->_position < $this->getDataCount() && $this->_position >= 0;
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        $this->_position = 0;
    }
}

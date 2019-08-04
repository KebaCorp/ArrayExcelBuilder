<?php

namespace KebaCorp\ArrayExcelBuilder;

use Iterator;
use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;

/**
 * Class ArrayExcelBuilderSheetData
 * @package KebaCorp\ArrayExcelBuilder
 */
class ArrayExcelBuilderSheetData implements Iterator
{
    /**
     * Cache.
     *
     * @var CacheInterface|null
     */
    private $_cache;

    /**
     * Cache data keys.
     *
     * @var array
     */
    private $_cacheKeys = [];

    /**
     * Cells data.
     *
     * @var array
     */
    private $_data;

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
     * ArrayExcelBuilderSheetData constructor.
     *
     * @param CacheInterface|null $cache
     */
    public function __construct(CacheInterface $cache = null)
    {
        // Sets cache
        $this->_cache = $cache;
    }

    /**
     * Is cache use.
     *
     * @return bool
     */
    public function isUseCache()
    {
        return !!$this->_cache;
    }

    /**
     * Returns cell data by key.
     *
     * @param $key
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function getDataByKey($key)
    {
        return $this->isUseCache() ? $this->_cache->get((string)$this->_position) : $this->_data[$key];
    }

    /**
     * Returns cells data.
     *
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function getData()
    {
        return $this->isUseCache() ? $this->_cache->getMultiple($this->_cacheKeys) : $this->_data;
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

        $isUseCache = $this->isUseCache();

        if ($isUseCache) {
            foreach ($data as $datumIndex => $datum) {
                $key = (string)$datumIndex;
                $this->_cache->set($key, $datum);
                $this->_cacheKeys[] = $key;
            }
        } else {
            $this->_data = $data;
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
     * @throws InvalidArgumentException
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

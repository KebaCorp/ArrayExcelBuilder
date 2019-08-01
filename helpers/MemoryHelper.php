<?php

namespace app\helpers;

/**
 * Class MemoryHelper
 */
class MemoryHelper
{
    const IN_MEGABYTE = 1024 * 1024;
    const IN_KILOBYTE = 1024;
    const IN_BYTE = 1;

    const MEGABYTE = 'MB';
    const KILOBYTE = 'KB';
    const BYTE = 'byte';

    /**
     * Returns memory usage.
     *
     * @param float|int $unit
     * @return float|int
     */
    static public function memoryUsage($unit = self::IN_MEGABYTE)
    {
        return round(memory_get_usage() / $unit);
    }

    /**
     * Prints memory usage.
     *
     * @param string $prefix
     * @param string $postfix
     * @param float|int $unit
     */
    static public function printMemoryUsage($prefix = '', $postfix = '', $unit = self::IN_MEGABYTE)
    {
        echo $prefix . self::memoryUsage($unit) . ' ' . self::MEGABYTE . $postfix;
    }
}

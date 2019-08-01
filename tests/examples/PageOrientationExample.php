<?php

namespace app\tests\examples;

/**
 * Class StressTestExample
 */
class PageOrientationExample
{
    /**
     * Returns data ArrayExcelBuilder.
     *
     * @param int $columns
     * @param int $rows
     * @param string $value
     * @return array
     */
    public static function getData($columns = 10, $rows = 200, $value = 'Lorem ipsum dolor sit amet')
    {
        $values = [];

        // Sheet data
        for ($i = 0; $i < $columns; $i++) {

            // Column
            for ($t = 0; $t < $rows; $t++) {

                // Row with default params
                $values[$i][$t] = [
                    'value'             => $value,
                    'fontColor'         => '',
                    'fillColor'         => '',
                    'bold'              => false,
                    'hAlignment'        => 'general',
                    'vAlignment'        => 'bottom',
                    'wrapText'          => false,
                    'comment'           => '',
                    'mergeColumns'      => 0,
                    'mergeRows'         => 0,
                    'borderBottom'      => 'none',
                    'borderTop'         => 'none',
                    'borderLeft'        => 'none',
                    'borderRight'       => 'none',
                    'borderBottomColor' => '000000',
                    'borderTopColor'    => '000000',
                    'borderLeftColor'   => '000000',
                    'borderRightColor'  => '000000',
                    'styleArray'        => [],
                ];
            }
        }

        // Sheets
        $data = [
            [
                'data'           => $values,
                'isRowDirection' => false,
                'autoSize'       => false,
                'showGridLines'  => true,
                'orientation'    => 'portrait',
                'paperSize'      => 9,
            ],
        ];

        // Global default cell options
        $defaultParams = [
            'allBorderBottom'       => 'none',
            'allBorderTop'          => 'none',
            'allBorderLeft'         => 'none',
            'allBorderRight'        => 'none',
            'allBorderBottomColor'  => '000000',
            'allBorderTopColor'     => '000000',
            'allBorderLeftColor'    => '000000',
            'allBorderRightColor'   => '000000',
            'borderBottomColor'     => '000000',
            'borderTopColor'        => '000000',
            'borderLeftColor'       => '000000',
            'borderRightColor'      => '000000',
            'borderVerticalColor'   => '000000',
            'borderHorizontalColor' => '000000',
            'borderBottom'          => 'none',
            'borderTop'             => 'none',
            'borderLeft'            => 'none',
            'borderRight'           => 'none',
            'borderVertical'        => 'none',
            'borderHorizontal'      => 'none',
            'hAlignment'            => 'general',
            'vAlignment'            => 'bottom',
            'fontColor'             => '',
            'bold'                  => false,
            'value'                 => '',
            'wrapText'              => false,
            'fillColor'             => '',
            'styleArray'            => [],
        ];

        return [
            'data'          => $data,
            'defaultParams' => $defaultParams,
        ];
    }
}

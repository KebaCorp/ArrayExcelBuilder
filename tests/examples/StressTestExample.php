<?php

namespace app\tests\examples;

/**
 * Class StressTestExample
 */
class StressTestExample
{
    /**
     * Returns data ArrayExcelBuilder.
     *
     * @param int $columns
     * @param int $rows
     * @param string $value
     * @return array
     */
    public static function getData($columns = 10, $rows = 7000, $value = 'Lorem ipsum dolor sit amet')
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

//                // Row with non default params
//                $values[$i][$t] = [
//                    'value' => $value,
//                    'fontColor' => '255000',
//                    'fillColor' => '255000',
//                    'bold' => true,
//                    'hAlignment' => 'center',
//                    'vAlignment' => 'center',
//                    'wrapText' => true,
//                    'comment' => 'This is comment',
//                    'mergeColumns' => 1,
//                    'mergeRows' => 1,
//                    'borderBottom' => 'dashDotDot',
//                    'borderTop' => 'dashDotDot',
//                    'borderLeft' => 'dashDotDot',
//                    'borderRight' => 'dashDotDot',
//                    'borderBottomColor' => 'cccccc',
//                    'borderTopColor' => 'cccccc',
//                    'borderLeftColor' => 'cccccc',
//                    'borderRightColor' => 'cccccc',
//                    'styleArray' => [
//                        'font' => [
//                            'name' => 'Arial',
//                            'bold' => true,
//                            'italic' => true,
//                            'underline' => 'double', // none, double, doubleAccounting, single, singleAccounting
//                            'strikethrough' => true,
//                            'size'  => 15,
//                            'color' => [
//                                'rgb' => '808080'
//                            ]
//                        ],
//                        'alignment' => [
//                            'horizontal' => 'center', // general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only
//                            'vertical' => 'center', // bottom, top, center, justify, distributed - Excel2007 only
//                        ],
//                        'borders' => [
//                            'bottom' => [
//                                'borderStyle' => 'dashDot', // none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin
//                                'color' => [
//                                    'rgb' => '808080'
//                                ]
//                            ],
//                            'top' => [
//                                'borderStyle' => 'dashed',
//                                'color' => [
//                                    'rgb' => '808080'
//                                ]
//                            ],
//                            'left' => [
//                                'borderStyle' => 'mediumDashDot',
//                                'color' => [
//                                    'rgb' => '808080'
//                                ]
//                            ],
//                            'right' => [
//                                'borderStyle' => 'mediumDashed',
//                                'color' => [
//                                    'rgb' => '808080'
//                                ]
//                            ],
//                            'vertical' => [
//                                'borderStyle' => 'mediumDashed',
//                                'color' => [
//                                    'rgb' => '808080'
//                                ]
//                            ],
//                            'horizontal' => [
//                                'borderStyle' => 'mediumDashed',
//                                'color' => [
//                                    'rgb' => '808080'
//                                ]
//                            ],
//                        ],
//                        'quotePrefix' => true,
//                    ],
//                ];
            }
        }

        // Sheets
        $data = [
            [
                'data'           => $values,
                'isRowDirection' => false,
                'autoSize'       => false,
                'showGridLines'  => true,
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

//        // Global non default cell options
//        $defaultParams = [
//            'allBorderBottom' => 'dashDot', // OK
//            'allBorderTop' => 'dotted', // OK
//            'allBorderLeft' => 'mediumDashDotDot', // OK
//            'allBorderRight' => 'hair', // OK
//            'allBorderBottomColor' => '255000', // OK
//            'allBorderTopColor' => '255000', // OK
//            'allBorderLeftColor' => '255000', // OK
//            'allBorderRightColor' => '255000', // OK
//            'borderBottomColor' => '255000', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderTopColor' => '255000', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderLeftColor' => '255000', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderRightColor' => '255000', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderVerticalColor' => '255000', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderHorizontalColor' => '255000', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderBottom' => 'dashDot', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderTop' => 'dotted', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderLeft' => 'mediumDashDotDot', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderRight' => 'hair', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderVertical' => 'dashDot', // OK !!!!!!!!!!!!!!!!!!!!!
//            'borderHorizontal' => 'dotted', // OK !!!!!!!!!!!!!!!!!!!!!
//            'fontColor' => 'a3a3a3', // OK !!!!!!!!!!!!!!!!!!!!!
//            'fontSize' => 9, // OK !!!!!!!!!!!!!!!!!!!!!
//            'bold' => true, // OK !!!!!!!!!!!!!!!!!!!!!
//            'hAlignment' => 'center', // OK !!!!!!!!!!!!!!!!!!!!!
//            'vAlignment' => 'center', // OK !!!!!!!!!!!!!!!!!!!!!
//            'value' => 'none', // OK
//            'wrapText' => true, // OK
//            'columnWidth' => 50, // OK
//            'rowHeight' => 40, // OK
//            'fillColor' => 'cccccc', // OK
//            'styleArray' => [ // OK
//                'font' => [ // OK
//                    'name' => 'Arial',
//                    'bold' => true,
//                    'italic' => true,
//                    'size'  => 15,
//                    'underline' => 'double', // none, double, doubleAccounting, single, singleAccounting
//                    'strikethrough' => true,
//                    'color' => [
//                        'rgb' => '255000',
//                    ]
//                ],
//                'alignment' => [
//                    'horizontal' => 'center', // general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only
//                    'vertical' => 'center', // bottom, top, center, justify, distributed - Excel2007 only
//                ],
//                'borders' => [ // OK
//                    'bottom' => [
//                        'borderStyle' => 'dashDot', // none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin
//                        'color' => [
//                            'rgb' => '255000'
//                        ]
//                    ],
//                    'top' => [
//                        'borderStyle' => 'dashed',
//                        'color' => [
//                            'rgb' => '255000'
//                        ]
//                    ],
//                    'left' => [
//                        'borderStyle' => 'mediumDashDot',
//                        'color' => [
//                            'rgb' => '255000'
//                        ]
//                    ],
//                    'right' => [
//                        'borderStyle' => 'mediumDashed',
//                        'color' => [
//                            'rgb' => '255000'
//                        ]
//                    ],
//                    'vertical' => [
//                        'borderStyle' => 'mediumDashed',
//                        'color' => [
//                            'rgb' => '255000'
//                        ]
//                    ],
//                    'horizontal' => [
//                        'borderStyle' => 'mediumDashed',
//                        'color' => [
//                            'rgb' => '255000'
//                        ]
//                    ],
//                ],
//                'quotePrefix' => true,
//            ],
//        ];

        return [
            'data'          => $data,
            'defaultParams' => $defaultParams,
        ];
    }
}

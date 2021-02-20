<?php

namespace app\tests\examples;

/**
 * Class MainExample
 */
class MainExample
{
    /**
     * Returns data ArrayExcelBuilder.
     *
     * @return array
     */
    public static function getData()
    {
        // Chart data
        $labels = [
            // Label 1
            [
                'dataType' => 'String', // Type of data: Number, String (не обязательный параметр).
                'sheetName' => 'Worksheet', // Название страницы, где находится Label.
                'column' => 'B', // Имя колонки. Именование колонки ведется в латинских буквах начиная от A и далее.
                'row' => 1, // Номер строки. Именование строки ведется в цифрах начиная с 1.
            ],
            // Label 2
            [
                'dataType' => 'String', // Type of data: Number, String (не обязательный параметр).
                'sheetName' => 'Worksheet', // Название страницы, где находится Label.
                'column' => 'C', // Имя колонки. Именование колонки ведется в латинских буквах начиная от A и далее.
                'row' => 1, // Номер строки. Именование строки ведется в цифрах начиная с 1.
            ],
            // Label 3
            [
                'dataType' => 'String', // Type of data: Number, String (не обязательный параметр).
                'sheetName' => 'Worksheet', // Название страницы, где находится Label.
                'column' => 'D', // Имя колонки. Именование колонки ведется в латинских буквах начиная от A и далее.
                'row' => 1, // Номер строки. Именование строки ведется в цифрах начиная с 1.
            ],
        ];

        $xValues = [
            // Value 1
            [
                'dataType' => 'String',
                // Type of data: Number, String (не обязательный параметр).
                'sheetName' => 'Worksheet',
                // Название страницы, где находятся значения для оси X.
                'startColumn' => 'A',
                // Имя колонки, где начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
                'startRow' => 2,
                // Номер строки, где начинаются данные. Именование строки ведется в цифрах начиная с 1.
                'endColumn' => 'A',
                // Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
                'endRow' => 5,
                // Номер строки, где заканчиваются данные. Именование строки ведется в цифрах начиная с 1.
            ],
            // Value 2
            [
                'dataType' => 'String',
                // Type of data: Number, String (не обязательный параметр).
                'sheetName' => 'Worksheet',
                // Название страницы, где находятся значения для оси X.
                'startColumn' => 'A',
                // Имя колонки, где начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
                'startRow' => 2,
                // Номер строки, где начинаются данные. Именование строки ведется в цифрах начиная с 1.
                'endColumn' => 'A',
                // Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
                'endRow' => 5,
                // Номер строки, где заканчиваются данные. Именование строки ведется в цифрах начиная с 1.
            ],
        ];

        $yValues = [
            // Value 1
            [
                'dataType' => 'String',
                // Type of data: Number, String (не обязательный параметр).
                'sheetName' => 'Worksheet',
                // Название страницы, где находятся значения для оси X.
                'startColumn' => 'B',
                // Имя колонки, где начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
                'startRow' => 2,
                // Номер строки, где начинаются данные. Именование строки ведется в цифрах начиная с 1.
                'endColumn' => 'B',
                // Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
                'endRow' => 5,
                // Номер строки, где заканчиваются данные. Именование строки ведется в цифрах начиная с 1.
            ],
            // Value 2
            [
                'dataType' => 'String',
                // Type of data: Number, String (не обязательный параметр).
                'sheetName' => 'Worksheet',
                // Название страницы, где находятся значения для оси X.
                'startColumn' => 'C',
                // Имя колонки, где начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
                'startRow' => 2,
                // Номер строки, где начинаются данные. Именование строки ведется в цифрах начиная с 1.
                'endColumn' => 'C',
                // Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
                'endRow' => 5,
                // Номер строки, где заканчиваются данные. Именование строки ведется в цифрах начиная с 1.
            ],
            // Value 3
            [
                'dataType' => 'String',
                // Type of data: Number, String (не обязательный параметр).
                'sheetName' => 'Worksheet',
                // Название страницы, где находятся значения для оси X.
                'startColumn' => 'D',
                // Имя колонки, где начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
                'startRow' => 2,
                // Номер строки, где начинаются данные. Именование строки ведется в цифрах начиная с 1.
                'endColumn' => 'D',
                // Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
                'endRow' => 5,
                // Номер строки, где заканчиваются данные. Именование строки ведется в цифрах начиная с 1.
            ],
        ];

        $chart1 = [
            'name' => 'Chart name',
            'title' => 'Chart title',
            'xLabel' => 'X axis label',
            'yLabel' => 'Y axis label',
            'chartType' => 'lineChart',
            'groupType' => 'stacked',
            'chartStartPosition' => 'B3',
            'chartEndPosition' => 'H18',
            'isLegend' => true,
            'legendPosition' => 'tr',
            'labels' => $labels,
            'xValues' => $xValues,
            'yValues' => $yValues,
        ];

        $chart2 = [
            'name' => 'Chart name',
            'title' => 'Chart title',
            'xLabel' => 'X axis label',
            'yLabel' => 'Y axis label',
            'chartType' => 'lineChart',
            'groupType' => 'stacked',
            'chartStartPosition' => 'B20',
            'chartEndPosition' => 'H48',
            'isLegend' => false,
            'legendPosition' => 'tr',
            'labels' => $labels,
            'xValues' => $xValues,
            'yValues' => $yValues,
        ];

        // Sheet data
        // Column 1
        $column1 = [
            [
                'value' => 'Как дела John 789789',
                'fontColor' => 'ffffff',
                'fillColor' => '4f81bd',
                'fontSize' => 20,
                'bold' => true,
                'hAlignment' => 'center',
                'vAlignment' => 'center',
                'wrapText' => true,
                'comment' => 'John is cool boy.',
                'mergeColumns' => 0,
                'mergeRows' => 0,
                'borderBottom' => 'dashDot',
                'borderTop' => 'dotted',
                'borderLeft' => 'mediumDashDotDot',
                'borderRight' => 'hair',
                'borderBottomColor' => 'cccccc',
                'borderTopColor' => 'cccccc',
                'borderLeftColor' => 'cccccc',
                'borderRightColor' => 'cccccc',
                'columnWidth' => 100,
                'rowHeight' => 40,
            ],
            [
                'value' => 'Cell text 1.1',
                'bold' => true,
                'fontColor' => 'ffffff',
                'fillColor' => '4f81bd',
                'hAlignment' => 'center',
                'vAlignment' => 'top',
                'wrapText' => false,
                'comment' => 'John is cool boy.',
            ],
            [
                'value' => 'Cell text 1.2',
                'fontColor' => '262626',
                'styleArray' => [ // OK
                    'font' => [ // OK
                        'name' => 'Arial',
                        'bold' => true,
                        'italic' => true,
                        'size' => 15,
                        'underline' => 'double', // none, double, doubleAccounting, single, singleAccounting
                        'strikethrough' => true,
                        'color' => [
                            'rgb' => '255000',
                        ]
                    ],
                    'alignment' => [
                        'horizontal' => 'center',
                        // general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only
                        'vertical' => 'center',
                        // bottom, top, center, justify, distributed - Excel2007 only
                    ],
                    'borders' => [ // OK
                        'bottom' => [
                            'borderStyle' => 'dashDot',
                            // none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin
                            'color' => [
                                'rgb' => '255000'
                            ]
                        ],
                        'top' => [
                            'borderStyle' => 'dashed',
                            'color' => [
                                'rgb' => '255000'
                            ]
                        ],
                        'left' => [
                            'borderStyle' => 'mediumDashDot',
                            'color' => [
                                'rgb' => '255000'
                            ]
                        ],
                        'right' => [
                            'borderStyle' => 'mediumDashed',
                            'color' => [
                                'rgb' => '255000'
                            ]
                        ],
                        'vertical' => [
                            'borderStyle' => 'mediumDashed',
                            'color' => [
                                'rgb' => '255000'
                            ]
                        ],
                        'horizontal' => [
                            'borderStyle' => 'mediumDashed',
                            'color' => [
                                'rgb' => '255000'
                            ]
                        ],
                    ],
                    'quotePrefix' => true,
                ],
            ],
        ];

        // Column 2
        $column2 = [
            [
                'value' => 'Data №88467',
                'fontColor' => 'ffffff',
                'bold' => true,
                'fillColor' => '4f81bd',
                'hAlignment' => 'center',
            ],
            5 => [
                'value' => 'Cell text 2.1',
                'bold' => true,
                'comment' => 'This is comment',
                'fontSize' => 20,
                'rowHeight' => 30,
            ],
            [
                'value' => 'Cell text 2.2',
                'fontColor' => '262626',
                'mergeColumns' => 2,
                'mergeRows' => 2,
                'borderBottom' => 'thick',
                'borderTop' => 'thick',
                'borderLeft' => 'thick',
                'borderRight' => 'thick',
            ],
        ];

        // Sheets
        $data = [
            [
                'sheetName' => 'First page/main *:/\?[] example',
                'sheetNameInvalidCharactersReplacement' => 'x',
                'showGridLines' => false,
                'freezeCell' => 'B2',
                'data' => [$column1, 3 => $column2, $column2],
                'charts' => [$chart1, $chart2],
            ],
            [
                'autosize' => false,
                'freezeCell' => 'B1',
                'data' => [$column1, $column2],
            ],
            [
                'isRowDirection' => true,
                'data' => [$column1, $column2],
                'autoSize' => true,
            ],
        ];

        // Global cell options
        $defaultParams = [
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
            'value' => '-',
            // OK
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
        ];

        return [
            'data' => $data,
            'defaultParams' => $defaultParams,
        ];
    }
}

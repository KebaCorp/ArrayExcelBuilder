<?php

use KebaCorp\ArrayExcelBuilder\ArrayExcelBuilder;

/**
 * Full example.
 */

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
        'dataType' => 'String', // Type of data: Number, String (не обязательный параметр).
        'sheetName' => 'Worksheet', // Название страницы, где находятся значения для оси X.
        'startColumn' => 'A', // Имя колонки, где начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
        'startRow' => 2, // Номер строки, где начинаются данные. Именование строки ведется в цифрах начиная с 1.
        'endColumn' => 'A', // Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
        'endRow' => 5, // Номер строки, где заканчиваются данные. Именование строки ведется в цифрах начиная с 1.
    ],
    // Value 2
    [
        'dataType' => 'String', // Type of data: Number, String (не обязательный параметр).
        'sheetName' => 'Worksheet', // Название страницы, где находятся значения для оси X.
        'startColumn' => 'A', // Имя колонки, где начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
        'startRow' => 2, // Номер строки, где начинаются данные. Именование строки ведется в цифрах начиная с 1.
        'endColumn' => 'A', // Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
        'endRow' => 5, // Номер строки, где заканчиваются данные. Именование строки ведется в цифрах начиная с 1.
    ],
];

$yValues = [
    // Value 1
    [
        'dataType' => 'String', // Type of data: Number, String (не обязательный параметр).
        'sheetName' => 'Worksheet', // Название страницы, где находятся значения для оси X.
        'startColumn' => 'B', // Имя колонки, где начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
        'startRow' => 2, // Номер строки, где начинаются данные. Именование строки ведется в цифрах начиная с 1.
        'endColumn' => 'B', // Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
        'endRow' => 5, // Номер строки, где заканчиваются данные. Именование строки ведется в цифрах начиная с 1.
    ],
    // Value 2
    [
        'dataType' => 'String', // Type of data: Number, String (не обязательный параметр).
        'sheetName' => 'Worksheet', // Название страницы, где находятся значения для оси X.
        'startColumn' => 'C', // Имя колонки, где начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
        'startRow' => 2, // Номер строки, где начинаются данные. Именование строки ведется в цифрах начиная с 1.
        'endColumn' => 'C', // Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
        'endRow' => 5, // Номер строки, где заканчиваются данные. Именование строки ведется в цифрах начиная с 1.
    ],
    // Value 3
    [
        'dataType' => 'String', // Type of data: Number, String (не обязательный параметр).
        'sheetName' => 'Worksheet', // Название страницы, где находятся значения для оси X.
        'startColumn' => 'D', // Имя колонки, где начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
        'startRow' => 2, // Номер строки, где начинаются данные. Именование строки ведется в цифрах начиная с 1.
        'endColumn' => 'D', // Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее.
        'endRow' => 5, // Номер строки, где заканчиваются данные. Именование строки ведется в цифрах начиная с 1.
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
        'value' => 'Data №88477',
        'fontColor' => 'ffffff',
        'bold' => true,
        'fillColor' => '4f81bd',
        'hAlignment' => 'center',
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
        'mergeRows' => 3,
    ],
    [
        'value' => 'Cell text 1.2',
        'fontColor' => '262626',
        'styleArray' => [
            'font' => [
                'name' => 'Arial',
                'bold' => true,
                'italic' => false,
                'underline' => 'double', // none, double, doubleAccounting, single, singleAccounting
                'strikethrough' => false,
                'color' => [
                    'rgb' => '808080'
                ]
            ],
            'borders' => [
                'bottom' => [
                    'borderStyle' => 'dashDot', // none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin
                    'color' => [
                        'rgb' => '808080'
                    ]
                ],
                'top' => [
                    'borderStyle' => 'dashed',
                    'color' => [
                        'rgb' => '808080'
                    ]
                ],
                'left' => [
                    'borderStyle' => 'mediumDashDot',
                    'color' => [
                        'rgb' => '808080'
                    ]
                ],
                'right' => [
                    'borderStyle' => 'mediumDashed',
                    'color' => [
                        'rgb' => '808080'
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
    [
        'value' => 'Cell text 2.1',
        'bold' => true,
        'comment' => 'This is comment',
        'fontSize' => 20,
        'columnWidth' => 200,
        'rowHeight' => 30,
    ],
    [
        'value' => 'Cell text 2.2',
        'fontColor' => '262626',
        'mergeColumns' => 2,
        'borderBottom' => 'thick',
        'borderTop' => 'thick',
        'borderLeft' => 'thick',
        'borderRight' => 'thick',
    ],
];

// Sheets
$data = [
    [
        'sheetName' => 'First page',
        'showGridLines' => false,
        'freezeCell' => 'B2',
        'data' => [$column1, $column2],
        'charts' => [$chart1, $chart2],
    ],
    [
        'autosize' => false,
        'freezeCell' => 'B1',
        'data' => [$column1, $column2]
    ],
    [
        'isRowDirection' => true,
        'data' => [$column1, $column2]
    ],
];

// Global cell options
$defaultParams = [
    'allBorderBottom' => 'dashDot',
    'allBorderTop' => 'dotted',
    'allBorderLeft' => 'mediumDashDotDot',
    'allBorderRight' => 'hair',
    'borderBottom' => 'dashDot',
    'borderTop' => 'dotted',
    'borderLeft' => 'mediumDashDotDot',
    'borderRight' => 'hair',
    'value' => 'none',
    'fontColor' => '',
    'fillColor' => '',
    'fontSize' => 9,
    'bold' => true,
    'hAlignment' => 'center',
    'vAlignment' => 'center',
    'wrapText' => false,
    'comment' => '',
    'columnWidth' => 150,
    'rowHeight' => 25,
];


// File path and name
$fileName = 'Document ' . date('Y-m-d H-i-s') . '.xlsx';

// Save file
$arrayExcelBuilder = new ArrayExcelBuilder($data);
$result = $arrayExcelBuilder->setParams($defaultParams)->save('excel/' . $fileName);

if ($result === true) {
    echo '<h1>File successfully created on the way "./web/excel/' . $fileName . '".</h1>';
} else {
    echo "<pre>";
    echo "<h1>ATTENTION! ERROR:</h1>";
    echo "<br/><br/>";
    print_r($result);
}

<p align="center">
    <a href="https://github.com/KebaCorp" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/29224726?s=400&u=ed586fe0e07d9d68d1594e0020d7e8e5fd2ac3d5&v=4" height="200px">
    </a>
    <h1 align="center">ArrayExcelBuilder</h1>
    <br>
</p>

The component creates an Excel file from the data array.

For license information check the [LICENSE](LICENSE.md)-file.

[![Latest Stable Version](https://poser.pugx.org/kebacorp/arrayexcelbuilder/v/stable)](https://packagist.org/packages/kebacorp/arrayexcelbuilder)
[![Total Downloads](https://poser.pugx.org/kebacorp/arrayexcelbuilder/downloads)](https://packagist.org/packages/kebacorp/arrayexcelbuilder)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist kebacorp/arrayexcelbuilder
```

or add

```
"kebacorp/arrayexcelbuilder": "*"
```

to the require section of your composer.json.


Usage
-----

### "Hello world!" example

```php
<?php

use KebaCorp\ArrayExcelBuilder\ArrayExcelBuilder;

// Array data
$data = [
    // Sheet 1
    [
        // Sheet options
        'sheetName' => 'Hello world page',
        'data' => [
            // Column 1
            [
                // Row 1
                [
                    // Cell options
                    'value' => 'Hello world!',
                ],
                // Row n...
            ],
            // Column n...
        ],
    ],
    // Sheet n...
];

// Create excel file from array
$arrayExcelBuilder = new ArrayExcelBuilder($data);
$arrayExcelBuilder->save();

?>
```


### Sheet options

| Значение | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| autosize | array | true | Авторазмер ячеек. |
| charts | array | none | Массив данных для создания графиков. Подробнее в [Charts](#charts). |
| data | array | none | Массив данных. Обязательный параметр. |
| freezeCell | string | none | Зафиксировать ячейки по координату. Например 'B2' - зафиксирует первую строку и первый столбец. |
| isRowDirection | bool | false | Заполнять данные построчно, либо по колонкам. По умолчанию заполнение по колонкам. |
| sheetName | string | auto generate | Заголовок страницы. Если не передавать данный параметр, либо передать пустую строку, то название сгенерируется автоматически. |
| showGridLines | bool | true | Отобразить сетку. |


### Global cell options (params)

| Значение | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| allBorderBottom | string | 'none' | Рамка у всех ячеек снизу: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| allBorderRight | string | 'none' | Рамка у всех ячеек справа: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| allBorderLeft | string | 'none' | Рамка у всех ячеек слева: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| allBorderTop | string | 'none' | Рамка у всех ячеек сверху: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| bold | bool | false | Жирный шрифт. |
| borderBottom | string | 'none' | Рамка у ячейки снизу: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderRight | string | 'none' | Рамка у ячейки справа: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderLeft | string | 'none' | Рамка у ячейки слева: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderTop | string | 'none' | Рамка у ячейки сверху: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| comment | string | '' | Комментарий ячейки. Если передать пустую строку, то комментарий не будет создан. |
| fillColor | HEX color string | '' | Цвет заливки ячейки HEX без #. Например: 'FFFFFF'. |
| fontColor | HEX color string | '' | Цвет текста HEX без #. Например: '000000'. |
| fontSize | integer | excel default size | Размер шрифта. |
| hAlignment | string | 'general' | Горизонтальное выравнивание текста: general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only. |
| vAlignment | string | 'bottom' | Вертикальное выравнивание текста: bottom, top, center, justify, distributed - Excel2007 only. |
| mergeColumns | integer | 0 | Кол-во ячеек справа, которое необходимо присоединить к текущей ячейке. |
| mergeRows | integer | 0 | Кол-во ячеек снизу, которое необходимо присоединить к текущей ячейке. |
| styleArray | array | [] | Массив стилей. Смотрите [Style array](#style-array) |
| value | string, number, bool | '' | Значение ячейки. Значение может быть строкой, числом, числом с точкой, булевым значением. Остальные типы кодируются в Json. Вы также можете вставить формулу в ячейку. Для этого необходимо вставить формулу в виде строки. Например: '=SUM(B2:C2)' |
| wrapText | bool | false | Перенос строки. |


### Cell options

| Значение | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| bold | bool | false | Жирный шрифт. |
| borderBottom | string | 'none' | Рамка у ячейки снизу: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderRight | string | 'none' | Рамка у ячейки справа: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderLeft | string | 'none' | Рамка у ячейки слева: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderTop | string | 'none' | Рамка у ячейки сверху: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| columnWidth | integer | auto | Ширина колонки. Если параметр передан нескольким ячейкам, значение будет использовано из последней ячейки в данной колонке. |
| comment | string | '' | Комментарий ячейки. Если передать пустую строку, то комментарий не будет создан. |
| fillColor | HEX color string | '' | Цвет заливки ячейки HEX без #. Например: 'FFFFFF'. |
| fontColor | HEX color string | '' | Цвет текста HEX без #. Например: '000000'. |
| fontSize | integer | excel default size | Размер шрифта. |
| hAlignment | string | 'general' | Горизонтальное выравнивание текста: general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only. |
| vAlignment | string | 'bottom' | Вертикальное выравнивание текста: bottom, top, center, justify, distributed - Excel2007 only. |
| mergeColumns | integer | 0 | Кол-во ячеек справа, которое необходимо присоединить к текущей ячейке. |
| mergeRows | integer | 0 | Кол-во ячеек снизу, которое необходимо присоединить к текущей ячейке. |
| rowHeight | integer | auto | Высота строки. Если параметр передан нескольким ячейкам, значение будет использовано из последней ячейки в данной строке. |
| styleArray | array | [] | Массив стилей. Смотрите [Style array](#style-array) |
| value | string, number, bool | '' | Значение ячейки. Значение может быть строкой, числом, числом с точкой, булевым значением. Остальные типы кодируются в Json. Вы также можете вставить формулу в ячейку. Для этого необходимо вставить формулу в виде строки. Например: '=SUM(B2:C2)' |
| wrapText | bool | false | Перенос строки. |


**Full example:**
```php
<?php

use KebaCorp\ArrayExcelBuilder\ArrayExcelBuilder;

// Array data
$data = [
    // Sheet 1
    [
        // Sheet options
        'autosize' => false,
        'sheetName' => 'First page',
        'freezeCell' => 'B2',
        'isRowDirection' => true,
        'showGridLines' => false,
        'data' => [
            // Column 1
            [
                // Row 1
                [
                    // Cell options
                    'value' => 'John',
                    'fontColor' => 'ffffff',
                    'fillColor' => '4f81bd',
                    'fontSize' => 10,
                    'bold' => true,
                    'hAlignment' => 'center',
                    'vAlignment' => 'top',
                    'wrapText' => false,
                    'comment' => 'John is cool boy.',
                    'mergeColumns' => 4,
                    'mergeRows' => 3,
                    'borderBottom' => 'dashDot',
                    'borderTop' => 'dotted',
                    'borderLeft' => 'mediumDashDotDot',
                    'borderRight' => 'hair',
                    'columnWidth' => 100,
                    'rowHeight' => 20,
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
                
                // Row 2
                [
                    // Cell options
                    'value' => 100500,
                ],
                
                // Row 3
                [
                    // Cell options
                    'value' => 100.500,
                ],
                
                // Row 4
                [
                    // Cell options
                    'value' => true,
                ],
                
                // Row 5
                [
                    // Cell options
                    'value' => '=SUM(A2:A3)',
                ],
                
                // Row n...
            ],
            // Column n...
        ],
        'charts' => [
            // Chart 1
            [
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
                'labels' => [
                    // Label 1
                    [
                        'dataType' => 'String',
                        'sheetName' => 'Worksheet',
                        'column' => 'B',
                        'row' => 1,
                    ],
                    // Label n...
                ],
                'xValues' => [
                    [
                        'dataType' => 'String',
                        'sheetName' => 'Worksheet',
                        'startColumn' => 'A',
                        'startRow' => 2,
                        'endColumn' => 'A',
                        'endRow' => 5,
                    ],
                ],
                'yValues' => [
                    // Value 1
                    [
                        'dataType' => 'String',
                        'sheetName' => 'Worksheet',
                        'startColumn' => 'B',
                        'startRow' => 2,
                        'endColumn' => 'B',
                        'endRow' => 5,
                    ],
                    // Value n...
                ],
            ]
            // Chart n...
        ]
    ],
    // Sheet n...
];

// Global cell options
$params = [
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
    'fontSize' => 10,
    'bold' => true,
    'hAlignment' => 'center',
    'vAlignment' => 'top',
    'wrapText' => false,
    'comment' => '',
    'mergeColumns' => 4,
    'mergeRows' => 3,
    'columnWidth' => 150,
    'rowHeight' => 25,
];

// Create excel file from array
$arrayExcelBuilder = new ArrayExcelBuilder($data);
$result = $arrayExcelBuilder->setParams($params)->save('excel/Document.xlsx');

?>
```


### Style array

```php
<?php

$styleArray = [
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
];

?>
```


Charts
-----

<img src="https://github.com/KebaCorp/ArrayExcelBuilder/blob/master/img/ExcelChartExample.png?raw=true" height="250px">

### Chart options

| Значение | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| name | string | '' | Имя графика. Не отображается. |
| title | string | none | Заголовок графика. Отображается сверху посередине. |
| xLabel | string | none | Заголовок горизонтальной оси. Отображается слева посередине вертикально. |
| yLabel | string | none | Заголовок вертикальной оси. Отображается снизу посередине. |
| chartType | string | 'lineChart' | Тип графика: barChart, bar3DChart, lineChart, line3DChart, areaChart, area3DChart, pieChart, pie3DChart, doughnutChart, scatterChart, surfaceChart, surface3DChart, radarChart, bubbleChart, stockChart. |
| groupType | string | 'stacked' | Группировка данных: clustered, stacked, percentStacked, standard. |
| chartStartPosition | string | 'B3' | Координаты страницы, где начинается график. Значение в стиле excel - первая часть строки заглавные латинские буквы, вторая часть из натуральных чисел. Например: 'A10'. |
| chartEndPosition | string | 'H18' | Координаты страницы, где заканчивается график. Значение в стиле excel - первая часть строки заглавные латинские буквы, вторая часть из натуральных чисел. Например: 'BB3'. |
| isLegend | bool | false | Отобразить легенду. |
| legendPosition | string | 'r' | Расположение легенды на графике: 'r' - справа, 'b' - снизу, 't' - сверху, 'tr' - сверху справа. |
| labels | array | none | Лейблы легенды. Подробнее в [Chart labels options](#chart-labels-options). |
| xValues | array | none | Данные по горизонтальной оси. Подробнее в [Chart xValues and yValues options](#chart-xvalues-and-yvalues-options). |
| yValues | array | none | Данные по вертикальной оси. Подробнее в [Chart xValues and yValues options](#chart-xvalues-and-yvalues-options). |


### Chart labels options

| Значение | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| dataType | string | 'Number' | Не обязательный параметр. Тип данных: 'Number', 'String'. |
| column | string | none | Обязательный параметр. Имя колонки. Именование колонки ведется в латинских буквах начиная от A и далее. Например: 'B'. |
| row | integer | none | Обязательный параметр. Номер строки. Именование строки ведется из натуральных чисел начиная с 1. Например: 21. |
| sheetName | string | none | Обязательный параметр. Название страницы, где находится Label. |


### Chart xValues and yValues options

| Значение | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| dataType | string | 'Number' | Не обязательный параметр. Тип данных: 'Number', 'String'. |
| sheetName | string | none | Обязательный параметр. Название страницы, где находится Label. |
| startColumn | string | none | Обязательный параметр. Имя колонки, откуда начинаются данные. Именование колонки ведется в латинских буквах начиная от A и далее. Например: 'B'. |
| startRow | integer | none | Обязательный параметр. Номер строки, откуда начинаются данные. Именование строки ведется из натуральных чисел начиная с 1. Например: 21. |
| endColumn | string | none | Обязательный параметр. Имя колонки, где заканчиваются данные. Именование колонки ведется в латинских буквах начиная от A и далее. Например: 'B'. |
| endRow | integer | none | Обязательный параметр. Номер строки, где заканчиваются данные. Именование строки ведется из натуральных чисел начиная с 1. Например: 21. |


**Full example:**
```php
<?php

$charts = [
    // Chart 1
    [
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
        'labels' => [
            // Label 1
            [
                'dataType' => 'String',
                'sheetName' => 'Worksheet',
                'column' => 'B',
                'row' => 1,
            ],
            // Label n...
        ],
        'xValues' => [
            [
                'dataType' => 'String',
                'sheetName' => 'Worksheet',
                'startColumn' => 'A',
                'startRow' => 2,
                'endColumn' => 'A',
                'endRow' => 5,
            ],
        ],
        'yValues' => [
            // Value 1
            [
                'dataType' => 'String',
                'sheetName' => 'Worksheet',
                'startColumn' => 'B',
                'startRow' => 2,
                'endColumn' => 'B',
                'endRow' => 5,
            ],
            // Value n...
        ],
    ]
    // Chart n...
];

?>
```

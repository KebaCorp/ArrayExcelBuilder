<p align="center">
    <a href="https://github.com/KebaCorp" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/29224726?s=400&u=ed586fe0e07d9d68d1594e0020d7e8e5fd2ac3d5&v=4" height="200px">
    </a>
    <h1 align="center">ArrayExcelBuilder</h1>
    <br>
</p>

The component **CREATES** an Excel file from the data array or **READS** from Excel file to array.

> Based on [PHPOffice/PhpSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet)

For license information check the [LICENSE](LICENSE.md)-file.

[![Latest Stable Version](https://poser.pugx.org/kebacorp/arrayexcelbuilder/v/stable)](https://packagist.org/packages/kebacorp/arrayexcelbuilder)
[![Total Downloads](https://poser.pugx.org/kebacorp/arrayexcelbuilder/downloads)](https://packagist.org/packages/kebacorp/arrayexcelbuilder)



Requirements:
-------------


- PHP 5.6 and higher.
- PHP 7.4 is supported since ArrayExcelBuilder v4.0.1



Installation:
-------------


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



Usage:
------


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


### Matrix data example

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
                'Hello world!', // Row 1
                true,           // Row 2
                100500,         // Row 3
                'Other value',  // Row 4
                [               // Row 4
                    'value' => 'I can configure the cell in more detail',
                    // Other cell options...
                ],
                // Row n...
            ],
            // Column 2
            [
                'Hello world!',         // Row 1
                true,                   // Row 2
                100500,                 // Row 3
                10 => 'Other value',    // Row 9
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


### Sheet parameter "isRowDirection" example

```php
<?php

use KebaCorp\ArrayExcelBuilder\ArrayExcelBuilder;

// Array data
$data = [
    // Sheet 1
    [
        // Sheet options
        'sheetName' => 'Hello world page',
        'isRowDirection' => true,
        'data' => [
            // Row 1
            [
                'Hello world!', // Column 1
                 true,          // Column 2
                 100500,        // Column 3
                'Other value',  // Column 4
                 // Column n...
            ],
            // Row 2
            [
                'Hello world!', // Column 1
                 true,          // Column 2
                 100500,        // Column 3
                'Other value',  // Column 4
                 // Column n...
            ],
            // Row n...
        ],
    ],
    // Sheet n...
];

// Global cell params
$globalParams = [];

// Create excel file from array
$arrayExcelBuilder = new ArrayExcelBuilder($data, $globalParams);
$arrayExcelBuilder->save();

?>
```



Рекомендации:
-------------


- Рекомендуется использовать глобальные параметры, вместо одинаковых параметров у каждой ячейки,
если необходимо настроить все или большинство ячеек одинаково.

- Каждый параметр увеличивает время создания файла.
Поэтому один параметр "styleArray" (массив с настройками стиля ячейки) будет исполняться существенно быстрее,
чем аналогичные параметры (borderBottom, bold, fontColor, fontSize и т. д.) по отдельности.

- Не рекомендуется использовать в качестве ключей массивов колонок и строк не числа.
Позиция следующей ячейки в таком случае может сбиться!



Полезно знать:
-------------


- Позиция ячейки относительно ключа массива:
> Если массив с данными будет ассоциативным, и ключи будут в виде цифр, то ячейка будет расположена относительно ключа.
> Отсчет начинается с нуля.
>
> Например:
 ```php
 <?php

 $data = [
     1 => [
         8 => ['value' => 'Hello, World!']
     ]
 ];
 ```
 > В данном примере текст "Hello, World!" будет расположен в ячейке "B9".



Params:
-------


### Sheet options

| Name | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| autoSize | bool | false | Авторазмер ячеек. Если у ячейки задана ширина, то "autoSize" будет проигнорирован. |
| charts | array | none | Массив данных для создания графиков. Подробнее в [Charts](#charts). |
| data | array | none | Массив данных. Обязательный параметр. |
| freezeCell | string | none | Зафиксировать ячейки по координату. Например 'B2' - зафиксирует первую строку и первый столбец. |
| isRowDirection | bool | false | Заполнять данные построчно, либо по колонкам. По умолчанию заполнение по колонкам. |
| sheetName | string | auto generate | Заголовок страницы. Если не передавать данный параметр, либо передать пустую строку, то название сгенерируется автоматически. |
| showGridLines | bool | true | Отобразить сетку. |


### Global cell options

| Name | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| allBorderBottom | string | 'none' | Рамка у всех ячеек снизу: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| allBorderRight | string | 'none' | Рамка у всех ячеек справа: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| allBorderLeft | string | 'none' | Рамка у всех ячеек слева: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| allBorderTop | string | 'none' | Рамка у всех ячеек сверху: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| allBorderBottomColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "allBorderBottom". Цвет заливки рамки у всех ячеек снизу. HEX без #. Например: 'FFFFFF'. |
| allBorderRightColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "allBorderRight". Цвет заливки рамки у всех ячеек справа. HEX без #. Например: 'FFFFFF'. |
| allBorderLeftColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "allBorderLeft". Цвет заливки рамки у всех ячеек слева. HEX без #. Например: 'FFFFFF'. |
| allBorderTopColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "allBorderTop". Цвет заливки рамки у всех ячеек сверху. HEX без #. Например: 'FFFFFF'. |
| bold | bool | false | Жирный шрифт. |
| borderBottom | string | 'none' | Рамка у ячейки снизу: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderRight | string | 'none' | Рамка у ячейки справа: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderLeft | string | 'none' | Рамка у ячейки слева: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderTop | string | 'none' | Рамка у ячейки сверху: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderVertical | string | 'none' | Вертикальная рамка у ячейки: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderHorizontal | string | 'none' | Горизонтальная рамка у ячейки: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderBottomColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "borderBottom". Цвет заливки рамки у ячейки снизу. HEX без #. Например: 'FFFFFF'. |
| borderRightColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "borderRight". Цвет заливки рамки у ячейки справа. HEX без #. Например: 'FFFFFF'. |
| borderLeftColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "borderLeft". Цвет заливки рамки у ячейки слева. HEX без #. Например: 'FFFFFF'. |
| borderTopColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "borderTop". Цвет заливки рамки у ячейки сверху. HEX без #. Например: 'FFFFFF'. |
| borderVerticalColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "borderVertical". Цвет заливки вертикальной рамки у ячейки. HEX без #. Например: 'FFFFFF'. |
| borderHorizontalColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "borderHorizontal". Цвет заливки горизонтальной рамки у ячейки. HEX без #. Например: 'FFFFFF'. |
| callback | function | null | Функция обратного вызова. Вызывается во время формирования ячейки. Принимает один аргумент в виде массивов данных (см. [Global callback arguments](#global-callback-arguments)). Для того, чтобы изменения применились, необходимо вернуть измененный аргумент. |
| columnWidth | integer | auto | Ширина колонки. Если параметр передан нескольким ячейкам, значение будет использовано из последней ячейки в данной колонке. |
| fillColor | HEX color string | '' | Цвет заливки ячейки HEX без #. Например: 'FFFFFF'. |
| fontColor | HEX color string | '' | Цвет текста HEX без #. Например: '000000'. |
| fontSize | integer | excel default size | Размер шрифта. |
| hAlignment | string | 'general' | Горизонтальное выравнивание текста: general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only. |
| vAlignment | string | 'bottom' | Вертикальное выравнивание текста: bottom, top, center, justify, distributed - Excel2007 only. |
| protect | bool | false | Защитить страницы от редактирования. |
| rowHeight | integer | auto | Высота строки. Если параметр передан нескольким ячейкам, значение будет использовано из последней ячейки в данной строке. |
| styleArray | array | [] | Массив стилей. Смотрите [Style array](#style-array). |
| value | string, number, bool | null | Значение ячейки. Значение может быть строкой, числом, числом с точкой, булевым значением. Остальные типы кодируются в Json. Если необходимо ввести текст на следующей строке в ячейке, то можно использовать "\n" (ВАЖНО! Текст должен быть в двойных кавычках!). Например: "Текст на первой строке\nТекст на второй строке". Вы также можете вставить формулу в ячейку. Для этого необходимо вставить формулу в виде строки. Например: '=SUM(B2:C2)' |
| wrapText | bool | false | Перенос строки. |


### Cell options

 **Все параметры ячейки:**

| Name | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| bold | bool | false | Жирный шрифт. |
| borderBottom | string | 'none' | Рамка у ячейки снизу: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderRight | string | 'none' | Рамка у ячейки справа: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderLeft | string | 'none' | Рамка у ячейки слева: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderTop | string | 'none' | Рамка у ячейки сверху: none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin. |
| borderBottomColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "borderBottom". Цвет заливки рамки у ячейки снизу. HEX без #. Например: 'FFFFFF'. |
| borderRightColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "borderRight". Цвет заливки рамки у ячейки справа. HEX без #. Например: 'FFFFFF'. |
| borderLeftColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "borderLeft". Цвет заливки рамки у ячейки слева. HEX без #. Например: 'FFFFFF'. |
| borderTopColor | HEX color string | '000000' | ВНИМАНИЕ! Необходимо установить "borderTop". Цвет заливки рамки у ячейки сверху. HEX без #. Например: 'FFFFFF'. |
| callback | function | null | Функция обратного вызова. Вызывается во время формирования ячейки. Принимает один аргумент в виде массивов данных (см. [Cell callback arguments](#cell-callback-arguments)). Для того, чтобы изменения применились, необходимо вернуть измененный аргумент. |
| columnWidth | integer | auto | Ширина колонки. Если параметр передан нескольким ячейкам, значение будет использовано из последней ячейки в данной колонке. |
| comment | string | '' | Комментарий ячейки. Если передать пустую строку, то комментарий не будет создан. |
| fillColor | HEX color string | '' | Цвет заливки ячейки HEX без #. Например: 'FFFFFF'. |
| fontColor | HEX color string | '' | Цвет текста HEX без #. Например: '000000'. |
| fontSize | integer | excel default size | Размер шрифта. |
| hAlignment | string | 'general' | Горизонтальное выравнивание текста: general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only. |
| vAlignment | string | 'bottom' | Вертикальное выравнивание текста: bottom, top, center, justify, distributed - Excel2007 only. |
| image | string, array | none | Если передать строку, то значение запишется как путь к изображению. Путь может быть как относительным, так и абсолютным. Например: 'img/example.jpg'. Либо можно передать массив параметров. Смотрите [Image array data](#image-array-data). |
| mergeColumns | integer | 0 | Кол-во ячеек справа, которое необходимо присоединить к текущей ячейке. ВНИМАНИЕ! Сделует избегать пересечения слияния с соседними ячейками! |
| mergeRows | integer | 0 | Кол-во ячеек снизу, которое необходимо присоединить к текущей ячейке. ВНИМАНИЕ! Сделует избегать пересечения слияния с соседними ячейками! |
| rowHeight | integer | auto | Высота строки. Если параметр передан нескольким ячейкам, значение будет использовано из последней ячейки в данной строке. |
| styleArray | array | [] | Массив стилей. Смотрите [Style array](#style-array). |
| url | string | null | Ячейка со ссылкой на внешний ресурс, либо ссылка на другую страницу внутри документа. Например: 'sheet://"Sheet name"!A1' или 'www.example.com' |
| value | string, number, bool | null | Значение ячейки. Значение может быть строкой, числом, числом с точкой, булевым значением. Остальные типы кодируются в Json. Если необходимо ввести текст на следующей строке в ячейке, то можно использовать "\n" (ВАЖНО! Текст должен быть в двойных кавычках!). Например: "Текст на первой строке\nТекст на второй строке". Вы также можете вставить формулу в ячейку. Для этого необходимо вставить формулу в виде строки. Например: '=SUM(B2:C2)' |
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
        'autoSize' => false,
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
                    'borderBottomColor' => '000000',
                    'borderTopColor' => '000000',
                    'borderLeftColor' => '000000',
                    'borderRightColor' => '000000',
                    'columnWidth' => 100,
                    'rowHeight' => 20,
                    'url' => 'www.example.com', // or 'sheet://"Sheet name"!A1'
                    'image' => [ // or 'image' => 'img/example.jpg',
                        'path' => 'img/example.jpg',
                        'name' => 'Example',
                        'description' => 'Example image',
                        'offsetX' => 10,
                        'offsetY' => 15,
                        'width' => 200,
                        'height' => 300,
                        'resizeProportional' => true,
                        'rotation' => 70,
                        'hyperLink' => [ // or 'hyperLink' => 'www.example.com',
                            'url' => 'www.example.com',
                            'tooltip' => 'Example site',
                        ],
                    ],
                    'callback' => function($data) {
                        $data['spreadsheet']->getActiveSheet()->getCell($data['cell'])->setValue('Cell value');

                        return $data;
                    },
                    'styleArray' => [
                        'font' => [
                            'name' => 'Arial',
                            'bold' => true,
                            'italic' => false,
                            'underline' => 'double', // none, double, doubleAccounting, single, singleAccounting
                            'strikethrough' => false,
                            'color' => [
                                'rgb' => '808080'
                            ],
                            'size'  => 15,
                            'superscript'  => true,
                            'subscript'  => true,
                        ],
                        'fill' => [
                            'fillType' => 'solid', // none, solid, linear, path, darkDown, darkGray, darkGrid, darkHorizontal, darkTrellis, darkUp, darkVertical, gray0625, gray125, lightDown, lightGray, lightGrid, lightHorizontal, lightTrellis, lightUp, lightVertical, mediumGray
                            'rotation' => 10.5, // Type: float
                            'startColor' => [
                                'rgb' => '000000'
                            ],
                            'endColor' => [
                                'argb' => 'FFFFFFFF'
                            ],
                            'color' => [
                                'rgb' => '000000'
                            ],
                        ],
                        'alignment' => [
                            'horizontal' => 'center', // general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only
                            'vertical' => 'center', // bottom, top, center, justify, distributed - Excel2007 only
                            'wrapText' => false, // Type: bool
                            'textRotation' => 0, // Type: integer
                            'shrinkToFit' => false, // Type: bool
                            'indent' => 0, // Type: integer
                        ],
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => 'dashDot', // none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin
                                'color' => [
                                    'argb' => 'FFFFFFFF'
                                ]
                            ],
                            'bottom' => [
                                'borderStyle' => 'dashDot',
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
                            'diagonal' => [
                                'borderStyle' => 'mediumDashed',
                                'color' => [
                                    'rgb' => '808080'
                                ]
                            ],
                            'vertical' => [
                                'borderStyle' => 'mediumDashed',
                                'color' => [
                                    'rgb' => '808080'
                                ]
                            ],
                            'horizontal' => [
                                'borderStyle' => 'mediumDashed',
                                'color' => [
                                    'rgb' => '808080'
                                ]
                            ],
                            'outline' => [
                                'borderStyle' => 'mediumDashed',
                                'color' => [
                                    'rgb' => '808080'
                                ]
                            ],
                            'diagonalDirection' => 1, // DIAGONAL_NONE: 0, DIAGONAL_UP: 1, DIAGONAL_DOWN: 2, DIAGONAL_BOTH: 3
                        ],
                        'numberFormat' => [
                            'formatCode' => 'General', // see PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_*
                        ],
                        'protection' => [
                            'locked' => 'protected', // inherit, protected, unprotected
                            'hidden' => 'protected', // inherit, protected, unprotected
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
    'allBorderBottomColor' => '000000',
    'allBorderTopColor' => '000000',
    'allBorderLeftColor' => '000000',
    'allBorderRightColor' => '000000',
    'borderBottom' => 'dashDot',
    'borderTop' => 'dotted',
    'borderLeft' => 'mediumDashDotDot',
    'borderRight' => 'hair',
    'borderVertical' => 'dashDot',
    'borderHorizontal' => 'dotted',
    'borderBottomColor' => '000000',
    'borderTopColor' => '000000',
    'borderLeftColor' => '000000',
    'borderRightColor' => '000000',
    'borderVerticalColor' => '000000',
    'borderHorizontalColor' => '000000',
    'value' => 'none',
    'fontColor' => '',
    'fillColor' => '',
    'fontSize' => 10,
    'bold' => true,
    'hAlignment' => 'center',
    'vAlignment' => 'top',
    'wrapText' => false,
    'columnWidth' => 150,
    'rowHeight' => 25,
    'styleArray' => [
        'font' => [
            'name' => 'Arial',
            'bold' => true,
            'italic' => false,
            'underline' => 'double', // none, double, doubleAccounting, single, singleAccounting
            'strikethrough' => false,
            'color' => [
                'rgb' => '808080'
            ],
            'size'  => 15,
            'superscript'  => true,
            'subscript'  => true,
        ],
        'fill' => [
            'fillType' => 'solid', // none, solid, linear, path, darkDown, darkGray, darkGrid, darkHorizontal, darkTrellis, darkUp, darkVertical, gray0625, gray125, lightDown, lightGray, lightGrid, lightHorizontal, lightTrellis, lightUp, lightVertical, mediumGray
            'rotation' => 10.5, // Type: float
            'startColor' => [
                'rgb' => '000000'
            ],
            'endColor' => [
                'argb' => 'FFFFFFFF'
            ],
            'color' => [
                'rgb' => '000000'
            ],
        ],
        'alignment' => [
            'horizontal' => 'center', // general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only
            'vertical' => 'center', // bottom, top, center, justify, distributed - Excel2007 only
            'wrapText' => false, // Type: bool
            'textRotation' => 0, // Type: integer
            'shrinkToFit' => false, // Type: bool
            'indent' => 0, // Type: integer
        ],
        'borders' => [
            'allBorders' => [
                'borderStyle' => 'dashDot', // none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin
                'color' => [
                    'argb' => 'FFFFFFFF'
                ]
            ],
            'bottom' => [
                'borderStyle' => 'dashDot',
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
            'diagonal' => [
                'borderStyle' => 'mediumDashed',
                'color' => [
                    'rgb' => '808080'
                ]
            ],
            'vertical' => [
                'borderStyle' => 'mediumDashed',
                'color' => [
                    'rgb' => '808080'
                ]
            ],
            'horizontal' => [
                'borderStyle' => 'mediumDashed',
                'color' => [
                    'rgb' => '808080'
                ]
            ],
            'outline' => [
                'borderStyle' => 'mediumDashed',
                'color' => [
                    'rgb' => '808080'
                ]
            ],
            'diagonalDirection' => 1, // DIAGONAL_NONE: 0, DIAGONAL_UP: 1, DIAGONAL_DOWN: 2, DIAGONAL_BOTH: 3
        ],
        'numberFormat' => [
            'formatCode' => 'General', // see PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_*
        ],
        'protection' => [
            'locked' => 'protected', // inherit, protected, unprotected
            'hidden' => 'protected', // inherit, protected, unprotected
        ],
        'quotePrefix' => true,
    ],
];

// Create excel file from array
$arrayExcelBuilder = new ArrayExcelBuilder($data, $params);
$result = $arrayExcelBuilder->save('excel/Document', ['format' => 'xlsx'], false);

// --- or --- //

// Create excel file from array
$arrayExcelBuilder = new ArrayExcelBuilder($data, $params);
$arrayExcelBuilder->setData($data);
$arrayExcelBuilder->setParams($params);
$result = $arrayExcelBuilder->save('excel/Document', ['format' => 'xlsx'], false);

// --- or --- //

// Create excel file from array
$arrayExcelBuilder = new ArrayExcelBuilder();
$result = $arrayExcelBuilder->setData($data)
                ->setParams($params)
                ->save('excel/Document', ['format' => 'xlsx'], false);

?>
```


### Style array

> StyleArray - массив стилей ячейки.
Доступны все параметры, которые есть у
[StyleArray](https://phpspreadsheet.readthedocs.io/en/latest/topics/recipes/#formatting-cells)
в [Phpspreadsheet](https://github.com/PHPOffice/PhpSpreadsheet).

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
        ],
        'size'  => 15,
        'superscript'  => true,
        'subscript'  => true,
    ],
    'fill' => [
        'fillType' => 'solid', // none, solid, linear, path, darkDown, darkGray, darkGrid, darkHorizontal, darkTrellis, darkUp, darkVertical, gray0625, gray125, lightDown, lightGray, lightGrid, lightHorizontal, lightTrellis, lightUp, lightVertical, mediumGray
        'rotation' => 10.5, // Type: float
        'startColor' => [
            'rgb' => '000000'
        ],
        'endColor' => [
            'argb' => 'FFFFFFFF'
        ],
        'color' => [
            'rgb' => '000000'
        ],
    ],
    'alignment' => [
        'horizontal' => 'center', // general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only
        'vertical' => 'center', // bottom, top, center, justify, distributed - Excel2007 only
        'wrapText' => false, // Type: bool
        'textRotation' => 0, // Type: integer
        'shrinkToFit' => false, // Type: bool
        'indent' => 0, // Type: integer
    ],
    'borders' => [
        'allBorders' => [
            'borderStyle' => 'dashDot', // none, dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin
            'color' => [
                'argb' => 'FFFFFFFF'
            ]
        ],
        'bottom' => [
            'borderStyle' => 'dashDot',
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
        'diagonal' => [
            'borderStyle' => 'mediumDashed',
            'color' => [
                'rgb' => '808080'
            ]
        ],
        'vertical' => [
            'borderStyle' => 'mediumDashed',
            'color' => [
                'rgb' => '808080'
            ]
        ],
        'horizontal' => [
            'borderStyle' => 'mediumDashed',
            'color' => [
                'rgb' => '808080'
            ]
        ],
        'outline' => [
            'borderStyle' => 'mediumDashed',
            'color' => [
                'rgb' => '808080'
            ]
        ],
        'diagonalDirection' => 1, // DIAGONAL_NONE: 0, DIAGONAL_UP: 1, DIAGONAL_DOWN: 2, DIAGONAL_BOTH: 3
    ],
    'numberFormat' => [
        'formatCode' => 'General', // see PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_*
    ],
    'protection' => [
        'locked' => 'protected', // inherit, protected, unprotected
        'hidden' => 'protected', // inherit, protected, unprotected
    ],
    'quotePrefix' => true,
];

?>
```


### Image array data

| Name | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| description | string | '' | Описание изображения. |
| height | integer | 20 | Высота изображения. |
| hyperLink | string, array | none | Ссылка на сайт при нажатии на изображение. Может быть как строкой, тогда значение будет записано как ссылка на ресур. Например: 'www.example.com'. Либо можно передать массив параметров. У массива есть два значения - "url" (ссылка на ресурс) и "tooltip" (всплывающая подсказка). Например: ['url' => 'www.example.com', 'tooltip' => 'Это всплывающая подсказка']. |
| name | string | '' | Название изображения. |
| offsetX | integer | 0 | Сдвиг изображения по оси X относительно ячейки. |
| offsetY | integer | 0 | Сдвиг изображения по оси Y относительно ячейки. |
| path | string | '' | Путь к изображению с расширением. Путь может быть как относительным, так и абсолютным. Например: 'img/example.jpg'. |
| resizeProportional | bool | true | Сохранять пропорции изображения при изменении размера. |
| rotation | integer | 0 | Вращение изображения. |
| width | integer | 20 | Ширина изображения. |

```php
<?php

$image = [
    'path' => 'img/example.jpg',
    'name' => 'Example',
    'description' => 'Example image',
    'offsetX' => 10,
    'offsetY' => 15,
    'width' => 200,
    'height' => 300,
    'resizeProportional' => true,
    'rotation' => 70,
    'hyperLink' => [ // or 'hyperLink' => 'www.example.com',
        'url' => 'www.example.com',
        'tooltip' => 'Example site',
    ],
];

?>
```


### Global callback arguments

> ВАЖНО! Callback-функции не запустятся,
если в конструктор ArrayExcelBuilder передан параметр "allowCallback" раным *false*
(см. [ArrayExcelBuilder constructor arguments](#arrayexcelbuilder-constructor-arguments)).

| Name | Type |  Description |
| -------- |:----:| ----------- |
| dataDto | ArrayExcelBuilderCellDTO | Данные текущей ячейки в виде DTO. |
| maxCellCoordinates | string | Максимальные координаты ячейки с данными. Самая нижняя правая ячейка. Например "D10". |
| maxColumn | integer | Максимальный индекс колонки с данными. |
| maxRow | integer | Максимальный индекс строки с данными. |
| paramsDto | ArrayExcelBuilderCellDTO | Глобальные параметры ячеек в виде DTO. |
| sheetsNumber | integer | Общее кол-во страниц. |
| spreadsheet | Spreadsheet | Объект класса PhpOffice\PhpSpreadsheet\Spreadsheet. Позволяет использовать практически все возможности библиотеки PhpSpreadsheet. |

> Spreadsheet позволяет использовать практически все возможности,
которые есть в библиотеке [PHPOffice/PhpSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet).

```php
<?php

$callback = function($data) {
    $spreadsheet = $data['spreadsheet'];
    $dataDto = $data['dataDto'];
    $paramsDto = $data['paramsDto'];
    $sheetsNumber = $data['sheetsNumber'];
    $maxRow = $data['maxRow'];
    $maxColumn = $data['maxColumn'];
    $maxCellCoordinates = $data['maxCellCoordinates'];

    // Actions with Spreadsheet
    $spreadsheet->getActiveSheet()->getCell($data['cell'])->setValue('Cell value');
    $data['spreadsheet'] = $spreadsheet;

    // IMPORTANT! For the changes to apply, you must return a modified data argument
    return $data;
}

?>
```


### Cell callback arguments

> ВАЖНО! Callback-функции не запустятся,
если в конструктор ArrayExcelBuilder передан параметр "allowCallback" раным *false*
(см. [ArrayExcelBuilder constructor arguments](#arrayexcelbuilder-constructor-arguments)).

| Name | Type |  Description |
| -------- |:----:| ----------- |
| cell | string | Координаты текущей ячейки. Например "B7". |
| columnId | integer | Индекс текущей колонки. Отсчет начинается с нуля. |
| columnName | string | Буквенное обозначение текущей колонки. Например "C". |
| dataDto | ArrayExcelBuilderCellDTO | Данные текущей ячейки в виде DTO. |
| maxCellCoordinates | string | Максимальные координаты ячейки с данными. Самая нижняя правая ячейка. Например "D10". |
| maxColumn | integer | Максимальный индекс колонки с данными. |
| maxRow | integer | Максимальный индекс строки с данными. |
| paramsDto | ArrayExcelBuilderCellDTO | Глобальные параметры ячеек в виде DTO. |
| rowId | integer | Индекс текущей строки. Отсчет начинается с нуля. |
| sheetsNumber | integer | Общее кол-во страниц. |
| spreadsheet | Spreadsheet | Объект класса PhpOffice\PhpSpreadsheet\Spreadsheet. Позволяет использовать практически все возможности библиотеки PhpSpreadsheet. |

> Spreadsheet позволяет использовать практически все возможности,
которые есть в библиотеке [PHPOffice/PhpSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet).

```php
<?php

$callback = function($data) {
    $spreadsheet = $data['spreadsheet'];
    $columnId = $data['columnId'];
    $rowId = $data['rowId'];
    $dataDto = $data['dataDto'];
    $paramsDto = $data['paramsDto'];
    $columnName = $data['columnName'];
    $cell = $data['cell'];
    $sheetsNumber = $data['sheetsNumber'];
    $maxRow = $data['maxRow'];
    $maxColumn = $data['maxColumn'];
    $maxCellCoordinates = $data['maxCellCoordinates'];

    // Actions with Spreadsheet
    $spreadsheet->getActiveSheet()->getCell($data['cell'])->setValue('Cell value');
    $data['spreadsheet'] = $spreadsheet;

    // IMPORTANT! For the changes to apply, you must return a modified data argument
    return $data;
}

?>
```



ArrayExcelBuilder:
------------------


### ArrayExcelBuilder constructor arguments

| Name | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| data | array | [] | Данные ячеек. |
| params | array | [] | Глобальные параметры ячеек. |
| allowCallback | bool | true | Разрешить запуск callback (см. [Global cell options](#global-cell-options) или [Cell options](#cell-options)). Параметр необходим для того, чтобы обезопасить систему от вызова callback-функций, если данные приходят из сторонних источников. |
| cache | CacheInterface | null | Кеширование для уменьшения использования оперативной памяти. Если не передать объект, имплементированный от CacheInterface, то кэширование не используется. Внимание, использование кэширования может увеличить время создания файла! |

```php
<?php

$arrayExcelBuilder = new ArrayExcelBuilder($data, $params, $allowCallback);
$arrayExcelBuilder->save();

?>
```


### ArrayExcelBuilder methods

| Name | Arguments | Returns | Description |
| -------- |:----:| ------- | ----------- |
| build() |  | $this | Вносит переданные переданные данные в Spreadsheet. Метод автоматически вызывается перед сохранением, если до этого не был вызван вручную. |
| getFlatArray() |  | array | Возвращает одномерный массив со значениями ячеек всех страниц. |
| getMatrixArray() |  | array | Возвращает трехмерный массив (страница > колонка > строка) со значениями ячеек всех страниц. |
| getSpreadsheet() |  | Spreadsheet | Возвращает Spreadsheet. Если необходимо произвести действия над Spreadsheet после build(), то build() необходимо вызвать вручную перед методом: ``` $spreadsheet = $arrayExcelBuilder->build()->getSpreadsheet(); ``` |
| load() | string $file | $this | Загружает Spreadsheet из файла. Поддерживаемые форматы: xlsx, xlsm, xltx, xltm, xls, xlt, ods, ots, slk, xml, gnumeric, htm, html, csv. |
| setAllowCallback() | bool $allowCallback | $this | Разрешить/запретить запуск callback (см. [Global cell options](#global-cell-options) или [Cell options](#cell-options)). |
| setData() | array $data | $this | Задает данные. Также можно внести данные через конструктор ArrayExcelBuilder (см. [ArrayExcelBuilder constructor arguments](#arrayexcelbuilder-constructor-arguments)). |
| setParams() | array $params | $this | Задает глобальные параметры. Также можно внести параметры через конструктор ArrayExcelBuilder (см. [ArrayExcelBuilder constructor arguments](#arrayexcelbuilder-constructor-arguments)). |
| save() | $pathToFile = '', array $options = [], $saveToVariable = false | bool, file, Exception, null | Генерирует файл и сохраняет его в файл/переменную. Подробнее об аргументах метода в [Save arguments](#save-arguments). |

```php
<?php

$arrayExcelBuilder = new ArrayExcelBuilder();

$arrayExcelBuilder->setData($data)
    ->setParams($params)
    ->setAllowCallback($allowCallback)
    ->build();

$spreadsheet = $arrayExcelBuilder->getSpreadsheet();
$spreadsheet->getActiveSheet()->setTitle('Sheet title');

$arrayExcelBuilder->save($pathToFile, $saveOptions, $saveToVariable);

?>
```


### Save arguments

```php
$result = $arrayExcelBuilder->save($pathToFile, $saveOptions, $saveToVariable);
```

| Name | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| pathToFile | string | 'Document_<Y-m-d_H-i-s>' | Путь и название файла для сохранения без расширения. |
| saveOptions | array | [] | Массив параметров сохранения файла. Смотрите [Save options](#save-options). |
| saveToVariable | bool | false | Не сохранять файл на диск, а вернуть его в переменную. В примере выше файл вернется в переменную $result. |


### Save options

| Name | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| format | string | 'xlsx' | Формат выходного файла. Поддерживаемые форматы: XLSX, XLS, ODS, CSV, HTML, PDF. |
| includeCharts | bool | true | Включить отрисовку графиков. Параметр для форматов: XLSX, XLS, ODS. |
| office2003Compatibility | bool | false | Включить совместимость с Office 2003. Параметр для форматов: XLSX. |
| calculateFormulas | bool | true | Рассчитать значения формул. Параметр для форматов: XLSX, XLS, ODS, CSV, HTML, PDF. |
| useBOM | bool | true | Внести метку BOM кодировки UTF-8. Параметр для форматов: CSV. |
| enclosure | string (one character only) | '' | Защитный символ, которым будет обрамлена каждая ячейка. Параметр для форматов: CSV. |
| lineEnding | string | "\r\n" | Символ(ы) окончания строки. Передавать необходимо в двойных кавычках. Параметр для форматов: CSV. |
| delimiter | string (one character only) | ';' | Разделитель ячеек. Параметр для форматов: CSV. |
| allSheets | bool | true | Сохранить все страницы. Игнорирует параметр "sheetIndex". Параметр для форматов: PDF. |
| sheetIndex | integer | 0 | Индекс страницы (отсчет с нуля), который необходимо сохранить. Игнорируется, если параметр "allSheets" равен "true". Параметр для форматов: CSV, PDF. |
| imagesRoot | string | '' | Корневой путь до изображений. Параметр для форматов: HTML. |
| pdfBuilder | string | 'mpdf' | Класс генератора PDF-файла. Есть три варианта: mpdf, dompdf, tcpdf. Каждый из них отличается скоростью генерирования, поддержкой различных параметров отображения и размером выходного файла. Параметр для форматов: PDF. |

```php
<?php

$saveOptions = [
    'format' => 'xlsx',
    'includeCharts' => true,
    'office2003Compatibility' => false,
    'calculateFormulas' => true,
    'useBOM' => true,
    'enclosure' => '',
    'lineEnding' => "\r\n",
    'delimiter' => ';',
    'sheetIndex' => 0,
    'imagesRoot' => '',
    'pdfBuilder' => 'mpdf',
    'allSheets' => true,
];

?>
```



Charts:
-------


<img src="https://github.com/KebaCorp/ArrayExcelBuilder/blob/master/img/ExcelChartExample.png?raw=true" height="250px">

### Chart options

| Name | Type | Default | Description |
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

| Name | Type | Default | Description |
| -------- |:----:| ------- | ----------- |
| dataType | string | 'Number' | Не обязательный параметр. Тип данных: 'Number', 'String'. |
| column | string | none | Обязательный параметр. Имя колонки. Именование колонки ведется в латинских буквах начиная от A и далее. Например: 'B'. |
| row | integer | none | Обязательный параметр. Номер строки. Именование строки ведется из натуральных чисел начиная с 1. Например: 21. |
| sheetName | string | none | Обязательный параметр. Название страницы, где находится Label. |


### Chart xValues and yValues options

| Name | Type | Default | Description |
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

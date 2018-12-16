<p align="center">
    <a href="https://github.com/KebaCorp" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/29224726?s=460&v=4" height="100px">
    </a>
    <h1 align="center">ArrayExcelBuilder</h1>
    <br>
</p>

The component creates an Excel file from the data array.

For license information check the [LICENSE](LICENSE.md)-file.


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
            ],
        ],
    ],
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
| hAlignment | string | 'left' | Горизонтальное выравнивание текста: general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only. |
| mergeColumns | integer | 0 | Кол-во ячеек справа, которое необходимо присоединить к текущей ячейке. |
| mergeRows | integer | 0 | Кол-во ячеек снизу, которое необходимо присоединить к текущей ячейке. |
| styleArray | array | [] | Массив стилей. Смотрите [Style array](#style-array) |
| vAlignment | string | 'center' | Вертикальное выравнивание текста: bottom, top, center, justify, distributed - Excel2007 only. |
| value | string | '' | Текст ячейки |
| wrapText | bool | true | Перенос строки. |


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
| hAlignment | string | 'left' | Горизонтальное выравнивание текста: general, left, right, center, centerContinuous, justify, fill, distributed - Excel2007 only. |
| mergeColumns | integer | 0 | Кол-во ячеек справа, которое необходимо присоединить к текущей ячейке. |
| mergeRows | integer | 0 | Кол-во ячеек снизу, которое необходимо присоединить к текущей ячейке. |
| rowHeight | integer | auto | Высота строки. Если параметр передан нескольким ячейкам, значение будет использовано из последней ячейки в данной строке. |
| styleArray | array | [] | Массив стилей. Смотрите [Style array](#style-array) |
| vAlignment | string | 'center' | Вертикальное выравнивание текста: bottom, top, center, justify, distributed - Excel2007 only. |
| value | string | '' | Текст ячейки |
| wrapText | bool | true | Перенос строки. |


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
            ],
        ],
    ],
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
$result = $arrayExcelBuilder->setParams($params)
    ->save('excel/Document.xlsx');

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
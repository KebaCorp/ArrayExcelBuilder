<?php

namespace app\tests\examples;

/**
 * Class ValueTypesExample
 */
class ValueTypesExample
{
    /**
     * For example.
     *
     * @var string
     */
    public $type = 'Object';
    public $value = 100500;

    /**
     * Returns data ArrayExcelBuilder.
     *
     * @return array
     */
    public static function getData()
    {
        // Sheet data
        // Column 1
        $column1 = [
            [
                'value' => 'String',
                'hAlignment' => 'center',
                'bold' => true,
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
        ];

        // Column 2
        $column2 = [
            [
                'value' => 'Int',
                'hAlignment' => 'center',
                'bold' => true,
            ],
            [
                'value' => 100500,
                'hAlignment' => 'center',
            ],
        ];

        // Column 3
        $column3 = [
            [
                'value' => 'Float',
                'hAlignment' => 'center',
                'bold' => true,
            ],
            [
                'value' => 100.500,
                'hAlignment' => 'center',
            ],
        ];

        // Column 4
        $column4 = [
            [
                'value' => 'Boolean',
                'hAlignment' => 'center',
                'bold' => true,
            ],
            [
                'value' => true,
                'hAlignment' => 'center',
            ],
        ];

        // Column 5
        $column5 = [
            [
                'value' => 'Formula',
                'hAlignment' => 'center',
                'bold' => true,
            ],
            [
                'value' => '=SUM(B2:C2)',
                'hAlignment' => 'center',
            ],
        ];

        // Column 6
        $column6 = [
            [
                'value' => 'Array',
                'hAlignment' => 'center',
                'bold' => true,
            ],
            [
                'value' => ['type' => 'Array', 'value' => 100500],
                'hAlignment' => 'center',
            ],
        ];

        // Column 7
        $column7 = [
            [
                'value' => 'Object',
                'hAlignment' => 'center',
                'bold' => true,
            ],
            [
                'value' => new self(),
                'hAlignment' => 'center',
            ],
        ];

        // Column 8
        $column8 = [
            [
                'value' => 'Null',
                'hAlignment' => 'center',
                'bold' => true,
            ],
            [
                'value' => null,
                'hAlignment' => 'center',
            ],
        ];

        // Column 9
        $column9 = [
            [
                'value' => 'Function',
                'hAlignment' => function () {
                    return ['type' => 'Function', 'value' => 100500];
                },
                'bold' => true,
            ],
            [
                'value' => null,
                'hAlignment' => 'center',
            ],
        ];

        // Sheets
        $data = [
            [
                'sheetName' => 'First page',
                'showGridLines' => true,
                'data' => [$column1, $column2, $column3, $column4, $column5, $column6, $column7, $column8, $column9],
            ],
        ];

        // Global cell options
        $defaultParams = [
            'fontColor' => '',
            'fillColor' => '',
            'fontSize' => 9,
            'bold' => false,
            'hAlignment' => 'center',
            'vAlignment' => 'center',
            'wrapText' => false,
            'comment' => '',
            'columnWidth' => 150,
            'rowHeight' => 25,
        ];

        return [
            'data' => $data,
            'defaultParams' => $defaultParams,
        ];
    }
}

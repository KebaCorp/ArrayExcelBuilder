<?php

namespace app\tests\examples;

/**
 * Class MergeExample
 */
class MergeExample
{
    /**
     * Returns data ArrayExcelBuilder.
     *
     * @param bool $isRowDirection
     * @return array
     */
    public static function getData($isRowDirection = false)
    {
        // Sheet data
        // Column 1
        $column1 = [
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => '1. Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
                'mergeColumns' => 1,
                'mergeRows' => 3,
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
        ];

        // Column 2
        $column2 = [
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
                'mergeRows' => 0,
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
                'mergeRows' => 2,
                'mergeColumns' => 1,
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
        ];

        // Column 3
        $column3 = [
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
            [
                'value' => 'Lorem ipsum dolor sit amet',
                'hAlignment' => 'center',
            ],
        ];

        // Sheets
        $data = [
            [
                'sheetName' => 'First page',
                'showGridLines' => true,
                'isRowDirection' => $isRowDirection,
                'data' => [$column1, $column2, $column3],
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

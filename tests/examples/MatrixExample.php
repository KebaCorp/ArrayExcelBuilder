<?php

/**
 * Class MatrixExample
 */
class MatrixExample
{
    /**
     * Returns data ArrayExcelBuilder.
     *
     * @return array
     */
    public static function getData()
    {
        // Sheet data
        $data = [
            // Column 1
            [
                'Hello world!',
                0,
                '0',
                true,
                100500,
                'Other value',
                [
                    'value' => 'I can configure the cell in more detail',
                    'bold' => true,
                ],
            ],
            // Column 2
            3 => [
                'Hello world!',
                true,
                100500,
                10 => 'Other value',
                [
                    'value' => 'I can configure the cell in more detail 2',
                    'bold' => true,
                ],
            ],
            // Column 3
            [
                'Hello world!',
                true,
                100500,
                11 => 'Other value',
                15 => [
                    'value' => 'I can configure the cell in more detail 3',
                    'bold' => true,
                ],
            ],
        ];

        // Sheet data
        $data = [
            // Column 1
            [
                [
                    'value' => '',
                ],
                [
                    'value' => 'Value',
                ],
                [
                    'value' => null,
                ],
            ],
            // Column 2
            [
                [
                    'value' => 'Value',
                ],
                [
                    'value' => 'Value',
                ],
            ],
            // Column 3
            [
                [
                    'value' => 'Value',
                ],
                [
                    'value' => 'Value',
                ],
                [
                    'value' => 'Value',
                ],
            ],
        ];

        // Sheets
        $data = [
            [
                'sheetName' => 'Matrix',
                'data' => $data,
                'isRowDirection' => true,
                'autoSize' => true,
                'showGridLines' => true,
            ],
        ];

        // Global default cell options
        $defaultParams = [
            'value' => '-',
            'fillColor' => 'cccccc',
        ];

        return [
            'data' => $data,
            'defaultParams' => $defaultParams,
        ];
    }
}

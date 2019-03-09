<?php

/**
 * Class CallbackExample
 */
class CallbackExample
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
            // Column 2
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
            // Column 3
            [
                [
                    'value' => 'Value',
                ],
                [
                    'value' => 'Value',
                    'url' => 'sheet://"Callback"!A10',
                ],
                [
                    'value' => "ValueТекст на первой строке\nТекст на второй строке",
                ],
                [
                    'callback' => function ($data) {
                        $data['spreadsheet']->getActiveSheet()
                            ->getCell('A10')
//                            ->getCell($data['cell'])
                            ->setValue('Cell value');

                        return $data;
                    },
                ],
            ],
        ];

        // Sheets
        $data = [
            [
                'sheetName' => 'Callback',
                'data' => $data,
                'isRowDirection' => false,
                'autoSize' => true,
                'showGridLines' => false,
            ],
            [
                'sheetName' => 'Callback 2',
                'data' => $data,
                'isRowDirection' => false,
                'autoSize' => true,
                'showGridLines' => true,
            ],
        ];

        // Global default cell options
        $defaultParams = [
            'value' => '-',
            'protect' => false,
            'callback' => function ($data) {
                $data['spreadsheet']->getActiveSheet()
                    ->getCell('A12')
                    ->setValue('Global cell value');

                return $data;
            },
        ];

        return [
            'data' => $data,
            'defaultParams' => $defaultParams,
        ];
    }
}

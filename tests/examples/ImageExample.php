<?php

namespace app\tests\examples;

/**
 * Class ImageExample
 */
class ImageExample
{
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
                'value' => 'Example text',
                'image' => 'example.jpg',
            ],
        ];

        // Column 2
        $column2 = [
            [
                'value' => 'Example text',
                'image' => [
                    'path' => 'example.jpg',
                    'name' => 'Example',
                    'description' => 'Example image',
                    'offsetX' => 10,
                    'offsetY' => 15,
                    'width' => 200,
                    'height' => 300,
                    'resizeProportional' => true,
                    'rotation' => 70,
                    'hyperLink' => 'www.google.com',
                    'shadow' => '',
                ],
            ],
        ];

        // Column 3
        $column3 = [
            [
                'value' => 'Example text',
                'image' => [
                    'path' => 'example.jpg',
                    'name' => 'Example',
                    'description' => 'Example image',
                    'width' => 200,
                    'height' => 300,
                    'resizeProportional' => false,
                    'hyperLink' => [
                        'url' => 'www.google.com',
                        'tooltip' => 'Google',
                    ],
                    'shadow' => '',
                ],
            ],
        ];

        // Sheets
        $data = [
            [
                'data' => [0 => $column1, 3 => $column2, 10 => $column3],
                'isRowDirection' => false,
                'autoSize' => false,
                'showGridLines' => true,
            ],
        ];

        // Global default cell options
        $defaultParams = [];

        return [
            'data' => $data,
            'defaultParams' => $defaultParams,
        ];
    }
}

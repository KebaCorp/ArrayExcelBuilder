<?php

namespace app\tests\examples;

/**
 * Class HelloWorldExample
 */
class HelloWorldExample
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
                'value' => 'Hello, World!',
            ],
        ];

        // Sheets
        $data = [
            [
                'data' => [$column1],
            ],
        ];

        // Global cell options
        $defaultParams = [];

        return [
            'data' => $data,
            'defaultParams' => $defaultParams,
        ];
    }
}

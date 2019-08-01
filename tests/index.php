<?php

namespace app\tests;

require __DIR__ . '/../vendor/autoload.php';

use app\helpers\MemoryHelper;
use app\tests\examples\BUSExample;
use app\tests\examples\CallbackExample;
use app\tests\examples\HelloWorldExample;
use app\tests\examples\ImageExample;
use app\tests\examples\MainExample;
use app\tests\examples\MatrixExample;
use app\tests\examples\MergeExample;
use app\tests\examples\StressTestExample;
use app\tests\examples\ValueTypesExample;
use Exception;
use KebaCorp\ArrayExcelBuilder\ArrayExcelBuilder;

/**
 * Data types.
 */
const MAIN_EXAMPLE = 'main';
const MERGE_EXAMPLE = 'merge';
const VALUE_TYPES_EXAMPLE = 'value_types';
const STRESS_TEST_EXAMPLE = 'stress_test';
const HELLO_WORLD_EXAMPLE = 'hello_world';
const BUS_EXAMPLE = 'bus';
const IMAGE_EXAMPLE = 'image';
const MATRIX_EXAMPLE = 'matrix';
const CALLBACK_EXAMPLE = 'callback';

// Change this constant to get other data
$dataType = STRESS_TEST_EXAMPLE;

MemoryHelper::printMemoryUsage('Start: ', '<br/>');

switch ($dataType) {

    case MERGE_EXAMPLE:
        $data = MergeExample::getData(true);
        break;

    case VALUE_TYPES_EXAMPLE:
        $data = ValueTypesExample::getData();
        break;

    case STRESS_TEST_EXAMPLE:
        $data = StressTestExample::getData(10, 7000, 'Lorem ipsum dolor sit amet');
        break;

    case HELLO_WORLD_EXAMPLE:
        $data = HelloWorldExample::getData();
        break;

    case BUS_EXAMPLE:
        $data = BUSExample::getData();
        break;

    case IMAGE_EXAMPLE:
        $data = ImageExample::getData();
        break;

    case MATRIX_EXAMPLE:
        $data = MatrixExample::getData();
        break;

    case CALLBACK_EXAMPLE:
        $data = CallbackExample::getData();
        break;

    default:
        $data = MainExample::getData();
}

MemoryHelper::printMemoryUsage('Data array created: ', '<br/>');

// File path and name
$fileName = __DIR__ . '/results/Document_' . date('Y-m-d_H-i-s');

$start = microtime(true);

// Save file
$startCreateObject = microtime(true);
$arrayExcelBuilder = new ArrayExcelBuilder();
$arrayExcelBuilder->setData($data['data']);
$endCreateObject = microtime(true);

MemoryHelper::printMemoryUsage('Data added to ArrayExcelBuilder: ', '<br/>');

$result = false;
$startSetDefaultParams = 0;
$endSetDefaultParams = 0;
$startSave = 0;
$endSave = 0;

try {
    $startSetDefaultParams = microtime(true);
    $arrayExcelBuilder->setParams($data['defaultParams']);
    $endSetDefaultParams = microtime(true);

    MemoryHelper::printMemoryUsage('Before save to file: ', '<br/>');

    $startSave = microtime(true);
    $result = $arrayExcelBuilder->save(
        $fileName,
        [
            'format'     => 'xlsx',
            'imagesRoot' => './../',
        ],
        false);

    MemoryHelper::printMemoryUsage('After save to file: ', '<br/>');

    $endSave = microtime(true);
} catch (Exception $e) {
    print_r($e);
}

$end = microtime(true);

MemoryHelper::printMemoryUsage('End: ', '<br/>');

if ($result) {
    echo '<h3>File successfully created on the way "' . $fileName . '".</h3>';
    echo '<p><b>Time to create an object with data:</b> ' . ($endCreateObject - $startCreateObject) . ' sec.</p>';
    echo '<p><b>Default params setting time:</b> ' . ($endSetDefaultParams - $startSetDefaultParams) . ' sec.</p>';
    echo '<p><b>Save to file time:</b> ' . ($endSave - $startSave) . ' sec.</p>';
    echo '<p><b>Code execution time:</b> ' . ($end - $start) . ' sec.</p>';
    echo "<br/><br/>";

    echo "<h3>Result:</h3><hr/><br/>";
    print_r($result);
} else {
    echo "<pre>";
    echo "<h1>ATTENTION! ERROR:</h1>";
    echo "<br/><br/>";

    echo "<h3>Result:</h3><hr/><br/>";
    print_r($result);
}

exit;

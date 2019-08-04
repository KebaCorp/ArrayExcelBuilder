<?php
/**
 * Created by Abek Narynov.
 * Date: 2018-12-16
 * @link https://github.com/KebaCorp
 * @copyright Copyright (c) 2018 KebaCorp
 */

namespace KebaCorp\ArrayExcelBuilder;

use Exception;
use PhpOffice\PhpSpreadsheet\Chart\Chart;
use PhpOffice\PhpSpreadsheet\Chart\DataSeries;
use PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues;
use PhpOffice\PhpSpreadsheet\Chart\Legend;
use PhpOffice\PhpSpreadsheet\Chart\PlotArea;
use PhpOffice\PhpSpreadsheet\Chart\Title;

/**
 * Class ArrayExcelBuilderChart
 *
 * Creates a graph of the transmitted data in the array.
 *
 * @package app\controllers
 */
class ArrayExcelBuilderChart
{
    /**
     * Chart start position.
     *
     * For example: 'B2'
     *
     * @var string
     */
    private $_chartStartPosition = 'B2';

    /**
     * Chart end position.
     *
     * For example: 'H17'
     *
     * @var string
     */
    private $_chartEndPosition = 'H17';

    /**
     * Chart name.
     *
     * @var string
     */
    private $_name = '';

    /**
     * Chart title.
     *
     * @var string
     */
    private $_title;

    /**
     * Chart labels.
     *
     * @var array
     */
    private $_labels;

    /**
     * X axis chart label.
     *
     * @var string
     */
    private $_xLabel;

    /**
     * Y axis chart label.
     *
     * @var string
     */
    private $_yLabel;

    /**
     * X axis chart values.
     *
     * @var array
     */
    private $_xValues;

    /**
     * Y axis chart values.
     *
     * @var array
     */
    private $_yValues;

    /**
     * Insert legend.
     *
     * @var bool
     */
    private $_isLegend = false;

    /**
     * Legend position.
     *
     * Options:
     *  'r' - right
     *  'b' - bottom
     *  't' - top
     *  'tr' - top and right
     *
     * @var string
     */
    private $_legendPosition = 'r';

    /**
     * Chart type.
     *
     * Options:
     *  barChart, bar3DChart, lineChart, line3DChart, areaChart, area3DChart,
     *  pieChart, pie3DChart, doughnutChart, scatterChart, surfaceChart,
     *  surface3DChart, radarChart, bubbleChart, stockChart
     *
     * @var string
     */
    private $_chartType = 'lineChart';

    /**
     * Chart group type.
     *
     * Options: clustered, stacked, percentStacked, standard
     *
     * @var string
     */
    private $_groupType = 'stacked';

    /**
     * Create a new ArrayExcelBuilderChart.
     *
     * @param array $data - must consist of nested arrays
     */
    public function __construct(array $data)
    {
        // Set chart name
        if (isset($data['name']) && is_string($data['name'])) {
            $this->_name = $data['name'];
        }

        // Set chart title
        if (isset($data['title']) && is_string($data['title'])) {
            $this->_title = $data['title'];
        }

        // Set chart labels
        if (isset($data['labels']) && is_array($data['labels'])) {
            $this->_labels = $data['labels'];
        }

        // Set x axis chart label
        if (isset($data['xLabel']) && is_string($data['xLabel'])) {
            $this->_xLabel = $data['xLabel'];
        }

        // Set y axis chart label
        if (isset($data['yLabel']) && is_string($data['yLabel'])) {
            $this->_yLabel = $data['yLabel'];
        }

        // Set x axis chart values
        if (isset($data['xValues']) && is_array($data['xValues'])) {
            $this->_xValues = $data['xValues'];
        }

        // Set y axis chart values
        if (isset($data['yValues']) && is_array($data['yValues'])) {
            $this->_yValues = $data['yValues'];
        }

        // Insert legend
        if (isset($data['isLegend']) && is_bool($data['isLegend'])) {
            $this->_isLegend = $data['isLegend'];
        }

        // Set legend position
        if (isset($data['legendPosition']) && is_string($data['legendPosition'])) {
            $this->_legendPosition = $data['legendPosition'];
        }

        // Set chart type
        if (isset($data['chartType']) && is_string($data['chartType'])) {
            $this->_chartType = $data['chartType'];
        }

        // Set chart group type
        if (isset($data['groupType']) && is_string($data['groupType'])) {
            $this->_groupType = $data['groupType'];
        }

        // Set chart start position
        if (isset($data['chartStartPosition']) && is_string($data['chartStartPosition'])) {
            $this->_chartStartPosition = $data['chartStartPosition'];
        }

        // Set chart end position
        if (isset($data['chartEndPosition']) && is_string($data['chartEndPosition'])) {
            $this->_chartEndPosition = $data['chartEndPosition'];
        }
    }

    /**
     * Creates and returns a chart of previously submitted data.
     *
     * @return Chart
     *
     * @throws Exception
     */
    public function createChart()
    {
        // Set chart labels
        $chartLabels = $this->_labels ? $this->_createDataSeriesValues($this->_labels) : [];

        // Set the x axis values
        $xAxisTickValues = $this->_xValues ? $this->_createDataSeriesValues($this->_xValues) : [];

        // Set the y axis values
        $yAxisTickValues = $this->_yValues ? $this->_createDataSeriesValues($this->_yValues) : [];

        // Build the data series
        $series = new DataSeries(
            $this->_chartType,
            $this->_groupType,
            range(0, count($yAxisTickValues) - 1), // Chart order
            $chartLabels,
            $xAxisTickValues,
            $yAxisTickValues
        );

        // Set the series in the plot area
        $plotArea = new PlotArea(null, [$series]);

        // Set the chart legend
        $legend = $this->_isLegend ? new Legend($this->_legendPosition, null, false) : null;

        // Chart title
        $title = $this->_title ? new Title($this->_title) : null;

        // X axis chart label
        $xAxisLabel = $this->_xLabel ? new Title($this->_xLabel) : null;

        // Y axis chart label
        $yAxisLabel = $this->_yLabel ? new Title($this->_yLabel) : null;

        // Create the chart
        $chart = new Chart(
            $this->_name, // Chart name
            $title, // Chart title
            $legend, // Chart legend
            $plotArea, // Chart area
            true, // Chart VisibleOnly
            0, // displayBlanksAs
            $xAxisLabel, // xAxisLabel
            $yAxisLabel  // yAxisLabel
        );

        // Set the position where the chart should appear in the worksheet
        $chart->setTopLeftPosition($this->_chartStartPosition);
        $chart->setBottomRightPosition($this->_chartEndPosition);

        return $chart;
    }

    /**
     * Creates data series values by array.
     *
     * Values example 1:
     *  [
     *      'dataType' => 'String',     // Type of data: Number, String (optional).
     *      'sheetName' => 'Worksheet', // Name of the page where the values ​​for the X axis are located.
     *      'startColumn' => 'A',       // Name of the column where the data begins.
     *                                          Column naming is in Latin letters starting from A and on.
     *      'startRow' => 2,            // Line number where the data starts.
     *                                          Naming of the string is carried out in numbers starting from 1.
     *      'endColumn' => 'A',         // Name of the column where the data ends.
     *                                          Column naming is in Latin letters starting from A and on.
     *      'endRow' => 5,              // Line number where the data ends.
     *                                          Naming of the string is carried out in numbers starting from 1.
     *  ]
     *
     * Values example 2:
     *  [
     *      'dataType' => 'String',     // Type of data: Number, String (optional).
     *      'sheetName' => 'Worksheet', // Name of the page where the values ​​for the X axis are located.
     *      'column' => 'A',            // Name of the column where the data located.
     *                                          Column naming is in Latin letters starting from A and on.
     *      'row' => 2,                 // Line number where the data located.
     *                                          Naming of the string is carried out in numbers starting from 1.
     *  ]
     *
     * @param array $values
     *
     * @return array
     *
     * @throws Exception
     */
    private function _createDataSeriesValues(array $values)
    {
        // Data series values
        $dataSeriesValues = [];

        foreach ($values as $value) {
            // Create data source by options
            if (isset($value['sheetName']) &&
                isset($value['startColumn']) &&
                isset($value['startRow']) &&
                isset($value['endColumn']) &&
                isset($value['endRow'])) {

                $dataSource = $value['sheetName']
                    . '!$' . $value['startColumn']
                    . '$' . $value['startRow']
                    . ':$'
                    . $value['endColumn']
                    . '$' . $value['endRow'];

            } else if (isset($value['sheetName']) &&
                isset($value['column']) &&
                isset($value['row'])) {

                $dataSource = $value['sheetName'] . '!$' . $value['column'] . '$' . $value['row'];

            } else {
                throw new Exception('Required parameters not passed.');
            }

            // Create new data series values by options
            $dataSeriesValues[] = new DataSeriesValues(
                isset($value['dataType']) ? $value['dataType'] : 'Number',
                $dataSource,
                null
            );
        }

        return $dataSeriesValues;
    }
}

<?php
/**
 * Created by Abek Narynov.
 * Date: 2018-12-15
 * @link https://github.com/KebaCorp
 * @copyright Copyright (c) 2018 KebaCorp
 */

namespace KebaCorp\ArrayExcelBuilder;

/**
 * Class ArrayExcelBuilderCellDTO.
 *
 * Cell parameter transfer.
 *
 * @package KebaCorp\ArrayExcelBuilder
 */
class ArrayExcelBuilderCellDTO
{
    /**
     * Cell value.
     *
     * @var string|number|bool
     */
    private $_value = NULL;

    /**
     * Font color.
     *
     * @var string
     */
    private $_fontColor = '';

    /**
     * Fill color.
     *
     * @var string
     */
    private $_fillColor = '';

    /**
     * Is text bold.
     *
     * @var bool
     */
    private $_bold = false;

    /**
     * Horizontal alignment.
     *
     * @var string
     */
    private $_hAlignment = '';

    /**
     * Vertical alignment.
     *
     * @var string
     */
    private $_vAlignment = '';

    /**
     * Is wrap text.
     *
     * @var bool
     */
    private $_isWrapText = false;

    /**
     * Cell comment.
     *
     * @var string
     */
    private $_comment = '';

    /**
     * Merge columns.
     *
     * @var int
     */
    private $_mergeColumns = 0;

    /**
     * Merge rows.
     *
     * @var int
     */
    private $_mergeRows = 0;

    /**
     * Border on the top of all cells on the page.
     *
     * @var string
     */
    private $_allBorderTop = '';
    private $_allBorderTopColor = '000000';

    /**
     * Border on the bottom of all cells on the page.
     *
     * @var string
     */
    private $_allBorderBottom = '';
    private $_allBorderBottomColor = '000000';

    /**
     * Border on the left of all cells on the page.
     *
     * @var string
     */
    private $_allBorderLeft = '';
    private $_allBorderLeftColor = '000000';

    /**
     * Border on the right of all cells on the page.
     *
     * @var string
     */
    private $_allBorderRight = '';
    private $_allBorderRightColor = '000000';

    /**
     * Border on top of the cell.
     *
     * @var string
     */
    private $_borderTop = '';
    private $_borderTopColor = '000000';

    /**
     * Border on bottom of the cell.
     *
     * @var string
     */
    private $_borderBottom = '';
    private $_borderBottomColor = '000000';

    /**
     * Border on left of the cell.
     *
     * @var string
     */
    private $_borderLeft = '';
    private $_borderLeftColor = '000000';

    /**
     * Border on right of the cell.
     *
     * @var string
     */
    private $_borderRight = '';
    private $_borderRightColor = '000000';

    /**
     * Vertical border of the cell.
     *
     * @var string
     */
    private $_borderVertical = '';
    private $_borderVerticalColor = '000000';

    /**
     * Horizontal border of the cell.
     *
     * @var string
     */
    private $_borderHorizontal = '';
    private $_borderHorizontalColor = '000000';

    /**
     * Font size.
     *
     * @var int
     */
    private $_fontSize = 0;

    /**
     * Style from array.
     *
     * @var array
     */
    private $_styleArray = array();

    /**
     * Column width.
     *
     * @var int
     */
    private $_columnWidth = 0;

    /**
     * Row height.
     *
     * @var int
     */
    private $_rowHeight = 0;

    /**
     * Set data from array.
     *
     * @param array $cellData
     *
     * @return bool: true - if the data has been changed, false - if the data has not been changed
     */
    public function setDataFromArray(array $cellData)
    {
        $isChanged = false;

        // Set cell value
        if (isset($cellData['value'])) {
            // If the value is not a string, not a number or not a boolean, then it encodes to json
            if (is_string($cellData['value']) || is_numeric($cellData['value']) || is_bool($cellData['value'])) {
                $this->_value = $cellData['value'];
            } else {
                $this->_value = json_encode($cellData['value']);
            }

            $isChanged = true;
        }

        // Set font color
        if (isset($cellData['fontColor']) && is_string($cellData['fontColor'])) {
            $this->_fontColor = $cellData['fontColor'];
            $isChanged = true;
        }

        // Set fill color
        if (isset($cellData['fillColor']) && is_string($cellData['fillColor'])) {
            $this->_fillColor = $cellData['fillColor'];
            $isChanged = true;
        }

        // Set is bold text
        if (isset($cellData['bold']) && is_bool($cellData['bold'])) {
            $this->_bold = $cellData['bold'];
            $isChanged = true;
        }

        // Set horizontal alignment
        if (isset($cellData['hAlignment']) && is_string($cellData['hAlignment'])) {
            $this->_hAlignment = $cellData['hAlignment'];
            $isChanged = true;
        }

        // Set vertical alignment
        if (isset($cellData['vAlignment']) && is_string($cellData['vAlignment'])) {
            $this->_vAlignment = $cellData['vAlignment'];
            $isChanged = true;
        }

        // Set is wrap text
        if (isset($cellData['wrapText']) && is_bool($cellData['wrapText'])) {
            $this->_isWrapText = $cellData['wrapText'];
            $isChanged = true;
        }

        // Set cell comment
        if (isset($cellData['comment']) && is_string($cellData['comment'])) {
            $this->_comment = $cellData['comment'];
            $isChanged = true;
        }

        // Merge columns
        if (isset($cellData['mergeColumns']) && is_int($cellData['mergeColumns']) && $cellData['mergeColumns'] > 0) {
            $this->_mergeColumns = $cellData['mergeColumns'];
            $isChanged = true;
        }

        // Merge rows
        if (isset($cellData['mergeRows']) && is_int($cellData['mergeRows']) && $cellData['mergeRows'] > 0) {
            $this->_mergeRows = $cellData['mergeRows'];
            $isChanged = true;
        }

        // Border on the top of all cells on the page
        if (isset($cellData['allBorderTop']) && is_string($cellData['allBorderTop'])) {
            $this->_allBorderTop = $cellData['allBorderTop'];
            $isChanged = true;
        }

        // Border on the bottom of all cells on the page
        if (isset($cellData['allBorderBottom']) && is_string($cellData['allBorderBottom'])) {
            $this->_allBorderBottom = $cellData['allBorderBottom'];
            $isChanged = true;
        }

        // Border on the left of all cells on the page
        if (isset($cellData['allBorderLeft']) && is_string($cellData['allBorderLeft'])) {
            $this->_allBorderLeft = $cellData['allBorderLeft'];
            $isChanged = true;
        }

        // Border on the right of all cells on the page
        if (isset($cellData['allBorderRight']) && is_string($cellData['allBorderRight'])) {
            $this->_allBorderRight = $cellData['allBorderRight'];
            $isChanged = true;
        }

        // Border color on the top of all cells on the page
        if (isset($cellData['allBorderTopColor']) && is_string($cellData['allBorderTopColor'])) {
            $this->_allBorderTopColor = $cellData['allBorderTopColor'];
            $isChanged = true;
        }

        // Border color on the bottom of all cells on the page
        if (isset($cellData['allBorderBottomColor']) && is_string($cellData['allBorderBottomColor'])) {
            $this->_allBorderBottomColor = $cellData['allBorderBottomColor'];
            $isChanged = true;
        }

        // Border color on the left of all cells on the page
        if (isset($cellData['allBorderLeftColor']) && is_string($cellData['allBorderLeftColor'])) {
            $this->_allBorderLeftColor = $cellData['allBorderLeftColor'];
            $isChanged = true;
        }

        // Border color on the right of all cells on the page
        if (isset($cellData['allBorderRightColor']) && is_string($cellData['allBorderRightColor'])) {
            $this->_allBorderRightColor = $cellData['allBorderRightColor'];
            $isChanged = true;
        }

        // Border color on top of the cell
        if (isset($cellData['borderTopColor']) && is_string($cellData['borderTopColor'])) {
            $this->_borderTopColor = $cellData['borderTopColor'];
            $isChanged = true;
        }

        // Border color on bottom of the cell
        if (isset($cellData['borderBottomColor']) && is_string($cellData['borderBottomColor'])) {
            $this->_borderBottomColor = $cellData['borderBottomColor'];
            $isChanged = true;
        }

        // Border color on left of the cell
        if (isset($cellData['borderLeftColor']) && is_string($cellData['borderLeftColor'])) {
            $this->_borderLeftColor = $cellData['borderLeftColor'];
            $isChanged = true;
        }

        // Border color on right of the cell
        if (isset($cellData['borderRightColor']) && is_string($cellData['borderRightColor'])) {
            $this->_borderRightColor = $cellData['borderRightColor'];
            $isChanged = true;
        }

        // Vertical border color of the cell
        if (isset($cellData['borderVerticalColor']) && is_string($cellData['borderVerticalColor'])) {
            $this->_borderVerticalColor = $cellData['borderVerticalColor'];
            $isChanged = true;
        }

        // Horizontal border color of the cell
        if (isset($cellData['borderHorizontalColor']) && is_string($cellData['borderHorizontalColor'])) {
            $this->_borderHorizontalColor = $cellData['borderHorizontalColor'];
            $isChanged = true;
        }

        // Border on top of the cell
        if (isset($cellData['borderTop']) && is_string($cellData['borderTop'])) {
            $this->_borderTop = $cellData['borderTop'];
            $isChanged = true;
        }

        // Border on bottom of the cell
        if (isset($cellData['borderBottom']) && is_string($cellData['borderBottom'])) {
            $this->_borderBottom = $cellData['borderBottom'];
            $isChanged = true;
        }

        // Border on left of the cell
        if (isset($cellData['borderLeft']) && is_string($cellData['borderLeft'])) {
            $this->_borderLeft = $cellData['borderLeft'];
            $isChanged = true;
        }

        // Border on right of the cell
        if (isset($cellData['borderRight']) && is_string($cellData['borderRight'])) {
            $this->_borderRight = $cellData['borderRight'];
            $isChanged = true;
        }

        // Vertical border of the cell
        if (isset($cellData['borderVertical']) && is_string($cellData['borderVertical'])) {
            $this->_borderVertical = $cellData['borderVertical'];
            $isChanged = true;
        }

        // Horizontal border  of the cell
        if (isset($cellData['borderHorizontal']) && is_string($cellData['borderHorizontal'])) {
            $this->_borderHorizontal = $cellData['borderHorizontal'];
            $isChanged = true;
        }

        // Font size
        if (isset($cellData['fontSize']) && is_int($cellData['fontSize']) && $cellData['fontSize'] > 0) {
            $this->_fontSize = $cellData['fontSize'];
            $isChanged = true;
        }

        // Style from array
        if (isset($cellData['styleArray']) && is_array($cellData['styleArray'])) {
            $this->_styleArray = $cellData['styleArray'];
            $isChanged = true;
        }

        // Column width
        if (isset($cellData['columnWidth']) && is_int($cellData['columnWidth']) && $cellData['columnWidth'] > 0) {
            $this->_columnWidth = $cellData['columnWidth'];
            $isChanged = true;
        }

        // Row height
        if (isset($cellData['rowHeight']) && is_int($cellData['rowHeight']) && $cellData['rowHeight'] > 0) {
            $this->_rowHeight = $cellData['rowHeight'];
            $isChanged = true;
        }

        return $isChanged;
    }

    /**
     * Get vertical border of the cell.
     *
     * @return string
     */
    public function getBorderVertical()
    {
        return $this->_borderVertical;
    }

    /**
     * Get vertical border color of the cell.
     *
     * @return string
     */
    public function getBorderVerticalColor()
    {
        return $this->_borderVerticalColor;
    }

    /**
     * Get horizontal border of the cell.
     *
     * @return string
     */
    public function getBorderHorizontal()
    {
        return $this->_borderHorizontal;
    }

    /**
     * Get horizontal border color of the cell.
     *
     * @return string
     */
    public function getBorderHorizontalColor()
    {
        return $this->_borderHorizontalColor;
    }

    /**
     * Get cell value.
     *
     * @return string|number|bool
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * Get font color.
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->_fontColor;
    }

    /**
     * Get cell background.
     *
     * @return string
     */
    public function getFillColor()
    {
        return $this->_fillColor;
    }

    /**
     * Get is bold text.
     *
     * @return bool
     */
    public function isBold()
    {
        return $this->_bold;
    }

    /**
     * Get horizontal alignment.
     *
     * @return string
     */
    public function getHAlignment()
    {
        return $this->_hAlignment;
    }

    /**
     * Get vertical alignment.
     *
     * @return string
     */
    public function getVAlignment()
    {
        return $this->_vAlignment;
    }

    /**
     * Get is wrap text.
     *
     * @return bool
     */
    public function isWrapText()
    {
        return $this->_isWrapText;
    }

    /**
     * Get cell comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->_comment;
    }

    /**
     * Merge columns.
     *
     * @return int
     */
    public function getMergeColumns()
    {
        return $this->_mergeColumns;
    }

    /**
     * Merge rows.
     *
     * @return int
     */
    public function getMergeRows()
    {
        return $this->_mergeRows;
    }

    /**
     * Get border on the top of all cells on the page.
     *
     * @return string
     */
    public function getAllBorderTop()
    {
        return $this->_allBorderTop;
    }

    /**
     * Get border color on the top of all cells on the page.
     *
     * @return string
     */
    public function getAllBorderTopColor()
    {
        return $this->_allBorderTopColor;
    }

    /**
     * Get border color on the bottom of all cells on the page.
     *
     * @return string
     */
    public function getAllBorderBottomColor()
    {
        return $this->_allBorderBottomColor;
    }

    /**
     * Get border color on the left of all cells on the page.
     *
     * @return string
     */
    public function getAllBorderLeftColor()
    {
        return $this->_allBorderLeftColor;
    }

    /**
     * Get border color on the right of all cells on the page.
     *
     * @return string
     */
    public function getAllBorderRightColor()
    {
        return $this->_allBorderRightColor;
    }

    /**
     * Get border color on top of the cell.
     *
     * @return string
     */
    public function getBorderTopColor()
    {
        return $this->_borderTopColor;
    }

    /**
     * Get border color on bottom of the cell.
     *
     * @return string
     */
    public function getBorderBottomColor()
    {
        return $this->_borderBottomColor;
    }

    /**
     * Get border color on left of the cell.
     *
     * @return string
     */
    public function getBorderLeftColor()
    {
        return $this->_borderLeftColor;
    }

    /**
     * Get border color on right of the cell.
     *
     * @return string
     */
    public function getBorderRightColor()
    {
        return $this->_borderRightColor;
    }

    /**
     * Get border on the bottom of all cells on the page.
     *
     * @return string
     */
    public function getAllBorderBottom()
    {
        return $this->_allBorderBottom;
    }

    /**
     * Get border on the left of all cells on the page.
     *
     * @return string
     */
    public function getAllBorderLeft()
    {
        return $this->_allBorderLeft;
    }

    /**
     * Get border on the right of all cells on the page.
     *
     * @return string
     */
    public function getAllBorderRight()
    {
        return $this->_allBorderRight;
    }

    /**
     * Get border on top of the cell.
     *
     * @return string
     */
    public function getBorderTop()
    {
        return $this->_borderTop;
    }

    /**
     * Get border on bottom of the cell.
     *
     * @return string
     */
    public function getBorderBottom()
    {
        return $this->_borderBottom;
    }

    /**
     * Get border on left of the cell.
     *
     * @return string
     */
    public function getBorderLeft()
    {
        return $this->_borderLeft;
    }

    /**
     * Get border on right of the cell.
     *
     * @return string
     */
    public function getBorderRight()
    {
        return $this->_borderRight;
    }

    /**
     * Get font size.
     *
     * @return int
     */
    public function getFontSize()
    {
        return $this->_fontSize;
    }

    /**
     * Get style from array.
     *
     * @return array
     */
    public function getStyleArray()
    {
        return $this->_styleArray;
    }

    /**
     * Get column width.
     *
     * @return int
     */
    public function getColumnWidth()
    {
        return $this->_columnWidth;
    }

    /**
     * Get row height.
     *
     * @return int
     */
    public function getRowHeight()
    {
        return $this->_rowHeight;
    }
}

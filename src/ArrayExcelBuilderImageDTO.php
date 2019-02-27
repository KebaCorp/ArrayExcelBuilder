<?php
/**
 * Created by Abek Narynov.
 * Date: 2019-02-27
 * @link https://github.com/KebaCorp
 * @copyright Copyright (c) 2018 KebaCorp
 */

namespace KebaCorp\ArrayExcelBuilder;

use PhpOffice\PhpSpreadsheet\Cell\HyperLink;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing\Shadow;

/**
 * Class ArrayExcelBuilderImageDTO.
 *
 * DTO for image data.
 *
 * @package KebaCorp\ArrayExcelBuilder
 */
class ArrayExcelBuilderImageDTO
{
    /**
     * Image path.
     *
     * @var string
     */
    private $_path = '';

    /**
     * Image name.
     *
     * @var string
     */
    private $_name = '';

    /**
     * Image description.
     *
     * @var string
     */
    private $_description = '';

    /**
     * Image X offset.
     *
     * @var int
     */
    private $_offsetX = 0;

    /**
     * Image Y offset.
     *
     * @var int
     */
    private $_offsetY = 0;

    /**
     * Image width.
     *
     * @var int
     */
    private $_width = 20;

    /**
     * Image height.
     *
     * @var int
     */
    private $_height = 20;

    /**
     * Resize image proportional.
     *
     * @var bool
     */
    private $_resizeProportional = true;

    /**
     * Image rotation.
     *
     * @var int
     */
    private $_rotation = 0;

    /**
     * Image Shadow.
     *
     * @var Shadow
     */
    private $_shadow;

    /**
     * Image HyperLink.
     *
     * @var HyperLink
     */
    private $_hyperlink;

    /**
     * Set data from array or string.
     *
     * @param $imageData
     * @return bool: true - if the data has been changed, false - if the data has not been changed
     */
    public function setData($imageData)
    {
        $isChanged = false;

        // If the data is a string, then sets a path to the image
        if (is_string($imageData) && $imageData) {
            $this->_path = $imageData;
            return true;
        }

        // If image data is not array, then returns false
        if (!is_array($imageData)) {
            return false;
        }

        // Set path
        if (isset($imageData['path'])) {
            $this->_path = (string)$imageData['path'];
            $isChanged = true;
        }

        // Set name
        if (isset($imageData['name'])) {
            $this->_name = (string)$imageData['name'];
            $isChanged = true;
        }

        // Set description
        if (isset($imageData['description'])) {
            $this->_description = (string)$imageData['description'];
            $isChanged = true;
        }

        // Set X offset
        if (isset($imageData['offsetX'])) {
            $this->_offsetX = (int)$imageData['offsetX'];
            $isChanged = true;
        }

        // Set Y offset
        if (isset($imageData['offsetY'])) {
            $this->_offsetY = (int)$imageData['offsetY'];
            $isChanged = true;
        }

        // Set width
        if (isset($imageData['width'])) {
            $this->_width = (int)$imageData['width'];
            $isChanged = true;
        }

        // Set height
        if (isset($imageData['height'])) {
            $this->_height = (int)$imageData['height'];
            $isChanged = true;
        }

        // Set is resize proportional
        if (isset($imageData['resizeProportional'])) {
            $this->_resizeProportional = (bool)$imageData['resizeProportional'];
            $isChanged = true;
        }

        // Set rotation
        if (isset($imageData['rotation'])) {
            $this->_rotation = (int)$imageData['rotation'];
            $isChanged = true;
        }

        // ToDo: Set image shadow.

        // Set hyperlink
        if (isset($imageData['hyperlink'])) {
            $hyperlink = new HyperLink();
            $hyperlinkChanged = false;

            if (is_string($imageData['hyperlink'])) {
                // Sets HyperLink's url
                $hyperlink->setUrl($imageData['hyperlink']);
                $hyperlinkChanged = true;
                $isChanged = true;
            } else if (is_array($imageData['hyperlink'])) {
                $hyperlink = $imageData['hyperlink'];

                // Sets HyperLink's url
                if (isset($hyperlink['url'])) {
                    $hyperlink->setUrl((string)$hyperlink['url']);
                    $hyperlinkChanged = true;
                    $isChanged = true;
                }

                // Sets HyperLink's tooltip
                if (isset($hyperlink['tooltip'])) {
                    $hyperlink->setTooltip((string)$hyperlink['tooltip']);
                    $hyperlinkChanged = true;
                    $isChanged = true;
                }
            }

            $this->_hyperlink = $hyperlinkChanged ? $hyperlink : null;
        }

        return $isChanged;
    }

    /**
     * Get image path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->_path;
    }

    /**
     * Get image name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Get image description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Get X offset image.
     *
     * @return int
     */
    public function getOffsetX()
    {
        return $this->_offsetX;
    }

    /**
     * Get Y offset path.
     *
     * @return int
     */
    public function getOffsetY()
    {
        return $this->_offsetY;
    }

    /**
     * Get image width.
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->_width;
    }

    /**
     * Get image height.
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Get image is resize proportional.
     *
     * @return bool
     */
    public function isResizeProportional()
    {
        return $this->_resizeProportional;
    }

    /**
     * Get image rotation.
     *
     * @return int
     */
    public function getRotation()
    {
        return $this->_rotation;
    }

    /**
     * Get image shadow.
     *
     * @return Shadow
     */
    public function getShadow()
    {
        return $this->_shadow;
    }

    /**
     * Get image hyper link.
     *
     * @return HyperLink
     */
    public function getHyperlink()
    {
        return $this->_hyperlink;
    }
}

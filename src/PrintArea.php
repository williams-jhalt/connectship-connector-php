<?php

namespace Williams\ConnectShip;

class PrintArea
{

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var int $horizontalOffset
     */
    protected $horizontalOffset = null;

    /**
     * @var int $verticalOffset
     */
    protected $verticalOffset = null;

    /**
     * @var int $orientation
     */
    protected $orientation = null;

    /**
     * @var boolean $frontFace
     */
    protected $frontFace = null;

    /**
     * @var boolean $backFace
     */
    protected $backFace = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \Williams\ConnectShip\PrintArea
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \Williams\ConnectShip\PrintArea
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return int
     */
    public function getHorizontalOffset()
    {
      return $this->horizontalOffset;
    }

    /**
     * @param int $horizontalOffset
     * @return \Williams\ConnectShip\PrintArea
     */
    public function setHorizontalOffset($horizontalOffset)
    {
      $this->horizontalOffset = $horizontalOffset;
      return $this;
    }

    /**
     * @return int
     */
    public function getVerticalOffset()
    {
      return $this->verticalOffset;
    }

    /**
     * @param int $verticalOffset
     * @return \Williams\ConnectShip\PrintArea
     */
    public function setVerticalOffset($verticalOffset)
    {
      $this->verticalOffset = $verticalOffset;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrientation()
    {
      return $this->orientation;
    }

    /**
     * @param int $orientation
     * @return \Williams\ConnectShip\PrintArea
     */
    public function setOrientation($orientation)
    {
      $this->orientation = $orientation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFrontFace()
    {
      return $this->frontFace;
    }

    /**
     * @param boolean $frontFace
     * @return \Williams\ConnectShip\PrintArea
     */
    public function setFrontFace($frontFace)
    {
      $this->frontFace = $frontFace;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBackFace()
    {
      return $this->backFace;
    }

    /**
     * @param boolean $backFace
     * @return \Williams\ConnectShip\PrintArea
     */
    public function setBackFace($backFace)
    {
      $this->backFace = $backFace;
      return $this;
    }

}

<?php

namespace Williams\ConnectShip;

class Dimensions
{

    /**
     * @var float $length
     */
    protected $length = null;

    /**
     * @var float $width
     */
    protected $width = null;

    /**
     * @var float $height
     */
    protected $height = null;

    /**
     * @var unit $unit
     */
    protected $unit = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->length;
    }

    /**
     * @param float $length
     * @return \Williams\ConnectShip\Dimensions
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param float $width
     * @return \Williams\ConnectShip\Dimensions
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param float $height
     * @return \Williams\ConnectShip\Dimensions
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return unit
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param unit $unit
     * @return \Williams\ConnectShip\Dimensions
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Williams\ConnectShip\Dimensions
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}

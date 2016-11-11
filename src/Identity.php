<?php

namespace Williams\ConnectShip;

class Identity
{

    /**
     * @var string $symbol
     */
    protected $symbol = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $symbol
     */
    public function __construct($symbol)
    {
      $this->symbol = $symbol;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
      return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return \Williams\ConnectShip\Identity
     */
    public function setSymbol($symbol)
    {
      $this->symbol = $symbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Williams\ConnectShip\Identity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}

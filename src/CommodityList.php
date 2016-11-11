<?php

namespace Williams\ConnectShip;

class CommodityList
{

    /**
     * @var Commodity[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Commodity[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param Commodity[] $item
     * @return \Williams\ConnectShip\CommodityList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}

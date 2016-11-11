<?php

namespace Williams\ConnectShip;

class HazmatItemList
{

    /**
     * @var HazmatItem[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HazmatItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param HazmatItem[] $item
     * @return \Williams\ConnectShip\HazmatItemList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}

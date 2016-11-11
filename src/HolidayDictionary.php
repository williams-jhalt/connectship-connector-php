<?php

namespace Williams\ConnectShip;

class HolidayDictionary
{

    /**
     * @var HolidayItem[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HolidayItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param HolidayItem[] $item
     * @return \Williams\ConnectShip\HolidayDictionary
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}

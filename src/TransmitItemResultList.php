<?php

namespace Williams\ConnectShip;

class TransmitItemResultList
{

    /**
     * @var TransmitItemResult[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TransmitItemResult[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param TransmitItemResult[] $item
     * @return \Williams\ConnectShip\TransmitItemResultList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}

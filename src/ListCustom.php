<?php

namespace Williams\ConnectShip;

class ListCustom extends CollectionBase
{

    /**
     * @var anyType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anyType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param anyType[] $item
     * @return \Williams\ConnectShip\List
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}

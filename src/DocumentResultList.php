<?php

namespace Williams\ConnectShip;

class DocumentResultList
{

    /**
     * @var DocumentResult[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DocumentResult[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param DocumentResult[] $item
     * @return \Williams\ConnectShip\DocumentResultList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}

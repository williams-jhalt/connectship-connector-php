<?php

namespace Williams\ConnectShip;

class CandidateAddressList
{

    /**
     * @var CandidateAddress[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CandidateAddress[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param CandidateAddress[] $item
     * @return \Williams\ConnectShip\CandidateAddressList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}

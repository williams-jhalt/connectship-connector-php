<?php

namespace Williams\ConnectShip;

class PrintAreaList
{

    /**
     * @var PrintArea[] $area
     */
    protected $area = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PrintArea[]
     */
    public function getArea()
    {
      return $this->area;
    }

    /**
     * @param PrintArea[] $area
     * @return \Williams\ConnectShip\PrintAreaList
     */
    public function setArea(array $area = null)
    {
      $this->area = $area;
      return $this;
    }

}

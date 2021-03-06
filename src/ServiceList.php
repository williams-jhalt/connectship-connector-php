<?php

namespace Williams\ConnectShip;

class ServiceList
{

    /**
     * @var string[] $service
     */
    protected $service = null;

    /**
     * @param string[] $service
     */
    public function __construct(array $service)
    {
      $this->service = $service;
    }

    /**
     * @return string[]
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param string[] $service
     * @return \Williams\ConnectShip\ServiceList
     */
    public function setService(array $service)
    {
      $this->service = $service;
      return $this;
    }

}

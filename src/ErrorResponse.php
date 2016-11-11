<?php

namespace Williams\ConnectShip;

class ErrorResponse
{

    /**
     * @var Result $result
     */
    protected $result = null;

    /**
     * @param Result $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return Result
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param Result $result
     * @return \Williams\ConnectShip\ErrorResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}

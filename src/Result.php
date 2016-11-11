<?php

namespace Williams\ConnectShip;

class Result
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var anyType $resultData
     */
    protected $resultData = null;

    /**
     * @param int $code
     * @param string $message
     * @param anyType $resultData
     */
    public function __construct($code, $message, $resultData)
    {
      $this->code = $code;
      $this->message = $message;
      $this->resultData = $resultData;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return \Williams\ConnectShip\Result
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Williams\ConnectShip\Result
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getResultData()
    {
      return $this->resultData;
    }

    /**
     * @param anyType $resultData
     * @return \Williams\ConnectShip\Result
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

}

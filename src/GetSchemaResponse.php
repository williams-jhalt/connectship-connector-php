<?php

namespace Williams\ConnectShip;

class GetSchemaResponse
{

    /**
     * @var Result $result
     */
    protected $result = null;

    /**
     * @var string $asyncCorrelationData
     */
    protected $asyncCorrelationData = null;

    /**
     * @param Result $result
     * @param string $asyncCorrelationData
     */
    public function __construct($result, $asyncCorrelationData)
    {
      $this->result = $result;
      $this->asyncCorrelationData = $asyncCorrelationData;
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
     * @return \Williams\ConnectShip\GetSchemaResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsyncCorrelationData()
    {
      return $this->asyncCorrelationData;
    }

    /**
     * @param string $asyncCorrelationData
     * @return \Williams\ConnectShip\GetSchemaResponse
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}

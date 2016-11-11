<?php

namespace Williams\ConnectShip;

class ModifyPackageResult
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
     * @var int $package
     */
    protected $package = null;

    /**
     * @param int $code
     * @param string $message
     * @param int $package
     */
    public function __construct($code, $message, $package)
    {
      $this->code = $code;
      $this->message = $message;
      $this->package = $package;
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
     * @return \Williams\ConnectShip\ModifyPackageResult
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
     * @return \Williams\ConnectShip\ModifyPackageResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackage()
    {
      return $this->package;
    }

    /**
     * @param int $package
     * @return \Williams\ConnectShip\ModifyPackageResult
     */
    public function setPackage($package)
    {
      $this->package = $package;
      return $this;
    }

}

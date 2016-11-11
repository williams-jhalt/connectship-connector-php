<?php

namespace Williams\ConnectShip;

class PrintXmlRequest
{

    /**
     * @var anyType $document
     */
    protected $document = null;

    /**
     * @var string $output
     */
    protected $output = null;

    /**
     * @var string $destination
     */
    protected $destination = null;

    /**
     * @var StockDescriptor $stock
     */
    protected $stock = null;

    /**
     * @var Dictionary $outputOptions
     */
    protected $outputOptions = null;

    /**
     * @var string $preProcess
     */
    protected $preProcess = null;

    /**
     * @var string $postProcess
     */
    protected $postProcess = null;

    /**
     * @var language $locale
     */
    protected $locale = null;

    /**
     * @var string $asyncCorrelationData
     */
    protected $asyncCorrelationData = null;

    /**
     * @param anyType $document
     * @param string $output
     * @param StockDescriptor $stock
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param string $asyncCorrelationData
     */
    public function __construct($document, $output, $stock, $preProcess, $postProcess, $locale, $asyncCorrelationData)
    {
      $this->document = $document;
      $this->output = $output;
      $this->stock = $stock;
      $this->preProcess = $preProcess;
      $this->postProcess = $postProcess;
      $this->locale = $locale;
      $this->asyncCorrelationData = $asyncCorrelationData;
    }

    /**
     * @return anyType
     */
    public function getDocument()
    {
      return $this->document;
    }

    /**
     * @param anyType $document
     * @return \Williams\ConnectShip\PrintXmlRequest
     */
    public function setDocument($document)
    {
      $this->document = $document;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
      return $this->output;
    }

    /**
     * @param string $output
     * @return \Williams\ConnectShip\PrintXmlRequest
     */
    public function setOutput($output)
    {
      $this->output = $output;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
      return $this->destination;
    }

    /**
     * @param string $destination
     * @return \Williams\ConnectShip\PrintXmlRequest
     */
    public function setDestination($destination)
    {
      $this->destination = $destination;
      return $this;
    }

    /**
     * @return StockDescriptor
     */
    public function getStock()
    {
      return $this->stock;
    }

    /**
     * @param StockDescriptor $stock
     * @return \Williams\ConnectShip\PrintXmlRequest
     */
    public function setStock($stock)
    {
      $this->stock = $stock;
      return $this;
    }

    /**
     * @return Dictionary
     */
    public function getOutputOptions()
    {
      return $this->outputOptions;
    }

    /**
     * @param Dictionary $outputOptions
     * @return \Williams\ConnectShip\PrintXmlRequest
     */
    public function setOutputOptions($outputOptions)
    {
      $this->outputOptions = $outputOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreProcess()
    {
      return $this->preProcess;
    }

    /**
     * @param string $preProcess
     * @return \Williams\ConnectShip\PrintXmlRequest
     */
    public function setPreProcess($preProcess)
    {
      $this->preProcess = $preProcess;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostProcess()
    {
      return $this->postProcess;
    }

    /**
     * @param string $postProcess
     * @return \Williams\ConnectShip\PrintXmlRequest
     */
    public function setPostProcess($postProcess)
    {
      $this->postProcess = $postProcess;
      return $this;
    }

    /**
     * @return language
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param language $locale
     * @return \Williams\ConnectShip\PrintXmlRequest
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
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
     * @return \Williams\ConnectShip\PrintXmlRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}

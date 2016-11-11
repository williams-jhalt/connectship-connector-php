<?php

namespace Williams\ConnectShip;

class DocumentOutput
{

    /**
     * @var anyType $xmlOutput
     */
    protected $xmlOutput = null;

    /**
     * @var base64Binary $binaryOutput
     */
    protected $binaryOutput = null;

    /**
     * @var string $outputFile
     */
    protected $outputFile = null;

    /**
     * @var ImageItemList $imageList
     */
    protected $imageList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anyType
     */
    public function getXmlOutput()
    {
      return $this->xmlOutput;
    }

    /**
     * @param anyType $xmlOutput
     * @return \Williams\ConnectShip\DocumentOutput
     */
    public function setXmlOutput($xmlOutput)
    {
      $this->xmlOutput = $xmlOutput;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBinaryOutput()
    {
      return $this->binaryOutput;
    }

    /**
     * @param base64Binary $binaryOutput
     * @return \Williams\ConnectShip\DocumentOutput
     */
    public function setBinaryOutput($binaryOutput)
    {
      $this->binaryOutput = $binaryOutput;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutputFile()
    {
      return $this->outputFile;
    }

    /**
     * @param string $outputFile
     * @return \Williams\ConnectShip\DocumentOutput
     */
    public function setOutputFile($outputFile)
    {
      $this->outputFile = $outputFile;
      return $this;
    }

    /**
     * @return ImageItemList
     */
    public function getImageList()
    {
      return $this->imageList;
    }

    /**
     * @param ImageItemList $imageList
     * @return \Williams\ConnectShip\DocumentOutput
     */
    public function setImageList($imageList)
    {
      $this->imageList = $imageList;
      return $this;
    }

}

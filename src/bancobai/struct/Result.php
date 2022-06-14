<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for result StructType
 * @subpackage Structs
 */
class Result extends AbstractStructBase
{
    /**
     * The resultInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\ResultInfo|null
     */
    protected ?\BancoBai\Client\Struct\ResultInfo $resultInfo = null;
    /**
     * Constructor method for result
     * @uses Result::setResultInfo()
     * @param \BancoBai\Client\Struct\ResultInfo $resultInfo
     */
    public function __construct(?\BancoBai\Client\Struct\ResultInfo $resultInfo = null)
    {
        $this
            ->setResultInfo($resultInfo);
    }
    /**
     * Get resultInfo value
     * @return \BancoBai\Client\Struct\ResultInfo|null
     */
    public function getResultInfo(): ?\BancoBai\Client\Struct\ResultInfo
    {
        return $this->resultInfo;
    }
    /**
     * Set resultInfo value
     * @param \BancoBai\Client\Struct\ResultInfo $resultInfo
     * @return \BancoBai\Client\Struct\Result
     */
    public function setResultInfo(?\BancoBai\Client\Struct\ResultInfo $resultInfo = null): self
    {
        $this->resultInfo = $resultInfo;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateQRCode StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateQRCode
 * @subpackage Structs
 */
class GenerateQRCode extends AbstractStructBase
{
    /**
     * The externalReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $externalReference = null;
    /**
     * The acceptancePointId
     * @var int|null
     */
    protected ?int $acceptancePointId = null;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $width = null;
    /**
     * The height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $height = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The apiKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $apiKey = null;
    /**
     * Constructor method for generateQRCode
     * @uses GenerateQRCode::setExternalReference()
     * @uses GenerateQRCode::setAcceptancePointId()
     * @uses GenerateQRCode::setWidth()
     * @uses GenerateQRCode::setHeight()
     * @uses GenerateQRCode::setAmount()
     * @uses GenerateQRCode::setCurrency()
     * @uses GenerateQRCode::setApiKey()
     * @param string $externalReference
     * @param int $acceptancePointId
     * @param int $width
     * @param int $height
     * @param float $amount
     * @param string $currency
     * @param string $apiKey
     */
    public function __construct(?string $externalReference = null, ?int $acceptancePointId = null, ?int $width = null, ?int $height = null, ?float $amount = null, ?string $currency = null, ?string $apiKey = null)
    {
        $this
            ->setExternalReference($externalReference)
            ->setAcceptancePointId($acceptancePointId)
            ->setWidth($width)
            ->setHeight($height)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setApiKey($apiKey);
    }
    /**
     * Get externalReference value
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }
    /**
     * Set externalReference value
     * @param string $externalReference
     * @return \StructType\GenerateQRCode
     */
    public function setExternalReference(?string $externalReference = null): self
    {
        // validation for constraint: string
        if (!is_null($externalReference) && !is_string($externalReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalReference, true), gettype($externalReference)), __LINE__);
        }
        $this->externalReference = $externalReference;
        
        return $this;
    }
    /**
     * Get acceptancePointId value
     * @return int|null
     */
    public function getAcceptancePointId(): ?int
    {
        return $this->acceptancePointId;
    }
    /**
     * Set acceptancePointId value
     * @param int $acceptancePointId
     * @return \StructType\GenerateQRCode
     */
    public function setAcceptancePointId(?int $acceptancePointId = null): self
    {
        // validation for constraint: int
        if (!is_null($acceptancePointId) && !(is_int($acceptancePointId) || ctype_digit($acceptancePointId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($acceptancePointId, true), gettype($acceptancePointId)), __LINE__);
        }
        $this->acceptancePointId = $acceptancePointId;
        
        return $this;
    }
    /**
     * Get width value
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $width
     * @return \StructType\GenerateQRCode
     */
    public function setWidth(?int $width = null): self
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        
        return $this;
    }
    /**
     * Get height value
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $height
     * @return \StructType\GenerateQRCode
     */
    public function setHeight(?int $height = null): self
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \StructType\GenerateQRCode
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \StructType\GenerateQRCode
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get apiKey value
     * @return string|null
     */
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }
    /**
     * Set apiKey value
     * @param string $apiKey
     * @return \StructType\GenerateQRCode
     */
    public function setApiKey(?string $apiKey = null): self
    {
        // validation for constraint: string
        if (!is_null($apiKey) && !is_string($apiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiKey, true), gettype($apiKey)), __LINE__);
        }
        $this->apiKey = $apiKey;
        
        return $this;
    }
}

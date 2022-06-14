<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customerOperationStatus StructType
 * @subpackage Structs
 */
class CustomerOperationStatus extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The languageCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $languageCode = null;
    /**
     * Constructor method for customerOperationStatus
     * @uses CustomerOperationStatus::setDescription()
     * @uses CustomerOperationStatus::setId()
     * @uses CustomerOperationStatus::setLanguageCode()
     * @param string $description
     * @param int $id
     * @param string $languageCode
     */
    public function __construct(?string $description = null, ?int $id = null, ?string $languageCode = null)
    {
        $this
            ->setDescription($description)
            ->setId($id)
            ->setLanguageCode($languageCode);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\CustomerOperationStatus
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\CustomerOperationStatus
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get languageCode value
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
    /**
     * Set languageCode value
     * @param string $languageCode
     * @return \StructType\CustomerOperationStatus
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        $this->languageCode = $languageCode;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for channelOperation StructType
 * @subpackage Structs
 */
class ChannelOperation extends AbstractStructBase
{
    /**
     * The canBeFavorite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $canBeFavorite = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The label
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $label = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for channelOperation
     * @uses ChannelOperation::setCanBeFavorite()
     * @uses ChannelOperation::setId()
     * @uses ChannelOperation::setLabel()
     * @uses ChannelOperation::setName()
     * @param bool $canBeFavorite
     * @param int $id
     * @param string $label
     * @param string $name
     */
    public function __construct(?bool $canBeFavorite = null, ?int $id = null, ?string $label = null, ?string $name = null)
    {
        $this
            ->setCanBeFavorite($canBeFavorite)
            ->setId($id)
            ->setLabel($label)
            ->setName($name);
    }
    /**
     * Get canBeFavorite value
     * @return bool|null
     */
    public function getCanBeFavorite(): ?bool
    {
        return $this->canBeFavorite;
    }
    /**
     * Set canBeFavorite value
     * @param bool $canBeFavorite
     * @return \StructType\ChannelOperation
     */
    public function setCanBeFavorite(?bool $canBeFavorite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($canBeFavorite) && !is_bool($canBeFavorite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canBeFavorite, true), gettype($canBeFavorite)), __LINE__);
        }
        $this->canBeFavorite = $canBeFavorite;
        
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
     * @return \StructType\ChannelOperation
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
     * Get label value
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \StructType\ChannelOperation
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\ChannelOperation
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
}

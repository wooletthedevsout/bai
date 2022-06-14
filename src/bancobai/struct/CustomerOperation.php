<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customerOperation StructType
 * @subpackage Structs
 */
class CustomerOperation extends Result
{
    /**
     * The channel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\Channel|null
     */
    protected ?\BancoBai\Client\Struct\Channel $channel = null;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The lastChangeDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastChangeDate = null;
    /**
     * The movement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\BankMovement|null
     */
    protected ?\BancoBai\Client\Struct\BankMovement $movement = null;
    /**
     * The movementDocumentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $movementDocumentNumber = null;
    /**
     * The operationType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\ChannelOperation|null
     */
    protected ?\BancoBai\Client\Struct\ChannelOperation $operationType = null;
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \BancoBai\Client\Struct\CustomerOperationParameter[]
     */
    protected ?array $parameters = null;
    /**
     * The sessionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $sessionId = null;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\CustomerOperationStatus|null
     */
    protected ?\BancoBai\Client\Struct\CustomerOperationStatus $status = null;
    /**
     * Constructor method for customerOperation
     * @uses CustomerOperation::setChannel()
     * @uses CustomerOperation::setCustomerId()
     * @uses CustomerOperation::setDescription()
     * @uses CustomerOperation::setEndDate()
     * @uses CustomerOperation::setId()
     * @uses CustomerOperation::setLastChangeDate()
     * @uses CustomerOperation::setMovement()
     * @uses CustomerOperation::setMovementDocumentNumber()
     * @uses CustomerOperation::setOperationType()
     * @uses CustomerOperation::setParameters()
     * @uses CustomerOperation::setSessionId()
     * @uses CustomerOperation::setStartDate()
     * @uses CustomerOperation::setStatus()
     * @param \BancoBai\Client\Struct\Channel $channel
     * @param int $customerId
     * @param string $description
     * @param string $endDate
     * @param int $id
     * @param string $lastChangeDate
     * @param \BancoBai\Client\Struct\BankMovement $movement
     * @param string $movementDocumentNumber
     * @param \BancoBai\Client\Struct\ChannelOperation $operationType
     * @param \BancoBai\Client\Struct\CustomerOperationParameter[] $parameters
     * @param int $sessionId
     * @param string $startDate
     * @param \BancoBai\Client\Struct\CustomerOperationStatus $status
     */
    public function __construct(?\BancoBai\Client\Struct\Channel $channel = null, ?int $customerId = null, ?string $description = null, ?string $endDate = null, ?int $id = null, ?string $lastChangeDate = null, ?\BancoBai\Client\Struct\BankMovement $movement = null, ?string $movementDocumentNumber = null, ?\BancoBai\Client\Struct\ChannelOperation $operationType = null, ?array $parameters = null, ?int $sessionId = null, ?string $startDate = null, ?\BancoBai\Client\Struct\CustomerOperationStatus $status = null)
    {
        $this
            ->setChannel($channel)
            ->setCustomerId($customerId)
            ->setDescription($description)
            ->setEndDate($endDate)
            ->setId($id)
            ->setLastChangeDate($lastChangeDate)
            ->setMovement($movement)
            ->setMovementDocumentNumber($movementDocumentNumber)
            ->setOperationType($operationType)
            ->setParameters($parameters)
            ->setSessionId($sessionId)
            ->setStartDate($startDate)
            ->setStatus($status);
    }
    /**
     * Get channel value
     * @return \BancoBai\Client\Struct\Channel|null
     */
    public function getChannel(): ?\BancoBai\Client\Struct\Channel
    {
        return $this->channel;
    }
    /**
     * Set channel value
     * @param \BancoBai\Client\Struct\Channel $channel
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setChannel(?\BancoBai\Client\Struct\Channel $channel = null): self
    {
        $this->channel = $channel;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
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
     * @return \BancoBai\Client\Struct\CustomerOperation
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
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
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
     * @return \BancoBai\Client\Struct\CustomerOperation
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
     * Get lastChangeDate value
     * @return string|null
     */
    public function getLastChangeDate(): ?string
    {
        return $this->lastChangeDate;
    }
    /**
     * Set lastChangeDate value
     * @param string $lastChangeDate
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setLastChangeDate(?string $lastChangeDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastChangeDate) && !is_string($lastChangeDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastChangeDate, true), gettype($lastChangeDate)), __LINE__);
        }
        $this->lastChangeDate = $lastChangeDate;
        
        return $this;
    }
    /**
     * Get movement value
     * @return \BancoBai\Client\Struct\BankMovement|null
     */
    public function getMovement(): ?\BancoBai\Client\Struct\BankMovement
    {
        return $this->movement;
    }
    /**
     * Set movement value
     * @param \BancoBai\Client\Struct\BankMovement $movement
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setMovement(?\BancoBai\Client\Struct\BankMovement $movement = null): self
    {
        $this->movement = $movement;
        
        return $this;
    }
    /**
     * Get movementDocumentNumber value
     * @return string|null
     */
    public function getMovementDocumentNumber(): ?string
    {
        return $this->movementDocumentNumber;
    }
    /**
     * Set movementDocumentNumber value
     * @param string $movementDocumentNumber
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setMovementDocumentNumber(?string $movementDocumentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($movementDocumentNumber) && !is_string($movementDocumentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($movementDocumentNumber, true), gettype($movementDocumentNumber)), __LINE__);
        }
        $this->movementDocumentNumber = $movementDocumentNumber;
        
        return $this;
    }
    /**
     * Get operationType value
     * @return \BancoBai\Client\Struct\ChannelOperation|null
     */
    public function getOperationType(): ?\BancoBai\Client\Struct\ChannelOperation
    {
        return $this->operationType;
    }
    /**
     * Set operationType value
     * @param \BancoBai\Client\Struct\ChannelOperation $operationType
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setOperationType(?\BancoBai\Client\Struct\ChannelOperation $operationType = null): self
    {
        $this->operationType = $operationType;
        
        return $this;
    }
    /**
     * Get parameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \BancoBai\Client\Struct\CustomerOperationParameter[]
     */
    public function getParameters(): ?array
    {
        return isset($this->parameters) ? $this->parameters : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParameters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParameters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParametersForArrayConstraintsFromSetParameters(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerOperationParametersItem) {
            // validation for constraint: itemType
            if (!$customerOperationParametersItem instanceof \BancoBai\Client\Struct\CustomerOperationParameter) {
                $invalidValues[] = is_object($customerOperationParametersItem) ? get_class($customerOperationParametersItem) : sprintf('%s(%s)', gettype($customerOperationParametersItem), var_export($customerOperationParametersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The parameters property can only contain items of type \BancoBai\Client\Struct\CustomerOperationParameter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set parameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \BancoBai\Client\Struct\CustomerOperationParameter[] $parameters
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setParameters(?array $parameters = null): self
    {
        // validation for constraint: array
        if ('' !== ($parametersArrayErrorMessage = self::validateParametersForArrayConstraintsFromSetParameters($parameters))) {
            throw new InvalidArgumentException($parametersArrayErrorMessage, __LINE__);
        }
        if (is_null($parameters) || (is_array($parameters) && empty($parameters))) {
            unset($this->parameters);
        } else {
            $this->parameters = $parameters;
        }
        
        return $this;
    }
    /**
     * Add item to parameters value
     * @throws InvalidArgumentException
     * @param \BancoBai\Client\Struct\CustomerOperationParameter $item
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function addToParameters(\BancoBai\Client\Struct\CustomerOperationParameter $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BancoBai\Client\Struct\CustomerOperationParameter) {
            throw new InvalidArgumentException(sprintf('The parameters property can only contain items of type \BancoBai\Client\Struct\CustomerOperationParameter, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parameters[] = $item;
        
        return $this;
    }
    /**
     * Get sessionId value
     * @return int|null
     */
    public function getSessionId(): ?int
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param int $sessionId
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setSessionId(?int $sessionId = null): self
    {
        // validation for constraint: int
        if (!is_null($sessionId) && !(is_int($sessionId) || ctype_digit($sessionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get status value
     * @return \BancoBai\Client\Struct\CustomerOperationStatus|null
     */
    public function getStatus(): ?\BancoBai\Client\Struct\CustomerOperationStatus
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \BancoBai\Client\Struct\CustomerOperationStatus $status
     * @return \BancoBai\Client\Struct\CustomerOperation
     */
    public function setStatus(?\BancoBai\Client\Struct\CustomerOperationStatus $status = null): self
    {
        $this->status = $status;
        
        return $this;
    }
}

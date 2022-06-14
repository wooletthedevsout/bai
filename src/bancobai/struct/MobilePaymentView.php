<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mobilePaymentView StructType
 * @subpackage Structs
 */
class MobilePaymentView extends AbstractStructBase
{
    /**
     * The acceptancePointId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $acceptancePointId = null;
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $accountId = null;
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The channel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\Channel|null
     */
    protected ?\BancoBai\Client\Struct\Channel $channel = null;
    /**
     * The creationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\CustomerOperation|null
     */
    protected ?\BancoBai\Client\Struct\CustomerOperation $customerOperation = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The favoritable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $favoritable = null;
    /**
     * The favorite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $favorite = null;
    /**
     * The flow
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flow = null;
    /**
     * The hasReceipt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $hasReceipt = null;
    /**
     * The id
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
     * The maxReversible
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $maxReversible = null;
    /**
     * The merchant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\MobilePaymentsMerchantView|null
     */
    protected ?\BancoBai\Client\Struct\MobilePaymentsMerchantView $merchant = null;
    /**
     * The operationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $operationId = null;
    /**
     * The paymentTypeDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentTypeDescription = null;
    /**
     * The reversible
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $reversible = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The statusDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $statusDescription = null;
    /**
     * The statusId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $statusId = null;
    /**
     * The totalReversed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $totalReversed = null;
    /**
     * Constructor method for mobilePaymentView
     * @uses MobilePaymentView::setAcceptancePointId()
     * @uses MobilePaymentView::setAccountId()
     * @uses MobilePaymentView::setAccountNumber()
     * @uses MobilePaymentView::setAmount()
     * @uses MobilePaymentView::setChannel()
     * @uses MobilePaymentView::setCreationDate()
     * @uses MobilePaymentView::setCurrency()
     * @uses MobilePaymentView::setCustomerOperation()
     * @uses MobilePaymentView::setDescription()
     * @uses MobilePaymentView::setFavoritable()
     * @uses MobilePaymentView::setFavorite()
     * @uses MobilePaymentView::setFlow()
     * @uses MobilePaymentView::setHasReceipt()
     * @uses MobilePaymentView::setId()
     * @uses MobilePaymentView::setLastChangeDate()
     * @uses MobilePaymentView::setMaxReversible()
     * @uses MobilePaymentView::setMerchant()
     * @uses MobilePaymentView::setOperationId()
     * @uses MobilePaymentView::setPaymentTypeDescription()
     * @uses MobilePaymentView::setReversible()
     * @uses MobilePaymentView::setStatus()
     * @uses MobilePaymentView::setStatusDescription()
     * @uses MobilePaymentView::setStatusId()
     * @uses MobilePaymentView::setTotalReversed()
     * @param int $acceptancePointId
     * @param int $accountId
     * @param string $accountNumber
     * @param float $amount
     * @param \BancoBai\Client\Struct\Channel $channel
     * @param string $creationDate
     * @param string $currency
     * @param \BancoBai\Client\Struct\CustomerOperation $customerOperation
     * @param string $description
     * @param bool $favoritable
     * @param bool $favorite
     * @param string $flow
     * @param bool $hasReceipt
     * @param int $id
     * @param string $lastChangeDate
     * @param float $maxReversible
     * @param \BancoBai\Client\Struct\MobilePaymentsMerchantView $merchant
     * @param int $operationId
     * @param string $paymentTypeDescription
     * @param bool $reversible
     * @param string $status
     * @param string $statusDescription
     * @param int $statusId
     * @param float $totalReversed
     */
    public function __construct(?int $acceptancePointId = null, ?int $accountId = null, ?string $accountNumber = null, ?float $amount = null, ?\BancoBai\Client\Struct\Channel $channel = null, ?string $creationDate = null, ?string $currency = null, ?\BancoBai\Client\Struct\CustomerOperation $customerOperation = null, ?string $description = null, ?bool $favoritable = null, ?bool $favorite = null, ?string $flow = null, ?bool $hasReceipt = null, ?int $id = null, ?string $lastChangeDate = null, ?float $maxReversible = null, ?\BancoBai\Client\Struct\MobilePaymentsMerchantView $merchant = null, ?int $operationId = null, ?string $paymentTypeDescription = null, ?bool $reversible = null, ?string $status = null, ?string $statusDescription = null, ?int $statusId = null, ?float $totalReversed = null)
    {
        $this
            ->setAcceptancePointId($acceptancePointId)
            ->setAccountId($accountId)
            ->setAccountNumber($accountNumber)
            ->setAmount($amount)
            ->setChannel($channel)
            ->setCreationDate($creationDate)
            ->setCurrency($currency)
            ->setCustomerOperation($customerOperation)
            ->setDescription($description)
            ->setFavoritable($favoritable)
            ->setFavorite($favorite)
            ->setFlow($flow)
            ->setHasReceipt($hasReceipt)
            ->setId($id)
            ->setLastChangeDate($lastChangeDate)
            ->setMaxReversible($maxReversible)
            ->setMerchant($merchant)
            ->setOperationId($operationId)
            ->setPaymentTypeDescription($paymentTypeDescription)
            ->setReversible($reversible)
            ->setStatus($status)
            ->setStatusDescription($statusDescription)
            ->setStatusId($statusId)
            ->setTotalReversed($totalReversed);
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
     * @return \BancoBai\Client\Struct\MobilePaymentView
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
     * Get accountId value
     * @return int|null
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param int $accountId
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setAccountId(?int $accountId = null): self
    {
        // validation for constraint: int
        if (!is_null($accountId) && !(is_int($accountId) || ctype_digit($accountId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
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
     * @return \BancoBai\Client\Struct\MobilePaymentView
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
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setChannel(?\BancoBai\Client\Struct\Channel $channel = null): self
    {
        $this->channel = $channel;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \BancoBai\Client\Struct\MobilePaymentView
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
     * Get customerOperation value
     * @return \BancoBai\Client\Struct\CustomerOperation|null
     */
    public function getCustomerOperation(): ?\BancoBai\Client\Struct\CustomerOperation
    {
        return $this->customerOperation;
    }
    /**
     * Set customerOperation value
     * @param \BancoBai\Client\Struct\CustomerOperation $customerOperation
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setCustomerOperation(?\BancoBai\Client\Struct\CustomerOperation $customerOperation = null): self
    {
        $this->customerOperation = $customerOperation;
        
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
     * @return \BancoBai\Client\Struct\MobilePaymentView
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
     * Get favoritable value
     * @return bool|null
     */
    public function getFavoritable(): ?bool
    {
        return $this->favoritable;
    }
    /**
     * Set favoritable value
     * @param bool $favoritable
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setFavoritable(?bool $favoritable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($favoritable) && !is_bool($favoritable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($favoritable, true), gettype($favoritable)), __LINE__);
        }
        $this->favoritable = $favoritable;
        
        return $this;
    }
    /**
     * Get favorite value
     * @return bool|null
     */
    public function getFavorite(): ?bool
    {
        return $this->favorite;
    }
    /**
     * Set favorite value
     * @param bool $favorite
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setFavorite(?bool $favorite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($favorite) && !is_bool($favorite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($favorite, true), gettype($favorite)), __LINE__);
        }
        $this->favorite = $favorite;
        
        return $this;
    }
    /**
     * Get flow value
     * @return string|null
     */
    public function getFlow(): ?string
    {
        return $this->flow;
    }
    /**
     * Set flow value
     * @uses \BancoBai\Client\Enum\MobilePaymentFlow::valueIsValid()
     * @uses \BancoBai\Client\Enum\MobilePaymentFlow::getValidValues()
     * @throws InvalidArgumentException
     * @param string $flow
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setFlow(?string $flow = null): self
    {
        // validation for constraint: enumeration
        if (!\BancoBai\Client\Enum\MobilePaymentFlow::valueIsValid($flow)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \BancoBai\Client\Enum\MobilePaymentFlow', is_array($flow) ? implode(', ', $flow) : var_export($flow, true), implode(', ', \BancoBai\Client\Enum\MobilePaymentFlow::getValidValues())), __LINE__);
        }
        $this->flow = $flow;
        
        return $this;
    }
    /**
     * Get hasReceipt value
     * @return bool|null
     */
    public function getHasReceipt(): ?bool
    {
        return $this->hasReceipt;
    }
    /**
     * Set hasReceipt value
     * @param bool $hasReceipt
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setHasReceipt(?bool $hasReceipt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasReceipt) && !is_bool($hasReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasReceipt, true), gettype($hasReceipt)), __LINE__);
        }
        $this->hasReceipt = $hasReceipt;
        
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
     * @return \BancoBai\Client\Struct\MobilePaymentView
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
     * @return \BancoBai\Client\Struct\MobilePaymentView
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
     * Get maxReversible value
     * @return float|null
     */
    public function getMaxReversible(): ?float
    {
        return $this->maxReversible;
    }
    /**
     * Set maxReversible value
     * @param float $maxReversible
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setMaxReversible(?float $maxReversible = null): self
    {
        // validation for constraint: float
        if (!is_null($maxReversible) && !(is_float($maxReversible) || is_numeric($maxReversible))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxReversible, true), gettype($maxReversible)), __LINE__);
        }
        $this->maxReversible = $maxReversible;
        
        return $this;
    }
    /**
     * Get merchant value
     * @return \BancoBai\Client\Struct\MobilePaymentsMerchantView|null
     */
    public function getMerchant(): ?\BancoBai\Client\Struct\MobilePaymentsMerchantView
    {
        return $this->merchant;
    }
    /**
     * Set merchant value
     * @param \BancoBai\Client\Struct\MobilePaymentsMerchantView $merchant
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setMerchant(?\BancoBai\Client\Struct\MobilePaymentsMerchantView $merchant = null): self
    {
        $this->merchant = $merchant;
        
        return $this;
    }
    /**
     * Get operationId value
     * @return int|null
     */
    public function getOperationId(): ?int
    {
        return $this->operationId;
    }
    /**
     * Set operationId value
     * @param int $operationId
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setOperationId(?int $operationId = null): self
    {
        // validation for constraint: int
        if (!is_null($operationId) && !(is_int($operationId) || ctype_digit($operationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($operationId, true), gettype($operationId)), __LINE__);
        }
        $this->operationId = $operationId;
        
        return $this;
    }
    /**
     * Get paymentTypeDescription value
     * @return string|null
     */
    public function getPaymentTypeDescription(): ?string
    {
        return $this->paymentTypeDescription;
    }
    /**
     * Set paymentTypeDescription value
     * @param string $paymentTypeDescription
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setPaymentTypeDescription(?string $paymentTypeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentTypeDescription) && !is_string($paymentTypeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentTypeDescription, true), gettype($paymentTypeDescription)), __LINE__);
        }
        $this->paymentTypeDescription = $paymentTypeDescription;
        
        return $this;
    }
    /**
     * Get reversible value
     * @return bool|null
     */
    public function getReversible(): ?bool
    {
        return $this->reversible;
    }
    /**
     * Set reversible value
     * @param bool $reversible
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setReversible(?bool $reversible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reversible) && !is_bool($reversible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reversible, true), gettype($reversible)), __LINE__);
        }
        $this->reversible = $reversible;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \BancoBai\Client\Enum\MobilePaymentStatus::valueIsValid()
     * @uses \BancoBai\Client\Enum\MobilePaymentStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\BancoBai\Client\Enum\MobilePaymentStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \BancoBai\Client\Enum\MobilePaymentStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \BancoBai\Client\Enum\MobilePaymentStatus::getValidValues())), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get statusDescription value
     * @return string|null
     */
    public function getStatusDescription(): ?string
    {
        return $this->statusDescription;
    }
    /**
     * Set statusDescription value
     * @param string $statusDescription
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setStatusDescription(?string $statusDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($statusDescription) && !is_string($statusDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusDescription, true), gettype($statusDescription)), __LINE__);
        }
        $this->statusDescription = $statusDescription;
        
        return $this;
    }
    /**
     * Get statusId value
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->statusId;
    }
    /**
     * Set statusId value
     * @param int $statusId
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setStatusId(?int $statusId = null): self
    {
        // validation for constraint: int
        if (!is_null($statusId) && !(is_int($statusId) || ctype_digit($statusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusId, true), gettype($statusId)), __LINE__);
        }
        $this->statusId = $statusId;
        
        return $this;
    }
    /**
     * Get totalReversed value
     * @return float|null
     */
    public function getTotalReversed(): ?float
    {
        return $this->totalReversed;
    }
    /**
     * Set totalReversed value
     * @param float $totalReversed
     * @return \BancoBai\Client\Struct\MobilePaymentView
     */
    public function setTotalReversed(?float $totalReversed = null): self
    {
        // validation for constraint: float
        if (!is_null($totalReversed) && !(is_float($totalReversed) || is_numeric($totalReversed))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalReversed, true), gettype($totalReversed)), __LINE__);
        }
        $this->totalReversed = $totalReversed;
        
        return $this;
    }
}

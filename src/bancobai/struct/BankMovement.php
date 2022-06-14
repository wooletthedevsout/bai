<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bankMovement StructType
 * @subpackage Structs
 */
class BankMovement extends AbstractStructBase
{
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The balance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $balance = null;
    /**
     * The balanceCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $balanceCurrency = null;
    /**
     * The bankingOperationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bankingOperationCode = null;
    /**
     * The bankingOperationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bankingOperationNumber = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The documentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $documentNumber = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The issueAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $issueAmount = null;
    /**
     * The issueCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $issueCurrency = null;
    /**
     * The issueDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $issueDate = null;
    /**
     * The operationTypeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $operationTypeId = null;
    /**
     * The operationTypology
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\MOperationTypology|null
     */
    protected ?\BancoBai\Client\Struct\MOperationTypology $operationTypology = null;
    /**
     * The orderNumberPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orderNumberPosition = null;
    /**
     * The releaseDatePosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $releaseDatePosition = null;
    /**
     * The sequenceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sequenceNumber = null;
    /**
     * The transactionDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transactionDate = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The typeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for bankMovement
     * @uses BankMovement::setAmount()
     * @uses BankMovement::setBalance()
     * @uses BankMovement::setBalanceCurrency()
     * @uses BankMovement::setBankingOperationCode()
     * @uses BankMovement::setBankingOperationNumber()
     * @uses BankMovement::setCurrency()
     * @uses BankMovement::setDate()
     * @uses BankMovement::setDescription()
     * @uses BankMovement::setDocumentNumber()
     * @uses BankMovement::setId()
     * @uses BankMovement::setIssueAmount()
     * @uses BankMovement::setIssueCurrency()
     * @uses BankMovement::setIssueDate()
     * @uses BankMovement::setOperationTypeId()
     * @uses BankMovement::setOperationTypology()
     * @uses BankMovement::setOrderNumberPosition()
     * @uses BankMovement::setReleaseDatePosition()
     * @uses BankMovement::setSequenceNumber()
     * @uses BankMovement::setTransactionDate()
     * @uses BankMovement::setType()
     * @uses BankMovement::setTypeId()
     * @param float $amount
     * @param float $balance
     * @param string $balanceCurrency
     * @param string $bankingOperationCode
     * @param string $bankingOperationNumber
     * @param string $currency
     * @param string $date
     * @param string $description
     * @param string $documentNumber
     * @param string $id
     * @param float $issueAmount
     * @param string $issueCurrency
     * @param string $issueDate
     * @param int $operationTypeId
     * @param \BancoBai\Client\Struct\MOperationTypology $operationTypology
     * @param string $orderNumberPosition
     * @param string $releaseDatePosition
     * @param string $sequenceNumber
     * @param string $transactionDate
     * @param string $type
     * @param string $typeId
     */
    public function __construct(?float $amount = null, ?float $balance = null, ?string $balanceCurrency = null, ?string $bankingOperationCode = null, ?string $bankingOperationNumber = null, ?string $currency = null, ?string $date = null, ?string $description = null, ?string $documentNumber = null, ?string $id = null, ?float $issueAmount = null, ?string $issueCurrency = null, ?string $issueDate = null, ?int $operationTypeId = null, ?\BancoBai\Client\Struct\MOperationTypology $operationTypology = null, ?string $orderNumberPosition = null, ?string $releaseDatePosition = null, ?string $sequenceNumber = null, ?string $transactionDate = null, ?string $type = null, ?string $typeId = null)
    {
        $this
            ->setAmount($amount)
            ->setBalance($balance)
            ->setBalanceCurrency($balanceCurrency)
            ->setBankingOperationCode($bankingOperationCode)
            ->setBankingOperationNumber($bankingOperationNumber)
            ->setCurrency($currency)
            ->setDate($date)
            ->setDescription($description)
            ->setDocumentNumber($documentNumber)
            ->setId($id)
            ->setIssueAmount($issueAmount)
            ->setIssueCurrency($issueCurrency)
            ->setIssueDate($issueDate)
            ->setOperationTypeId($operationTypeId)
            ->setOperationTypology($operationTypology)
            ->setOrderNumberPosition($orderNumberPosition)
            ->setReleaseDatePosition($releaseDatePosition)
            ->setSequenceNumber($sequenceNumber)
            ->setTransactionDate($transactionDate)
            ->setType($type)
            ->setTypeId($typeId);
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
     * @return \BancoBai\Client\Struct\BankMovement
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
     * Get balance value
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }
    /**
     * Set balance value
     * @param float $balance
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setBalance(?float $balance = null): self
    {
        // validation for constraint: float
        if (!is_null($balance) && !(is_float($balance) || is_numeric($balance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        $this->balance = $balance;
        
        return $this;
    }
    /**
     * Get balanceCurrency value
     * @return string|null
     */
    public function getBalanceCurrency(): ?string
    {
        return $this->balanceCurrency;
    }
    /**
     * Set balanceCurrency value
     * @param string $balanceCurrency
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setBalanceCurrency(?string $balanceCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($balanceCurrency) && !is_string($balanceCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($balanceCurrency, true), gettype($balanceCurrency)), __LINE__);
        }
        $this->balanceCurrency = $balanceCurrency;
        
        return $this;
    }
    /**
     * Get bankingOperationCode value
     * @return string|null
     */
    public function getBankingOperationCode(): ?string
    {
        return $this->bankingOperationCode;
    }
    /**
     * Set bankingOperationCode value
     * @param string $bankingOperationCode
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setBankingOperationCode(?string $bankingOperationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bankingOperationCode) && !is_string($bankingOperationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankingOperationCode, true), gettype($bankingOperationCode)), __LINE__);
        }
        $this->bankingOperationCode = $bankingOperationCode;
        
        return $this;
    }
    /**
     * Get bankingOperationNumber value
     * @return string|null
     */
    public function getBankingOperationNumber(): ?string
    {
        return $this->bankingOperationNumber;
    }
    /**
     * Set bankingOperationNumber value
     * @param string $bankingOperationNumber
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setBankingOperationNumber(?string $bankingOperationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bankingOperationNumber) && !is_string($bankingOperationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankingOperationNumber, true), gettype($bankingOperationNumber)), __LINE__);
        }
        $this->bankingOperationNumber = $bankingOperationNumber;
        
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
     * @return \BancoBai\Client\Struct\BankMovement
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
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
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
     * @return \BancoBai\Client\Struct\BankMovement
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
     * Get documentNumber value
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }
    /**
     * Set documentNumber value
     * @param string $documentNumber
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setDocumentNumber(?string $documentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNumber, true), gettype($documentNumber)), __LINE__);
        }
        $this->documentNumber = $documentNumber;
        
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get issueAmount value
     * @return float|null
     */
    public function getIssueAmount(): ?float
    {
        return $this->issueAmount;
    }
    /**
     * Set issueAmount value
     * @param float $issueAmount
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setIssueAmount(?float $issueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($issueAmount) && !(is_float($issueAmount) || is_numeric($issueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($issueAmount, true), gettype($issueAmount)), __LINE__);
        }
        $this->issueAmount = $issueAmount;
        
        return $this;
    }
    /**
     * Get issueCurrency value
     * @return string|null
     */
    public function getIssueCurrency(): ?string
    {
        return $this->issueCurrency;
    }
    /**
     * Set issueCurrency value
     * @param string $issueCurrency
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setIssueCurrency(?string $issueCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($issueCurrency) && !is_string($issueCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueCurrency, true), gettype($issueCurrency)), __LINE__);
        }
        $this->issueCurrency = $issueCurrency;
        
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        
        return $this;
    }
    /**
     * Get operationTypeId value
     * @return int|null
     */
    public function getOperationTypeId(): ?int
    {
        return $this->operationTypeId;
    }
    /**
     * Set operationTypeId value
     * @param int $operationTypeId
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setOperationTypeId(?int $operationTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($operationTypeId) && !(is_int($operationTypeId) || ctype_digit($operationTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($operationTypeId, true), gettype($operationTypeId)), __LINE__);
        }
        $this->operationTypeId = $operationTypeId;
        
        return $this;
    }
    /**
     * Get operationTypology value
     * @return \BancoBai\Client\Struct\MOperationTypology|null
     */
    public function getOperationTypology(): ?\BancoBai\Client\Struct\MOperationTypology
    {
        return $this->operationTypology;
    }
    /**
     * Set operationTypology value
     * @param \BancoBai\Client\Struct\MOperationTypology $operationTypology
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setOperationTypology(?\BancoBai\Client\Struct\MOperationTypology $operationTypology = null): self
    {
        $this->operationTypology = $operationTypology;
        
        return $this;
    }
    /**
     * Get orderNumberPosition value
     * @return string|null
     */
    public function getOrderNumberPosition(): ?string
    {
        return $this->orderNumberPosition;
    }
    /**
     * Set orderNumberPosition value
     * @param string $orderNumberPosition
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setOrderNumberPosition(?string $orderNumberPosition = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNumberPosition) && !is_string($orderNumberPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumberPosition, true), gettype($orderNumberPosition)), __LINE__);
        }
        $this->orderNumberPosition = $orderNumberPosition;
        
        return $this;
    }
    /**
     * Get releaseDatePosition value
     * @return string|null
     */
    public function getReleaseDatePosition(): ?string
    {
        return $this->releaseDatePosition;
    }
    /**
     * Set releaseDatePosition value
     * @param string $releaseDatePosition
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setReleaseDatePosition(?string $releaseDatePosition = null): self
    {
        // validation for constraint: string
        if (!is_null($releaseDatePosition) && !is_string($releaseDatePosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($releaseDatePosition, true), gettype($releaseDatePosition)), __LINE__);
        }
        $this->releaseDatePosition = $releaseDatePosition;
        
        return $this;
    }
    /**
     * Get sequenceNumber value
     * @return string|null
     */
    public function getSequenceNumber(): ?string
    {
        return $this->sequenceNumber;
    }
    /**
     * Set sequenceNumber value
     * @param string $sequenceNumber
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setSequenceNumber(?string $sequenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($sequenceNumber) && !is_string($sequenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequenceNumber, true), gettype($sequenceNumber)), __LINE__);
        }
        $this->sequenceNumber = $sequenceNumber;
        
        return $this;
    }
    /**
     * Get transactionDate value
     * @return string|null
     */
    public function getTransactionDate(): ?string
    {
        return $this->transactionDate;
    }
    /**
     * Set transactionDate value
     * @param string $transactionDate
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setTransactionDate(?string $transactionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->transactionDate = $transactionDate;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \BancoBai\Client\Struct\BankMovement
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}

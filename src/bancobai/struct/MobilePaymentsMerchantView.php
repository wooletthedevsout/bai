<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mobilePaymentsMerchantView StructType
 * @subpackage Structs
 */
class MobilePaymentsMerchantView extends AbstractStructBase
{
    /**
     * The acceptancePointId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $acceptancePointId = null;
    /**
     * The creationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The enabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $enabled = null;
    /**
     * The externalId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The flow
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flow = null;
    /**
     * The friendlyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $friendlyName = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The imageUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $imageUrl = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for mobilePaymentsMerchantView
     * @uses MobilePaymentsMerchantView::setAcceptancePointId()
     * @uses MobilePaymentsMerchantView::setCreationDate()
     * @uses MobilePaymentsMerchantView::setDescription()
     * @uses MobilePaymentsMerchantView::setEmail()
     * @uses MobilePaymentsMerchantView::setEnabled()
     * @uses MobilePaymentsMerchantView::setExternalId()
     * @uses MobilePaymentsMerchantView::setFlow()
     * @uses MobilePaymentsMerchantView::setFriendlyName()
     * @uses MobilePaymentsMerchantView::setId()
     * @uses MobilePaymentsMerchantView::setImageUrl()
     * @uses MobilePaymentsMerchantView::setName()
     * @param int $acceptancePointId
     * @param string $creationDate
     * @param string $description
     * @param string $email
     * @param bool $enabled
     * @param string $externalId
     * @param string $flow
     * @param string $friendlyName
     * @param int $id
     * @param string $imageUrl
     * @param string $name
     */
    public function __construct(?int $acceptancePointId = null, ?string $creationDate = null, ?string $description = null, ?string $email = null, ?bool $enabled = null, ?string $externalId = null, ?string $flow = null, ?string $friendlyName = null, ?int $id = null, ?string $imageUrl = null, ?string $name = null)
    {
        $this
            ->setAcceptancePointId($acceptancePointId)
            ->setCreationDate($creationDate)
            ->setDescription($description)
            ->setEmail($email)
            ->setEnabled($enabled)
            ->setExternalId($externalId)
            ->setFlow($flow)
            ->setFriendlyName($friendlyName)
            ->setId($id)
            ->setImageUrl($imageUrl)
            ->setName($name);
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
     * @return \StructType\MobilePaymentsMerchantView
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
     * @return \StructType\MobilePaymentsMerchantView
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
     * @return \StructType\MobilePaymentsMerchantView
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
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \StructType\MobilePaymentsMerchantView
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get enabled value
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
    /**
     * Set enabled value
     * @param bool $enabled
     * @return \StructType\MobilePaymentsMerchantView
     */
    public function setEnabled(?bool $enabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enabled) && !is_bool($enabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enabled, true), gettype($enabled)), __LINE__);
        }
        $this->enabled = $enabled;
        
        return $this;
    }
    /**
     * Get externalId value
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $externalId
     * @return \StructType\MobilePaymentsMerchantView
     */
    public function setExternalId(?string $externalId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
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
     * @param string $flow
     * @return \StructType\MobilePaymentsMerchantView
     */
    public function setFlow(?string $flow = null): self
    {
        // validation for constraint: string
        if (!is_null($flow) && !is_string($flow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flow, true), gettype($flow)), __LINE__);
        }
        $this->flow = $flow;
        
        return $this;
    }
    /**
     * Get friendlyName value
     * @return string|null
     */
    public function getFriendlyName(): ?string
    {
        return $this->friendlyName;
    }
    /**
     * Set friendlyName value
     * @param string $friendlyName
     * @return \StructType\MobilePaymentsMerchantView
     */
    public function setFriendlyName(?string $friendlyName = null): self
    {
        // validation for constraint: string
        if (!is_null($friendlyName) && !is_string($friendlyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($friendlyName, true), gettype($friendlyName)), __LINE__);
        }
        $this->friendlyName = $friendlyName;
        
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
     * @return \StructType\MobilePaymentsMerchantView
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
     * Get imageUrl value
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }
    /**
     * Set imageUrl value
     * @param string $imageUrl
     * @return \StructType\MobilePaymentsMerchantView
     */
    public function setImageUrl(?string $imageUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($imageUrl) && !is_string($imageUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageUrl, true), gettype($imageUrl)), __LINE__);
        }
        $this->imageUrl = $imageUrl;
        
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
     * @return \StructType\MobilePaymentsMerchantView
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

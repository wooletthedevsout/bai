<?php

declare(strict_types=1);

namespace BancoBai\Client\Enum;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for mobilePaymentStatus EnumType
 * @subpackage Enumerations
 */
class MobilePaymentStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PROCESSING'
     * @return string 'PROCESSING'
     */
    const VALUE_PROCESSING = 'PROCESSING';
    /**
     * Constant for value 'SUCCESS'
     * @return string 'SUCCESS'
     */
    const VALUE_SUCCESS = 'SUCCESS';
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Constant for value 'TIMEOUT'
     * @return string 'TIMEOUT'
     */
    const VALUE_TIMEOUT = 'TIMEOUT';
    /**
     * Constant for value 'PENDING_CHALLENGE_RESPONSE'
     * @return string 'PENDING_CHALLENGE_RESPONSE'
     */
    const VALUE_PENDING_CHALLENGE_RESPONSE = 'PENDING_CHALLENGE_RESPONSE';
    /**
     * Constant for value 'PENDING_SIGNATURE'
     * @return string 'PENDING_SIGNATURE'
     */
    const VALUE_PENDING_SIGNATURE = 'PENDING_SIGNATURE';
    /**
     * Constant for value 'REJECTED'
     * @return string 'REJECTED'
     */
    const VALUE_REJECTED = 'REJECTED';
    /**
     * Constant for value 'EXPIRED'
     * @return string 'EXPIRED'
     */
    const VALUE_EXPIRED = 'EXPIRED';
    /**
     * Constant for value 'REVERSED'
     * @return string 'REVERSED'
     */
    const VALUE_REVERSED = 'REVERSED';
    /**
     * Constant for value 'PARTIAL_REVERSED'
     * @return string 'PARTIAL_REVERSED'
     */
    const VALUE_PARTIAL_REVERSED = 'PARTIAL_REVERSED';
    /**
     * Constant for value 'PENDING_ACCEPTANCE'
     * @return string 'PENDING_ACCEPTANCE'
     */
    const VALUE_PENDING_ACCEPTANCE = 'PENDING_ACCEPTANCE';
    /**
     * Constant for value 'ACCEPTED'
     * @return string 'ACCEPTED'
     */
    const VALUE_ACCEPTED = 'ACCEPTED';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Return allowed values
     * @uses self::VALUE_PROCESSING
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_TIMEOUT
     * @uses self::VALUE_PENDING_CHALLENGE_RESPONSE
     * @uses self::VALUE_PENDING_SIGNATURE
     * @uses self::VALUE_REJECTED
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_REVERSED
     * @uses self::VALUE_PARTIAL_REVERSED
     * @uses self::VALUE_PENDING_ACCEPTANCE
     * @uses self::VALUE_ACCEPTED
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PROCESSING,
            self::VALUE_SUCCESS,
            self::VALUE_ERROR,
            self::VALUE_TIMEOUT,
            self::VALUE_PENDING_CHALLENGE_RESPONSE,
            self::VALUE_PENDING_SIGNATURE,
            self::VALUE_REJECTED,
            self::VALUE_EXPIRED,
            self::VALUE_REVERSED,
            self::VALUE_PARTIAL_REVERSED,
            self::VALUE_PENDING_ACCEPTANCE,
            self::VALUE_ACCEPTED,
            self::VALUE_UNKNOWN,
        ];
    }
}

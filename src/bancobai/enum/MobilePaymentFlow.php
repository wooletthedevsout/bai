<?php

declare(strict_types=1);

namespace BancoBai\Client\Enum;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for mobilePaymentFlow EnumType
 * @subpackage Enumerations
 */
class MobilePaymentFlow extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PAYMENT_TO_MERCHANT'
     * @return string 'PAYMENT_TO_MERCHANT'
     */
    const VALUE_PAYMENT_TO_MERCHANT = 'PAYMENT_TO_MERCHANT';
    /**
     * Constant for value 'PAYMENT_REQUESTED_FROM_MERCHANT'
     * @return string 'PAYMENT_REQUESTED_FROM_MERCHANT'
     */
    const VALUE_PAYMENT_REQUESTED_FROM_MERCHANT = 'PAYMENT_REQUESTED_FROM_MERCHANT';
    /**
     * Constant for value 'PAYMENT_REQUESTED_FROM_MERCHANT_VIA_OTP'
     * @return string 'PAYMENT_REQUESTED_FROM_MERCHANT_VIA_OTP'
     */
    const VALUE_PAYMENT_REQUESTED_FROM_MERCHANT_VIA_OTP = 'PAYMENT_REQUESTED_FROM_MERCHANT_VIA_OTP';
    /**
     * Constant for value 'PAYMENT_REQUESTED_FROM_MERCHANT_CAPTIVE'
     * @return string 'PAYMENT_REQUESTED_FROM_MERCHANT_CAPTIVE'
     */
    const VALUE_PAYMENT_REQUESTED_FROM_MERCHANT_CAPTIVE = 'PAYMENT_REQUESTED_FROM_MERCHANT_CAPTIVE';
    /**
     * Return allowed values
     * @uses self::VALUE_PAYMENT_TO_MERCHANT
     * @uses self::VALUE_PAYMENT_REQUESTED_FROM_MERCHANT
     * @uses self::VALUE_PAYMENT_REQUESTED_FROM_MERCHANT_VIA_OTP
     * @uses self::VALUE_PAYMENT_REQUESTED_FROM_MERCHANT_CAPTIVE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAYMENT_TO_MERCHANT,
            self::VALUE_PAYMENT_REQUESTED_FROM_MERCHANT,
            self::VALUE_PAYMENT_REQUESTED_FROM_MERCHANT_VIA_OTP,
            self::VALUE_PAYMENT_REQUESTED_FROM_MERCHANT_CAPTIVE,
        ];
    }
}

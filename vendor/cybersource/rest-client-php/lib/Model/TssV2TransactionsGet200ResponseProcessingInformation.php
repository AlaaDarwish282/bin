<?php
/**
 * TssV2TransactionsGet200ResponseProcessingInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * TssV2TransactionsGet200ResponseProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponseProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentSolution' => 'string',
        'commerceIndicator' => 'string',
        'businessApplicationId' => 'string',
        'authorizationOptions' => '\CyberSource\Model\TssV2TransactionsGet200ResponseProcessingInformationAuthorizationOptions',
        'bankTransferOptions' => '\CyberSource\Model\TssV2TransactionsGet200ResponseProcessingInformationBankTransferOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentSolution' => null,
        'commerceIndicator' => null,
        'businessApplicationId' => null,
        'authorizationOptions' => null,
        'bankTransferOptions' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'paymentSolution' => 'paymentSolution',
        'commerceIndicator' => 'commerceIndicator',
        'businessApplicationId' => 'businessApplicationId',
        'authorizationOptions' => 'authorizationOptions',
        'bankTransferOptions' => 'bankTransferOptions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentSolution' => 'setPaymentSolution',
        'commerceIndicator' => 'setCommerceIndicator',
        'businessApplicationId' => 'setBusinessApplicationId',
        'authorizationOptions' => 'setAuthorizationOptions',
        'bankTransferOptions' => 'setBankTransferOptions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentSolution' => 'getPaymentSolution',
        'commerceIndicator' => 'getCommerceIndicator',
        'businessApplicationId' => 'getBusinessApplicationId',
        'authorizationOptions' => 'getAuthorizationOptions',
        'bankTransferOptions' => 'getBankTransferOptions'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['paymentSolution'] = isset($data['paymentSolution']) ? $data['paymentSolution'] : null;
        $this->container['commerceIndicator'] = isset($data['commerceIndicator']) ? $data['commerceIndicator'] : null;
        $this->container['businessApplicationId'] = isset($data['businessApplicationId']) ? $data['businessApplicationId'] : null;
        $this->container['authorizationOptions'] = isset($data['authorizationOptions']) ? $data['authorizationOptions'] : null;
        $this->container['bankTransferOptions'] = isset($data['bankTransferOptions']) ? $data['bankTransferOptions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['paymentSolution']) && (strlen($this->container['paymentSolution']) > 12)) {
            $invalid_properties[] = "invalid value for 'paymentSolution', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['commerceIndicator']) && (strlen($this->container['commerceIndicator']) > 20)) {
            $invalid_properties[] = "invalid value for 'commerceIndicator', the character length must be smaller than or equal to 20.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['paymentSolution']) > 12) {
            return false;
        }
        if (strlen($this->container['commerceIndicator']) > 20) {
            return false;
        }
        return true;
    }


    /**
     * Gets paymentSolution
     * @return string
     */
    public function getPaymentSolution()
    {
        return $this->container['paymentSolution'];
    }

    /**
     * Sets paymentSolution
     * @param string $paymentSolution Type of digital payment solution for the transaction. Possible Values:   - `visacheckout`: Visa Checkout. This value is required for Visa Checkout transactions. For details, see `payment_solution` field description in [Visa Checkout Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/VCO_SCMP_API/html/)  - `001`: Apple Pay.  - `004`: Cybersource In-App Solution.  - `005`: Masterpass. This value is required for Masterpass transactions on OmniPay Direct. For details, see \"Masterpass\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  - `006`: Android Pay.  - `007`: Chase Pay.  - `008`: Samsung Pay.  - `012`: Google Pay.
     * @return $this
     */
    public function setPaymentSolution($paymentSolution)
    {
        if (!is_null($paymentSolution) && (strlen($paymentSolution) > 12)) {
            throw new \InvalidArgumentException('invalid length for $paymentSolution when calling TssV2TransactionsGet200ResponseProcessingInformation., must be smaller than or equal to 12.');
        }

        $this->container['paymentSolution'] = $paymentSolution;

        return $this;
    }

    /**
     * Gets commerceIndicator
     * @return string
     */
    public function getCommerceIndicator()
    {
        return $this->container['commerceIndicator'];
    }

    /**
     * Sets commerceIndicator
     * @param string $commerceIndicator Type of transaction. Some payment card companies use this information when determining discount rates.  #### Ingenico ePayments Ingenico ePayments was previously called _Global Collect_. When you omit this field for Ingenico ePayments, the processor uses the default transaction type they have on file for you instead of the default value listed in \"Commerce Indicators\" section of [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Payer Authentication Transactions For the possible values and requirements, see \"Payer Authentication\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Payouts OCT (Original Credit Transaction) Value for an OCT transaction: - `internet` For details, see the `e_commerce_indicator` field description in [Payouts Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/payouts_SCMP/html/)  #### Other Types of Transactions For details, see \"Commerce Indicators\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setCommerceIndicator($commerceIndicator)
    {
        if (!is_null($commerceIndicator) && (strlen($commerceIndicator) > 20)) {
            throw new \InvalidArgumentException('invalid length for $commerceIndicator when calling TssV2TransactionsGet200ResponseProcessingInformation., must be smaller than or equal to 20.');
        }

        $this->container['commerceIndicator'] = $commerceIndicator;

        return $this;
    }

    /**
     * Gets businessApplicationId
     * @return string
     */
    public function getBusinessApplicationId()
    {
        return $this->container['businessApplicationId'];
    }

    /**
     * Sets businessApplicationId
     * @param string $businessApplicationId Payouts transaction type. Required for OCT transactions. This field is a pass-through, which means that CyberSource does not verify the value or modify it in any way before sending it to the processor. **Note** When the request includes this field, this value overrides the information in your CyberSource account.  For valid values, see the `invoiceHeader_businessApplicationID` field description in [Payouts Using the Simple Order API.](http://apps.cybersource.com/library/documentation/dev_guides/payouts_SO/Payouts_SO_API.pdf)
     * @return $this
     */
    public function setBusinessApplicationId($businessApplicationId)
    {
        $this->container['businessApplicationId'] = $businessApplicationId;

        return $this;
    }

    /**
     * Gets authorizationOptions
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseProcessingInformationAuthorizationOptions
     */
    public function getAuthorizationOptions()
    {
        return $this->container['authorizationOptions'];
    }

    /**
     * Sets authorizationOptions
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseProcessingInformationAuthorizationOptions $authorizationOptions
     * @return $this
     */
    public function setAuthorizationOptions($authorizationOptions)
    {
        $this->container['authorizationOptions'] = $authorizationOptions;

        return $this;
    }

    /**
     * Gets bankTransferOptions
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseProcessingInformationBankTransferOptions
     */
    public function getBankTransferOptions()
    {
        return $this->container['bankTransferOptions'];
    }

    /**
     * Sets bankTransferOptions
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseProcessingInformationBankTransferOptions $bankTransferOptions
     * @return $this
     */
    public function setBankTransferOptions($bankTransferOptions)
    {
        $this->container['bankTransferOptions'] = $bankTransferOptions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


<?php
/**
 * Ptsv2paymentsMerchantInformationMerchantDescriptor
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
 * Ptsv2paymentsMerchantInformationMerchantDescriptor Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsMerchantInformationMerchantDescriptor implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_merchantInformation_merchantDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'alternateName' => 'string',
        'contact' => 'string',
        'address1' => 'string',
        'locality' => 'string',
        'country' => 'string',
        'postalCode' => 'string',
        'administrativeArea' => 'string',
        'phone' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'alternateName' => null,
        'contact' => null,
        'address1' => null,
        'locality' => null,
        'country' => null,
        'postalCode' => null,
        'administrativeArea' => null,
        'phone' => null,
        'url' => null
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
        'name' => 'name',
        'alternateName' => 'alternateName',
        'contact' => 'contact',
        'address1' => 'address1',
        'locality' => 'locality',
        'country' => 'country',
        'postalCode' => 'postalCode',
        'administrativeArea' => 'administrativeArea',
        'phone' => 'phone',
        'url' => 'url'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'alternateName' => 'setAlternateName',
        'contact' => 'setContact',
        'address1' => 'setAddress1',
        'locality' => 'setLocality',
        'country' => 'setCountry',
        'postalCode' => 'setPostalCode',
        'administrativeArea' => 'setAdministrativeArea',
        'phone' => 'setPhone',
        'url' => 'setUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'alternateName' => 'getAlternateName',
        'contact' => 'getContact',
        'address1' => 'getAddress1',
        'locality' => 'getLocality',
        'country' => 'getCountry',
        'postalCode' => 'getPostalCode',
        'administrativeArea' => 'getAdministrativeArea',
        'phone' => 'getPhone',
        'url' => 'getUrl'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['alternateName'] = isset($data['alternateName']) ? $data['alternateName'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['alternateName']) && (strlen($this->container['alternateName']) > 13)) {
            $invalid_properties[] = "invalid value for 'alternateName', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['contact']) && (strlen($this->container['contact']) > 14)) {
            $invalid_properties[] = "invalid value for 'contact', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['address1']) && (strlen($this->container['address1']) > 60)) {
            $invalid_properties[] = "invalid value for 'address1', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['locality']) && (strlen($this->container['locality']) > 13)) {
            $invalid_properties[] = "invalid value for 'locality', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['postalCode']) && (strlen($this->container['postalCode']) > 14)) {
            $invalid_properties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['phone']) && (strlen($this->container['phone']) > 13)) {
            $invalid_properties[] = "invalid value for 'phone', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['url']) && (strlen($this->container['url']) > 255)) {
            $invalid_properties[] = "invalid value for 'url', the character length must be smaller than or equal to 255.";
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

        if (strlen($this->container['alternateName']) > 13) {
            return false;
        }
        if (strlen($this->container['contact']) > 14) {
            return false;
        }
        if (strlen($this->container['address1']) > 60) {
            return false;
        }
        if (strlen($this->container['locality']) > 13) {
            return false;
        }
        if (strlen($this->container['postalCode']) > 14) {
            return false;
        }
        if (strlen($this->container['phone']) > 13) {
            return false;
        }
        if (strlen($this->container['url']) > 255) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Merchant's name.  For more details about the merchant-related fields, see the `merchant_descriptor` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)  **Note** For Paymentech processor using Cybersource Payouts, the maximum data length is 22.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets alternateName
     * @return string
     */
    public function getAlternateName()
    {
        return $this->container['alternateName'];
    }

    /**
     * Sets alternateName
     * @param string $alternateName An alternate name for the merchant.  For the descriptions, used-by information, data types, and lengths for these fields, see the `merchant_descriptor_alternate` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)-->
     * @return $this
     */
    public function setAlternateName($alternateName)
    {
        if (!is_null($alternateName) && (strlen($alternateName) > 13)) {
            throw new \InvalidArgumentException('invalid length for $alternateName when calling Ptsv2paymentsMerchantInformationMerchantDescriptor., must be smaller than or equal to 13.');
        }

        $this->container['alternateName'] = $alternateName;

        return $this;
    }

    /**
     * Gets contact
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param string $contact For the descriptions, used-by information, data types, and lengths for these fields, see `merchant_descriptor_contact` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)--> Contact information for the merchant.  **Note** These are the maximum data lengths for the following payment processors: - FDCCompass (13) - Paymentech (13)
     * @return $this
     */
    public function setContact($contact)
    {
        if (!is_null($contact) && (strlen($contact) > 14)) {
            throw new \InvalidArgumentException('invalid length for $contact when calling Ptsv2paymentsMerchantInformationMerchantDescriptor., must be smaller than or equal to 14.');
        }

        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1 First line of merchant's address. For the descriptions, used-by information, data types, and lengths for these fields, see `merchant_descriptor_street` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setAddress1($address1)
    {
        if (!is_null($address1) && (strlen($address1) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling Ptsv2paymentsMerchantInformationMerchantDescriptor., must be smaller than or equal to 60.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     * @param string $locality Merchant's City.  For the descriptions, used-by information, data types, and lengths for these fields, see the `merchant_descriptor_city` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setLocality($locality)
    {
        if (!is_null($locality) && (strlen($locality) > 13)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling Ptsv2paymentsMerchantInformationMerchantDescriptor., must be smaller than or equal to 13.');
        }

        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Merchant's country.  For the descriptions, used-by information, data types, and lengths for these fields, see the `merchant_descriptor_country` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode Merchant's postal code.  For the descriptions, used-by information, data types, and lengths for these fields, see the `merchant_descriptor_postal_code` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        if (!is_null($postalCode) && (strlen($postalCode) > 14)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling Ptsv2paymentsMerchantInformationMerchantDescriptor., must be smaller than or equal to 14.');
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets administrativeArea
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->container['administrativeArea'];
    }

    /**
     * Sets administrativeArea
     * @param string $administrativeArea The state where the merchant is located.  For the descriptions, used-by information, data types, and lengths for these fields, see the `merchant_descriptor_state` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)  Merchant State. For the descriptions, used-by information, data types, and lengths for these fields, see Merchant Descriptors in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        $this->container['administrativeArea'] = $administrativeArea;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone Merchnat phone as contact information for CNP transactions
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (strlen($phone) > 13)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Ptsv2paymentsMerchantInformationMerchantDescriptor., must be smaller than or equal to 13.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url Address of company's website provided by merchant
     * @return $this
     */
    public function setUrl($url)
    {
        if (!is_null($url) && (strlen($url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $url when calling Ptsv2paymentsMerchantInformationMerchantDescriptor., must be smaller than or equal to 255.');
        }

        $this->container['url'] = $url;

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


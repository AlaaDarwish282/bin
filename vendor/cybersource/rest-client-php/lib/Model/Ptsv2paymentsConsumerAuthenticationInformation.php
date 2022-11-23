<?php
/**
 * Ptsv2paymentsConsumerAuthenticationInformation
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
 * Ptsv2paymentsConsumerAuthenticationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsConsumerAuthenticationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_consumerAuthenticationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cavv' => 'string',
        'cavvAlgorithm' => 'string',
        'eciRaw' => 'string',
        'paresStatus' => 'string',
        'veresEnrolled' => 'string',
        'xid' => 'string',
        'ucafAuthenticationData' => 'string',
        'strongAuthentication' => '\CyberSource\Model\Ptsv2paymentsConsumerAuthenticationInformationStrongAuthentication',
        'directoryServerTransactionId' => 'string',
        'paSpecificationVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cavv' => null,
        'cavvAlgorithm' => null,
        'eciRaw' => null,
        'paresStatus' => null,
        'veresEnrolled' => null,
        'xid' => null,
        'ucafAuthenticationData' => null,
        'strongAuthentication' => null,
        'directoryServerTransactionId' => null,
        'paSpecificationVersion' => null
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
        'cavv' => 'cavv',
        'cavvAlgorithm' => 'cavvAlgorithm',
        'eciRaw' => 'eciRaw',
        'paresStatus' => 'paresStatus',
        'veresEnrolled' => 'veresEnrolled',
        'xid' => 'xid',
        'ucafAuthenticationData' => 'ucafAuthenticationData',
        'strongAuthentication' => 'strongAuthentication',
        'directoryServerTransactionId' => 'directoryServerTransactionId',
        'paSpecificationVersion' => 'paSpecificationVersion'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cavv' => 'setCavv',
        'cavvAlgorithm' => 'setCavvAlgorithm',
        'eciRaw' => 'setEciRaw',
        'paresStatus' => 'setParesStatus',
        'veresEnrolled' => 'setVeresEnrolled',
        'xid' => 'setXid',
        'ucafAuthenticationData' => 'setUcafAuthenticationData',
        'strongAuthentication' => 'setStrongAuthentication',
        'directoryServerTransactionId' => 'setDirectoryServerTransactionId',
        'paSpecificationVersion' => 'setPaSpecificationVersion'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cavv' => 'getCavv',
        'cavvAlgorithm' => 'getCavvAlgorithm',
        'eciRaw' => 'getEciRaw',
        'paresStatus' => 'getParesStatus',
        'veresEnrolled' => 'getVeresEnrolled',
        'xid' => 'getXid',
        'ucafAuthenticationData' => 'getUcafAuthenticationData',
        'strongAuthentication' => 'getStrongAuthentication',
        'directoryServerTransactionId' => 'getDirectoryServerTransactionId',
        'paSpecificationVersion' => 'getPaSpecificationVersion'
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
        $this->container['cavv'] = isset($data['cavv']) ? $data['cavv'] : null;
        $this->container['cavvAlgorithm'] = isset($data['cavvAlgorithm']) ? $data['cavvAlgorithm'] : null;
        $this->container['eciRaw'] = isset($data['eciRaw']) ? $data['eciRaw'] : null;
        $this->container['paresStatus'] = isset($data['paresStatus']) ? $data['paresStatus'] : null;
        $this->container['veresEnrolled'] = isset($data['veresEnrolled']) ? $data['veresEnrolled'] : null;
        $this->container['xid'] = isset($data['xid']) ? $data['xid'] : null;
        $this->container['ucafAuthenticationData'] = isset($data['ucafAuthenticationData']) ? $data['ucafAuthenticationData'] : null;
        $this->container['strongAuthentication'] = isset($data['strongAuthentication']) ? $data['strongAuthentication'] : null;
        $this->container['directoryServerTransactionId'] = isset($data['directoryServerTransactionId']) ? $data['directoryServerTransactionId'] : null;
        $this->container['paSpecificationVersion'] = isset($data['paSpecificationVersion']) ? $data['paSpecificationVersion'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['cavv']) && (strlen($this->container['cavv']) > 40)) {
            $invalid_properties[] = "invalid value for 'cavv', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['cavvAlgorithm']) && (strlen($this->container['cavvAlgorithm']) > 1)) {
            $invalid_properties[] = "invalid value for 'cavvAlgorithm', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['eciRaw']) && (strlen($this->container['eciRaw']) > 2)) {
            $invalid_properties[] = "invalid value for 'eciRaw', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['paresStatus']) && (strlen($this->container['paresStatus']) > 1)) {
            $invalid_properties[] = "invalid value for 'paresStatus', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['veresEnrolled']) && (strlen($this->container['veresEnrolled']) > 1)) {
            $invalid_properties[] = "invalid value for 'veresEnrolled', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['xid']) && (strlen($this->container['xid']) > 40)) {
            $invalid_properties[] = "invalid value for 'xid', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['ucafAuthenticationData']) && (strlen($this->container['ucafAuthenticationData']) > 32)) {
            $invalid_properties[] = "invalid value for 'ucafAuthenticationData', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['directoryServerTransactionId']) && (strlen($this->container['directoryServerTransactionId']) > 36)) {
            $invalid_properties[] = "invalid value for 'directoryServerTransactionId', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['paSpecificationVersion']) && (strlen($this->container['paSpecificationVersion']) > 1)) {
            $invalid_properties[] = "invalid value for 'paSpecificationVersion', the character length must be smaller than or equal to 1.";
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

        if (strlen($this->container['cavv']) > 40) {
            return false;
        }
        if (strlen($this->container['cavvAlgorithm']) > 1) {
            return false;
        }
        if (strlen($this->container['eciRaw']) > 2) {
            return false;
        }
        if (strlen($this->container['paresStatus']) > 1) {
            return false;
        }
        if (strlen($this->container['veresEnrolled']) > 1) {
            return false;
        }
        if (strlen($this->container['xid']) > 40) {
            return false;
        }
        if (strlen($this->container['ucafAuthenticationData']) > 32) {
            return false;
        }
        if (strlen($this->container['directoryServerTransactionId']) > 36) {
            return false;
        }
        if (strlen($this->container['paSpecificationVersion']) > 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets cavv
     * @return string
     */
    public function getCavv()
    {
        return $this->container['cavv'];
    }

    /**
     * Sets cavv
     * @param string $cavv Cardholder authentication verification value (CAVV).
     * @return $this
     */
    public function setCavv($cavv)
    {
        if (!is_null($cavv) && (strlen($cavv) > 40)) {
            throw new \InvalidArgumentException('invalid length for $cavv when calling Ptsv2paymentsConsumerAuthenticationInformation., must be smaller than or equal to 40.');
        }

        $this->container['cavv'] = $cavv;

        return $this;
    }

    /**
     * Gets cavvAlgorithm
     * @return string
     */
    public function getCavvAlgorithm()
    {
        return $this->container['cavvAlgorithm'];
    }

    /**
     * Sets cavvAlgorithm
     * @param string $cavvAlgorithm Algorithm used to generate the CAVV for Visa Secure or the UCAF authentication data for Mastercard Identity Check.
     * @return $this
     */
    public function setCavvAlgorithm($cavvAlgorithm)
    {
        if (!is_null($cavvAlgorithm) && (strlen($cavvAlgorithm) > 1)) {
            throw new \InvalidArgumentException('invalid length for $cavvAlgorithm when calling Ptsv2paymentsConsumerAuthenticationInformation., must be smaller than or equal to 1.');
        }

        $this->container['cavvAlgorithm'] = $cavvAlgorithm;

        return $this;
    }

    /**
     * Gets eciRaw
     * @return string
     */
    public function getEciRaw()
    {
        return $this->container['eciRaw'];
    }

    /**
     * Sets eciRaw
     * @param string $eciRaw Raw electronic commerce indicator (ECI).  For details, see `eci_raw` request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setEciRaw($eciRaw)
    {
        if (!is_null($eciRaw) && (strlen($eciRaw) > 2)) {
            throw new \InvalidArgumentException('invalid length for $eciRaw when calling Ptsv2paymentsConsumerAuthenticationInformation., must be smaller than or equal to 2.');
        }

        $this->container['eciRaw'] = $eciRaw;

        return $this;
    }

    /**
     * Gets paresStatus
     * @return string
     */
    public function getParesStatus()
    {
        return $this->container['paresStatus'];
    }

    /**
     * Sets paresStatus
     * @param string $paresStatus Payer authentication response status.  For details, see `pares_status` request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setParesStatus($paresStatus)
    {
        if (!is_null($paresStatus) && (strlen($paresStatus) > 1)) {
            throw new \InvalidArgumentException('invalid length for $paresStatus when calling Ptsv2paymentsConsumerAuthenticationInformation., must be smaller than or equal to 1.');
        }

        $this->container['paresStatus'] = $paresStatus;

        return $this;
    }

    /**
     * Gets veresEnrolled
     * @return string
     */
    public function getVeresEnrolled()
    {
        return $this->container['veresEnrolled'];
    }

    /**
     * Sets veresEnrolled
     * @param string $veresEnrolled Verification response enrollment status.  For details, see `veres_enrolled` request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setVeresEnrolled($veresEnrolled)
    {
        if (!is_null($veresEnrolled) && (strlen($veresEnrolled) > 1)) {
            throw new \InvalidArgumentException('invalid length for $veresEnrolled when calling Ptsv2paymentsConsumerAuthenticationInformation., must be smaller than or equal to 1.');
        }

        $this->container['veresEnrolled'] = $veresEnrolled;

        return $this;
    }

    /**
     * Gets xid
     * @return string
     */
    public function getXid()
    {
        return $this->container['xid'];
    }

    /**
     * Sets xid
     * @param string $xid Transaction identifier.  For details, see `xid` request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setXid($xid)
    {
        if (!is_null($xid) && (strlen($xid) > 40)) {
            throw new \InvalidArgumentException('invalid length for $xid when calling Ptsv2paymentsConsumerAuthenticationInformation., must be smaller than or equal to 40.');
        }

        $this->container['xid'] = $xid;

        return $this;
    }

    /**
     * Gets ucafAuthenticationData
     * @return string
     */
    public function getUcafAuthenticationData()
    {
        return $this->container['ucafAuthenticationData'];
    }

    /**
     * Sets ucafAuthenticationData
     * @param string $ucafAuthenticationData Universal cardholder authentication field (UCAF) data.  For details, see `ucaf_authentication_data` request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setUcafAuthenticationData($ucafAuthenticationData)
    {
        if (!is_null($ucafAuthenticationData) && (strlen($ucafAuthenticationData) > 32)) {
            throw new \InvalidArgumentException('invalid length for $ucafAuthenticationData when calling Ptsv2paymentsConsumerAuthenticationInformation., must be smaller than or equal to 32.');
        }

        $this->container['ucafAuthenticationData'] = $ucafAuthenticationData;

        return $this;
    }

    /**
     * Gets strongAuthentication
     * @return \CyberSource\Model\Ptsv2paymentsConsumerAuthenticationInformationStrongAuthentication
     */
    public function getStrongAuthentication()
    {
        return $this->container['strongAuthentication'];
    }

    /**
     * Sets strongAuthentication
     * @param \CyberSource\Model\Ptsv2paymentsConsumerAuthenticationInformationStrongAuthentication $strongAuthentication
     * @return $this
     */
    public function setStrongAuthentication($strongAuthentication)
    {
        $this->container['strongAuthentication'] = $strongAuthentication;

        return $this;
    }

    /**
     * Gets directoryServerTransactionId
     * @return string
     */
    public function getDirectoryServerTransactionId()
    {
        return $this->container['directoryServerTransactionId'];
    }

    /**
     * Sets directoryServerTransactionId
     * @param string $directoryServerTransactionId The Directory Server Transaction ID is generated by the Mastercard Directory Server during the authentication transaction and passed back to the merchant with the authentication results. For Cybersource Through Visanet Gateway: The value for this field corresponds to the following data in the TC 33 capture file3: Record: CP01 TCR7, Position: 114-149, Field: MC AVV Verification—Directory Server Transaction ID
     * @return $this
     */
    public function setDirectoryServerTransactionId($directoryServerTransactionId)
    {
        if (!is_null($directoryServerTransactionId) && (strlen($directoryServerTransactionId) > 36)) {
            throw new \InvalidArgumentException('invalid length for $directoryServerTransactionId when calling Ptsv2paymentsConsumerAuthenticationInformation., must be smaller than or equal to 36.');
        }

        $this->container['directoryServerTransactionId'] = $directoryServerTransactionId;

        return $this;
    }

    /**
     * Gets paSpecificationVersion
     * @return string
     */
    public function getPaSpecificationVersion()
    {
        return $this->container['paSpecificationVersion'];
    }

    /**
     * Sets paSpecificationVersion
     * @param string $paSpecificationVersion This field contains 3DS version that was used for Secured Consumer Authentication (SCA). For example 3DS secure version 1.0.2 or 2.0.0 is used for Secured Consumer Authentication. For Cybersource Through Visanet Gateway: The value for this field corresponds to the following data in the TC 33 capture file3: Record: CP01 TCR7, Position: 113 , Field: MC AVV Verification—Program Protocol It will contain one of the following values: - `1` (3D Secure Version 1.0 (3DS 1.0)) - `2` (EMV 3-D Secure (3DS 2.0))
     * @return $this
     */
    public function setPaSpecificationVersion($paSpecificationVersion)
    {
        if (!is_null($paSpecificationVersion) && (strlen($paSpecificationVersion) > 1)) {
            throw new \InvalidArgumentException('invalid length for $paSpecificationVersion when calling Ptsv2paymentsConsumerAuthenticationInformation., must be smaller than or equal to 1.');
        }

        $this->container['paSpecificationVersion'] = $paSpecificationVersion;

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


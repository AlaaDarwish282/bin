<?php
/**
 * ReportingV3ReportSubscriptionsGet200ResponseSubscriptions
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
 * ReportingV3ReportSubscriptionsGet200ResponseSubscriptions Class Doc Comment
 *
 * @category    Class
 * @description Subscription Details
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3ReportSubscriptionsGet200ResponseSubscriptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3ReportSubscriptionsGet200Response_subscriptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organizationId' => 'string',
        'reportDefinitionId' => 'string',
        'reportDefinitionName' => 'string',
        'reportMimeType' => 'string',
        'reportFrequency' => 'string',
        'reportInterval' => 'string',
        'reportName' => 'string',
        'timezone' => 'string',
        'startTime' => '\DateTime',
        'startDay' => 'int',
        'reportFields' => 'string[]',
        'reportFilters' => 'map[string,string[]]',
        'reportPreferences' => '\CyberSource\Model\Reportingv3reportsReportPreferences',
        'groupId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organizationId' => null,
        'reportDefinitionId' => null,
        'reportDefinitionName' => null,
        'reportMimeType' => null,
        'reportFrequency' => null,
        'reportInterval' => null,
        'reportName' => null,
        'timezone' => null,
        'startTime' => 'date-time',
        'startDay' => 'int32',
        'reportFields' => null,
        'reportFilters' => null,
        'reportPreferences' => null,
        'groupId' => null
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
        'organizationId' => 'organizationId',
        'reportDefinitionId' => 'reportDefinitionId',
        'reportDefinitionName' => 'reportDefinitionName',
        'reportMimeType' => 'reportMimeType',
        'reportFrequency' => 'reportFrequency',
        'reportInterval' => 'reportInterval',
        'reportName' => 'reportName',
        'timezone' => 'timezone',
        'startTime' => 'startTime',
        'startDay' => 'startDay',
        'reportFields' => 'reportFields',
        'reportFilters' => 'reportFilters',
        'reportPreferences' => 'reportPreferences',
        'groupId' => 'groupId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'organizationId' => 'setOrganizationId',
        'reportDefinitionId' => 'setReportDefinitionId',
        'reportDefinitionName' => 'setReportDefinitionName',
        'reportMimeType' => 'setReportMimeType',
        'reportFrequency' => 'setReportFrequency',
        'reportInterval' => 'setReportInterval',
        'reportName' => 'setReportName',
        'timezone' => 'setTimezone',
        'startTime' => 'setStartTime',
        'startDay' => 'setStartDay',
        'reportFields' => 'setReportFields',
        'reportFilters' => 'setReportFilters',
        'reportPreferences' => 'setReportPreferences',
        'groupId' => 'setGroupId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'organizationId' => 'getOrganizationId',
        'reportDefinitionId' => 'getReportDefinitionId',
        'reportDefinitionName' => 'getReportDefinitionName',
        'reportMimeType' => 'getReportMimeType',
        'reportFrequency' => 'getReportFrequency',
        'reportInterval' => 'getReportInterval',
        'reportName' => 'getReportName',
        'timezone' => 'getTimezone',
        'startTime' => 'getStartTime',
        'startDay' => 'getStartDay',
        'reportFields' => 'getReportFields',
        'reportFilters' => 'getReportFilters',
        'reportPreferences' => 'getReportPreferences',
        'groupId' => 'getGroupId'
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
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['reportDefinitionId'] = isset($data['reportDefinitionId']) ? $data['reportDefinitionId'] : null;
        $this->container['reportDefinitionName'] = isset($data['reportDefinitionName']) ? $data['reportDefinitionName'] : null;
        $this->container['reportMimeType'] = isset($data['reportMimeType']) ? $data['reportMimeType'] : null;
        $this->container['reportFrequency'] = isset($data['reportFrequency']) ? $data['reportFrequency'] : null;
        $this->container['reportInterval'] = isset($data['reportInterval']) ? $data['reportInterval'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['startDay'] = isset($data['startDay']) ? $data['startDay'] : null;
        $this->container['reportFields'] = isset($data['reportFields']) ? $data['reportFields'] : null;
        $this->container['reportFilters'] = isset($data['reportFilters']) ? $data['reportFilters'] : null;
        $this->container['reportPreferences'] = isset($data['reportPreferences']) ? $data['reportPreferences'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['reportInterval']) && !preg_match("/^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/", $this->container['reportInterval'])) {
            $invalid_properties[] = "invalid value for 'reportInterval', must be conform to the pattern /^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/.";
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

        if (!preg_match("/^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/", $this->container['reportInterval'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets organizationId
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     * @param string $organizationId Selected Organization Id
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets reportDefinitionId
     * @return string
     */
    public function getReportDefinitionId()
    {
        return $this->container['reportDefinitionId'];
    }

    /**
     * Sets reportDefinitionId
     * @param string $reportDefinitionId Report Definition Id
     * @return $this
     */
    public function setReportDefinitionId($reportDefinitionId)
    {
        $this->container['reportDefinitionId'] = $reportDefinitionId;

        return $this;
    }

    /**
     * Gets reportDefinitionName
     * @return string
     */
    public function getReportDefinitionName()
    {
        return $this->container['reportDefinitionName'];
    }

    /**
     * Sets reportDefinitionName
     * @param string $reportDefinitionName Report Definition Class
     * @return $this
     */
    public function setReportDefinitionName($reportDefinitionName)
    {
        $this->container['reportDefinitionName'] = $reportDefinitionName;

        return $this;
    }

    /**
     * Gets reportMimeType
     * @return string
     */
    public function getReportMimeType()
    {
        return $this->container['reportMimeType'];
    }

    /**
     * Sets reportMimeType
     * @param string $reportMimeType Report Format                          Valid values: - application/xml - text/csv
     * @return $this
     */
    public function setReportMimeType($reportMimeType)
    {
        $this->container['reportMimeType'] = $reportMimeType;

        return $this;
    }

    /**
     * Gets reportFrequency
     * @return string
     */
    public function getReportFrequency()
    {
        return $this->container['reportFrequency'];
    }

    /**
     * Sets reportFrequency
     * @param string $reportFrequency 'Report Frequency' **NOTE: Do not document USER_DEFINED Frequency field in developer center**  Valid values: - DAILY - WEEKLY - MONTHLY - USER_DEFINED
     * @return $this
     */
    public function setReportFrequency($reportFrequency)
    {
        $this->container['reportFrequency'] = $reportFrequency;

        return $this;
    }

    /**
     * Gets reportInterval
     * @return string
     */
    public function getReportInterval()
    {
        return $this->container['reportInterval'];
    }

    /**
     * Sets reportInterval
     * @param string $reportInterval If the reportFrequency is User-defined, reportInterval should be in **ISO 8601 time format** Please refer the following link to know more about ISO 8601 format.[Rfc Time Format](https://en.wikipedia.org/wiki/ISO_8601#Durations)  **Example time format for 2 hours and 30 Mins:**   - PT2H30M **NOTE: Do not document reportInterval field in developer center**
     * @return $this
     */
    public function setReportInterval($reportInterval)
    {

        if (!is_null($reportInterval) && (!preg_match("/^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/", $reportInterval))) {
            throw new \InvalidArgumentException("invalid value for $reportInterval when calling ReportingV3ReportSubscriptionsGet200ResponseSubscriptions., must conform to the pattern /^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/.");
        }

        $this->container['reportInterval'] = $reportInterval;

        return $this;
    }

    /**
     * Gets reportName
     * @return string
     */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
     * Sets reportName
     * @param string $reportName Report Name
     * @return $this
     */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone Time Zone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets startTime
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     * @param \DateTime $startTime Start Time
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets startDay
     * @return int
     */
    public function getStartDay()
    {
        return $this->container['startDay'];
    }

    /**
     * Sets startDay
     * @param int $startDay Start Day
     * @return $this
     */
    public function setStartDay($startDay)
    {
        $this->container['startDay'] = $startDay;

        return $this;
    }

    /**
     * Gets reportFields
     * @return string[]
     */
    public function getReportFields()
    {
        return $this->container['reportFields'];
    }

    /**
     * Sets reportFields
     * @param string[] $reportFields List of all fields String values
     * @return $this
     */
    public function setReportFields($reportFields)
    {
        $this->container['reportFields'] = $reportFields;

        return $this;
    }

    /**
     * Gets reportFilters
     * @return map[string,string[]]
     */
    public function getReportFilters()
    {
        return $this->container['reportFilters'];
    }

    /**
     * Sets reportFilters
     * @param map[string,string[]] $reportFilters List of filters to apply
     * @return $this
     */
    public function setReportFilters($reportFilters)
    {
        $this->container['reportFilters'] = $reportFilters;

        return $this;
    }

    /**
     * Gets reportPreferences
     * @return \CyberSource\Model\Reportingv3reportsReportPreferences
     */
    public function getReportPreferences()
    {
        return $this->container['reportPreferences'];
    }

    /**
     * Sets reportPreferences
     * @param \CyberSource\Model\Reportingv3reportsReportPreferences $reportPreferences
     * @return $this
     */
    public function setReportPreferences($reportPreferences)
    {
        $this->container['reportPreferences'] = $reportPreferences;

        return $this;
    }

    /**
     * Gets groupId
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     * @param string $groupId Id for the selected group.
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

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



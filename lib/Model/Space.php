<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Wallee\Sdk\Model;

use \ArrayAccess;
use \Wallee\Sdk\ObjectSerializer;

/**
 * Space model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Space implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Space';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account' => '\Wallee\Sdk\Model\Account',
        'active' => 'bool',
        'active_or_restricted_active' => 'bool',
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'database' => '\Wallee\Sdk\Model\TenantDatabase',
        'deleted_by' => 'int',
        'deleted_on' => '\DateTime',
        'id' => 'int',
        'last_modified_date' => '\DateTime',
        'name' => 'string',
        'planned_purge_date' => '\DateTime',
        'postal_address' => '\Wallee\Sdk\Model\SpaceAddress',
        'primary_currency' => 'string',
        'request_limit' => 'int',
        'restricted_active' => 'bool',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'technical_contact_addresses' => 'string[]',
        'time_zone' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account' => null,
        'active' => null,
        'active_or_restricted_active' => null,
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'database' => null,
        'deleted_by' => 'int64',
        'deleted_on' => 'date-time',
        'id' => 'int64',
        'last_modified_date' => 'date-time',
        'name' => null,
        'planned_purge_date' => 'date-time',
        'postal_address' => null,
        'primary_currency' => null,
        'request_limit' => 'int64',
        'restricted_active' => null,
        'state' => null,
        'technical_contact_addresses' => null,
        'time_zone' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account' => 'account',
        'active' => 'active',
        'active_or_restricted_active' => 'activeOrRestrictedActive',
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'database' => 'database',
        'deleted_by' => 'deletedBy',
        'deleted_on' => 'deletedOn',
        'id' => 'id',
        'last_modified_date' => 'lastModifiedDate',
        'name' => 'name',
        'planned_purge_date' => 'plannedPurgeDate',
        'postal_address' => 'postalAddress',
        'primary_currency' => 'primaryCurrency',
        'request_limit' => 'requestLimit',
        'restricted_active' => 'restrictedActive',
        'state' => 'state',
        'technical_contact_addresses' => 'technicalContactAddresses',
        'time_zone' => 'timeZone',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'active' => 'setActive',
        'active_or_restricted_active' => 'setActiveOrRestrictedActive',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'database' => 'setDatabase',
        'deleted_by' => 'setDeletedBy',
        'deleted_on' => 'setDeletedOn',
        'id' => 'setId',
        'last_modified_date' => 'setLastModifiedDate',
        'name' => 'setName',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'postal_address' => 'setPostalAddress',
        'primary_currency' => 'setPrimaryCurrency',
        'request_limit' => 'setRequestLimit',
        'restricted_active' => 'setRestrictedActive',
        'state' => 'setState',
        'technical_contact_addresses' => 'setTechnicalContactAddresses',
        'time_zone' => 'setTimeZone',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'active' => 'getActive',
        'active_or_restricted_active' => 'getActiveOrRestrictedActive',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'database' => 'getDatabase',
        'deleted_by' => 'getDeletedBy',
        'deleted_on' => 'getDeletedOn',
        'id' => 'getId',
        'last_modified_date' => 'getLastModifiedDate',
        'name' => 'getName',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'postal_address' => 'getPostalAddress',
        'primary_currency' => 'getPrimaryCurrency',
        'request_limit' => 'getRequestLimit',
        'restricted_active' => 'getRestrictedActive',
        'state' => 'getState',
        'technical_contact_addresses' => 'getTechnicalContactAddresses',
        'time_zone' => 'getTimeZone',
        'version' => 'getVersion'
    ];

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        
        $this->container['active_or_restricted_active'] = isset($data['active_or_restricted_active']) ? $data['active_or_restricted_active'] : null;
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        
        $this->container['deleted_by'] = isset($data['deleted_by']) ? $data['deleted_by'] : null;
        
        $this->container['deleted_on'] = isset($data['deleted_on']) ? $data['deleted_on'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['postal_address'] = isset($data['postal_address']) ? $data['postal_address'] : null;
        
        $this->container['primary_currency'] = isset($data['primary_currency']) ? $data['primary_currency'] : null;
        
        $this->container['request_limit'] = isset($data['request_limit']) ? $data['request_limit'] : null;
        
        $this->container['restricted_active'] = isset($data['restricted_active']) ? $data['restricted_active'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['technical_contact_addresses'] = isset($data['technical_contact_addresses']) ? $data['technical_contact_addresses'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
        }

        return $invalidProperties;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    

    /**
     * Gets account
     *
     * @return \Wallee\Sdk\Model\Account
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Wallee\Sdk\Model\Account $account The account that the space belongs to.
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }
    

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Whether this space and all its parent accounts are active.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }
    

    /**
     * Gets active_or_restricted_active
     *
     * @return bool
     */
    public function getActiveOrRestrictedActive()
    {
        return $this->container['active_or_restricted_active'];
    }

    /**
     * Sets active_or_restricted_active
     *
     * @param bool $active_or_restricted_active Whether this space and all its parent accounts are active or restricted active.
     *
     * @return $this
     */
    public function setActiveOrRestrictedActive($active_or_restricted_active)
    {
        $this->container['active_or_restricted_active'] = $active_or_restricted_active;

        return $this;
    }
    

    /**
     * Gets created_by
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int $created_by The ID of the user the space was created by.
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }
    

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The date and time when the space was created.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets database
     *
     * @return \Wallee\Sdk\Model\TenantDatabase
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param \Wallee\Sdk\Model\TenantDatabase $database The database the space is connected to and that holds the space's data.
     *
     * @return $this
     */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;

        return $this;
    }
    

    /**
     * Gets deleted_by
     *
     * @return int
     */
    public function getDeletedBy()
    {
        return $this->container['deleted_by'];
    }

    /**
     * Sets deleted_by
     *
     * @param int $deleted_by The ID of the user the space was deleted by.
     *
     * @return $this
     */
    public function setDeletedBy($deleted_by)
    {
        $this->container['deleted_by'] = $deleted_by;

        return $this;
    }
    

    /**
     * Gets deleted_on
     *
     * @return \DateTime
     */
    public function getDeletedOn()
    {
        return $this->container['deleted_on'];
    }

    /**
     * Sets deleted_on
     *
     * @param \DateTime $deleted_on The date and time when the space was deleted.
     *
     * @return $this
     */
    public function setDeletedOn($deleted_on)
    {
        $this->container['deleted_on'] = $deleted_on;

        return $this;
    }
    

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id A unique identifier for the object.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    

    /**
     * Gets last_modified_date
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param \DateTime $last_modified_date The date and time when the object was last modified.
     *
     * @return $this
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name used to identify the space.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Space., must be smaller than or equal to 200.');
        }
        if (!is_null($name) && (mb_strlen($name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Space., must be bigger than or equal to 3.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime $planned_purge_date The date and time when the object is planned to be permanently removed. If the value is empty, the object will not be removed.
     *
     * @return $this
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }
    

    /**
     * Gets postal_address
     *
     * @return \Wallee\Sdk\Model\SpaceAddress
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Wallee\Sdk\Model\SpaceAddress $postal_address The address that is used in communication with clients for example in emails, documents, etc.
     *
     * @return $this
     */
    public function setPostalAddress($postal_address)
    {
        $this->container['postal_address'] = $postal_address;

        return $this;
    }
    

    /**
     * Gets primary_currency
     *
     * @return string
     */
    public function getPrimaryCurrency()
    {
        return $this->container['primary_currency'];
    }

    /**
     * Sets primary_currency
     *
     * @param string $primary_currency The currency that is used to display aggregated amounts in the space.
     *
     * @return $this
     */
    public function setPrimaryCurrency($primary_currency)
    {
        $this->container['primary_currency'] = $primary_currency;

        return $this;
    }
    

    /**
     * Gets request_limit
     *
     * @return int
     */
    public function getRequestLimit()
    {
        return $this->container['request_limit'];
    }

    /**
     * Sets request_limit
     *
     * @param int $request_limit The maximum number of API requests that are accepted within two minutes. This limit can only be changed with special privileges.
     *
     * @return $this
     */
    public function setRequestLimit($request_limit)
    {
        $this->container['request_limit'] = $request_limit;

        return $this;
    }
    

    /**
     * Gets restricted_active
     *
     * @return bool
     */
    public function getRestrictedActive()
    {
        return $this->container['restricted_active'];
    }

    /**
     * Sets restricted_active
     *
     * @param bool $restricted_active Whether this space and all its parent accounts are active or restricted active. There is least one parent account that is restricted active.
     *
     * @return $this
     */
    public function setRestrictedActive($restricted_active)
    {
        $this->container['restricted_active'] = $restricted_active;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\CreationEntityState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\CreationEntityState $state The object's current state.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets technical_contact_addresses
     *
     * @return string[]
     */
    public function getTechnicalContactAddresses()
    {
        return $this->container['technical_contact_addresses'];
    }

    /**
     * Sets technical_contact_addresses
     *
     * @param string[] $technical_contact_addresses The email address that will receive messages about technical issues and errors that occur in the space.
     *
     * @return $this
     */
    public function setTechnicalContactAddresses($technical_contact_addresses)
    {
        $this->container['technical_contact_addresses'] = $technical_contact_addresses;

        return $this;
    }
    

    /**
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone The time zone that is used to schedule and run background processes. This does not affect the formatting of dates in the user interface.
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version is used for optimistic locking and incremented whenever the object is updated.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



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
 * PaymentContract model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentContract implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account' => 'int',
        'activated_on' => '\DateTime',
        'contract_identifier' => 'string',
        'contract_type' => '\Wallee\Sdk\Model\PaymentContractType',
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'external_id' => 'string',
        'id' => 'int',
        'last_modified_date' => '\DateTime',
        'rejected_on' => '\DateTime',
        'rejection_reason' => '\Wallee\Sdk\Model\FailureReason',
        'start_terminating_on' => '\DateTime',
        'state' => '\Wallee\Sdk\Model\PaymentContractState',
        'terminated_by' => 'int',
        'terminated_on' => '\DateTime',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account' => 'int64',
        'activated_on' => 'date-time',
        'contract_identifier' => null,
        'contract_type' => null,
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'external_id' => null,
        'id' => 'int64',
        'last_modified_date' => 'date-time',
        'rejected_on' => 'date-time',
        'rejection_reason' => null,
        'start_terminating_on' => 'date-time',
        'state' => null,
        'terminated_by' => 'int64',
        'terminated_on' => 'date-time',
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
        'activated_on' => 'activatedOn',
        'contract_identifier' => 'contractIdentifier',
        'contract_type' => 'contractType',
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'external_id' => 'externalId',
        'id' => 'id',
        'last_modified_date' => 'lastModifiedDate',
        'rejected_on' => 'rejectedOn',
        'rejection_reason' => 'rejectionReason',
        'start_terminating_on' => 'startTerminatingOn',
        'state' => 'state',
        'terminated_by' => 'terminatedBy',
        'terminated_on' => 'terminatedOn',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'activated_on' => 'setActivatedOn',
        'contract_identifier' => 'setContractIdentifier',
        'contract_type' => 'setContractType',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'external_id' => 'setExternalId',
        'id' => 'setId',
        'last_modified_date' => 'setLastModifiedDate',
        'rejected_on' => 'setRejectedOn',
        'rejection_reason' => 'setRejectionReason',
        'start_terminating_on' => 'setStartTerminatingOn',
        'state' => 'setState',
        'terminated_by' => 'setTerminatedBy',
        'terminated_on' => 'setTerminatedOn',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'activated_on' => 'getActivatedOn',
        'contract_identifier' => 'getContractIdentifier',
        'contract_type' => 'getContractType',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'external_id' => 'getExternalId',
        'id' => 'getId',
        'last_modified_date' => 'getLastModifiedDate',
        'rejected_on' => 'getRejectedOn',
        'rejection_reason' => 'getRejectionReason',
        'start_terminating_on' => 'getStartTerminatingOn',
        'state' => 'getState',
        'terminated_by' => 'getTerminatedBy',
        'terminated_on' => 'getTerminatedOn',
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
        
        $this->container['activated_on'] = isset($data['activated_on']) ? $data['activated_on'] : null;
        
        $this->container['contract_identifier'] = isset($data['contract_identifier']) ? $data['contract_identifier'] : null;
        
        $this->container['contract_type'] = isset($data['contract_type']) ? $data['contract_type'] : null;
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        
        $this->container['rejected_on'] = isset($data['rejected_on']) ? $data['rejected_on'] : null;
        
        $this->container['rejection_reason'] = isset($data['rejection_reason']) ? $data['rejection_reason'] : null;
        
        $this->container['start_terminating_on'] = isset($data['start_terminating_on']) ? $data['start_terminating_on'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['terminated_by'] = isset($data['terminated_by']) ? $data['terminated_by'] : null;
        
        $this->container['terminated_on'] = isset($data['terminated_on']) ? $data['terminated_on'] : null;
        
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
     * @return int
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param int $account This account that the contract belongs to.
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }
    

    /**
     * Gets activated_on
     *
     * @return \DateTime
     */
    public function getActivatedOn()
    {
        return $this->container['activated_on'];
    }

    /**
     * Sets activated_on
     *
     * @param \DateTime $activated_on The date and time when the contract was activated.
     *
     * @return $this
     */
    public function setActivatedOn($activated_on)
    {
        $this->container['activated_on'] = $activated_on;

        return $this;
    }
    

    /**
     * Gets contract_identifier
     *
     * @return string
     */
    public function getContractIdentifier()
    {
        return $this->container['contract_identifier'];
    }

    /**
     * Sets contract_identifier
     *
     * @param string $contract_identifier The identifier of the contract.
     *
     * @return $this
     */
    public function setContractIdentifier($contract_identifier)
    {
        $this->container['contract_identifier'] = $contract_identifier;

        return $this;
    }
    

    /**
     * Gets contract_type
     *
     * @return \Wallee\Sdk\Model\PaymentContractType
     */
    public function getContractType()
    {
        return $this->container['contract_type'];
    }

    /**
     * Sets contract_type
     *
     * @param \Wallee\Sdk\Model\PaymentContractType $contract_type The type of the contract.
     *
     * @return $this
     */
    public function setContractType($contract_type)
    {
        $this->container['contract_type'] = $contract_type;

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
     * @param int $created_by The ID of the user the contract was created by.
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
     * @param \DateTime $created_on The date and time when the object was created.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id A client generated nonce which identifies the entity to be created. Subsequent creation requests with the same external ID will not create new entities but return the initially created entity instead.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

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
     * Gets rejected_on
     *
     * @return \DateTime
     */
    public function getRejectedOn()
    {
        return $this->container['rejected_on'];
    }

    /**
     * Sets rejected_on
     *
     * @param \DateTime $rejected_on The date and time when the contract was rejected.
     *
     * @return $this
     */
    public function setRejectedOn($rejected_on)
    {
        $this->container['rejected_on'] = $rejected_on;

        return $this;
    }
    

    /**
     * Gets rejection_reason
     *
     * @return \Wallee\Sdk\Model\FailureReason
     */
    public function getRejectionReason()
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason
     *
     * @param \Wallee\Sdk\Model\FailureReason $rejection_reason The reason for rejecting the contract.
     *
     * @return $this
     */
    public function setRejectionReason($rejection_reason)
    {
        $this->container['rejection_reason'] = $rejection_reason;

        return $this;
    }
    

    /**
     * Gets start_terminating_on
     *
     * @return \DateTime
     */
    public function getStartTerminatingOn()
    {
        return $this->container['start_terminating_on'];
    }

    /**
     * Sets start_terminating_on
     *
     * @param \DateTime $start_terminating_on The date and time when the termination process of the contract was started.
     *
     * @return $this
     */
    public function setStartTerminatingOn($start_terminating_on)
    {
        $this->container['start_terminating_on'] = $start_terminating_on;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\PaymentContractState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\PaymentContractState $state The object's current state.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets terminated_by
     *
     * @return int
     */
    public function getTerminatedBy()
    {
        return $this->container['terminated_by'];
    }

    /**
     * Sets terminated_by
     *
     * @param int $terminated_by The ID of the user the contract was terminated by.
     *
     * @return $this
     */
    public function setTerminatedBy($terminated_by)
    {
        $this->container['terminated_by'] = $terminated_by;

        return $this;
    }
    

    /**
     * Gets terminated_on
     *
     * @return \DateTime
     */
    public function getTerminatedOn()
    {
        return $this->container['terminated_on'];
    }

    /**
     * Sets terminated_on
     *
     * @param \DateTime $terminated_on The date and time when the contract was terminated.
     *
     * @return $this
     */
    public function setTerminatedOn($terminated_on)
    {
        $this->container['terminated_on'] = $terminated_on;

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



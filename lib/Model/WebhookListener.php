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
 * WebhookListener model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class WebhookListener implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookListener';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enable_payload_signature_and_state' => 'bool',
        'entity' => 'int',
        'entity_states' => 'string[]',
        'id' => 'int',
        'identity' => '\Wallee\Sdk\Model\WebhookIdentity',
        'linked_space_id' => 'int',
        'name' => 'string',
        'notify_every_change' => 'bool',
        'planned_purge_date' => '\DateTime',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'url' => '\Wallee\Sdk\Model\WebhookUrl',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enable_payload_signature_and_state' => null,
        'entity' => 'int64',
        'entity_states' => null,
        'id' => 'int64',
        'identity' => null,
        'linked_space_id' => 'int64',
        'name' => null,
        'notify_every_change' => null,
        'planned_purge_date' => 'date-time',
        'state' => null,
        'url' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'enable_payload_signature_and_state' => 'enablePayloadSignatureAndState',
        'entity' => 'entity',
        'entity_states' => 'entityStates',
        'id' => 'id',
        'identity' => 'identity',
        'linked_space_id' => 'linkedSpaceId',
        'name' => 'name',
        'notify_every_change' => 'notifyEveryChange',
        'planned_purge_date' => 'plannedPurgeDate',
        'state' => 'state',
        'url' => 'url',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_payload_signature_and_state' => 'setEnablePayloadSignatureAndState',
        'entity' => 'setEntity',
        'entity_states' => 'setEntityStates',
        'id' => 'setId',
        'identity' => 'setIdentity',
        'linked_space_id' => 'setLinkedSpaceId',
        'name' => 'setName',
        'notify_every_change' => 'setNotifyEveryChange',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'state' => 'setState',
        'url' => 'setUrl',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_payload_signature_and_state' => 'getEnablePayloadSignatureAndState',
        'entity' => 'getEntity',
        'entity_states' => 'getEntityStates',
        'id' => 'getId',
        'identity' => 'getIdentity',
        'linked_space_id' => 'getLinkedSpaceId',
        'name' => 'getName',
        'notify_every_change' => 'getNotifyEveryChange',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'state' => 'getState',
        'url' => 'getUrl',
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
        
        $this->container['enable_payload_signature_and_state'] = isset($data['enable_payload_signature_and_state']) ? $data['enable_payload_signature_and_state'] : null;
        
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        
        $this->container['entity_states'] = isset($data['entity_states']) ? $data['entity_states'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['notify_every_change'] = isset($data['notify_every_change']) ? $data['notify_every_change'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
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
     * Gets enable_payload_signature_and_state
     *
     * @return bool
     */
    public function getEnablePayloadSignatureAndState()
    {
        return $this->container['enable_payload_signature_and_state'];
    }

    /**
     * Sets enable_payload_signature_and_state
     *
     * @param bool $enable_payload_signature_and_state Whether signature header and 'state' property are enabled in webhook payload.
     *
     * @return $this
     */
    public function setEnablePayloadSignatureAndState($enable_payload_signature_and_state)
    {
        $this->container['enable_payload_signature_and_state'] = $enable_payload_signature_and_state;

        return $this;
    }
    

    /**
     * Gets entity
     *
     * @return int
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param int $entity The entity that is to be monitored.
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }
    

    /**
     * Gets entity_states
     *
     * @return string[]
     */
    public function getEntityStates()
    {
        return $this->container['entity_states'];
    }

    /**
     * Sets entity_states
     *
     * @param string[] $entity_states The entity's target states that are to be monitored.
     *
     * @return $this
     */
    public function setEntityStates($entity_states)
    {
        $this->container['entity_states'] = $entity_states;

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
     * Gets identity
     *
     * @return \Wallee\Sdk\Model\WebhookIdentity
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param \Wallee\Sdk\Model\WebhookIdentity $identity The identity used to sign messages.
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }
    

    /**
     * Gets linked_space_id
     *
     * @return int
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int $linked_space_id The ID of the space this object belongs to.
     *
     * @return $this
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        $this->container['linked_space_id'] = $linked_space_id;

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
     * @param string $name The name used to identify the webhook listener.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WebhookListener., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets notify_every_change
     *
     * @return bool
     */
    public function getNotifyEveryChange()
    {
        return $this->container['notify_every_change'];
    }

    /**
     * Sets notify_every_change
     *
     * @param bool $notify_every_change Whether every update of the entity or only state changes are to be monitored.
     *
     * @return $this
     */
    public function setNotifyEveryChange($notify_every_change)
    {
        $this->container['notify_every_change'] = $notify_every_change;

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
     * Gets url
     *
     * @return \Wallee\Sdk\Model\WebhookUrl
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param \Wallee\Sdk\Model\WebhookUrl $url The URL where notifications about entity changes are sent to.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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



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
 * TransactionInvoiceComment model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionInvoiceComment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionInvoiceComment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'content' => 'string',
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'edited_by' => 'int',
        'edited_on' => '\DateTime',
        'id' => 'int',
        'linked_space_id' => 'int',
        'pinned' => 'bool',
        'transaction_invoice' => 'int',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'content' => null,
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'edited_by' => 'int64',
        'edited_on' => 'date-time',
        'id' => 'int64',
        'linked_space_id' => 'int64',
        'pinned' => null,
        'transaction_invoice' => 'int64',
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'content' => 'content',
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'edited_by' => 'editedBy',
        'edited_on' => 'editedOn',
        'id' => 'id',
        'linked_space_id' => 'linkedSpaceId',
        'pinned' => 'pinned',
        'transaction_invoice' => 'transactionInvoice',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'edited_by' => 'setEditedBy',
        'edited_on' => 'setEditedOn',
        'id' => 'setId',
        'linked_space_id' => 'setLinkedSpaceId',
        'pinned' => 'setPinned',
        'transaction_invoice' => 'setTransactionInvoice',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'edited_by' => 'getEditedBy',
        'edited_on' => 'getEditedOn',
        'id' => 'getId',
        'linked_space_id' => 'getLinkedSpaceId',
        'pinned' => 'getPinned',
        'transaction_invoice' => 'getTransactionInvoice',
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
        
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['edited_by'] = isset($data['edited_by']) ? $data['edited_by'] : null;
        
        $this->container['edited_on'] = isset($data['edited_on']) ? $data['edited_on'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['pinned'] = isset($data['pinned']) ? $data['pinned'] : null;
        
        $this->container['transaction_invoice'] = isset($data['transaction_invoice']) ? $data['transaction_invoice'] : null;
        
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

        if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 262144)) {
            $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 262144.";
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
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content The comment's actual content.
     *
     * @return $this
     */
    public function setContent($content)
    {
        if (!is_null($content) && (mb_strlen($content) > 262144)) {
            throw new \InvalidArgumentException('invalid length for $content when calling TransactionInvoiceComment., must be smaller than or equal to 262144.');
        }

        $this->container['content'] = $content;

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
     * @param int $created_by The ID of the user the comment was created by.
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
     * Gets edited_by
     *
     * @return int
     */
    public function getEditedBy()
    {
        return $this->container['edited_by'];
    }

    /**
     * Sets edited_by
     *
     * @param int $edited_by The ID of the user the comment was last updated by.
     *
     * @return $this
     */
    public function setEditedBy($edited_by)
    {
        $this->container['edited_by'] = $edited_by;

        return $this;
    }
    

    /**
     * Gets edited_on
     *
     * @return \DateTime
     */
    public function getEditedOn()
    {
        return $this->container['edited_on'];
    }

    /**
     * Sets edited_on
     *
     * @param \DateTime $edited_on The date and time when the comment was last updated.
     *
     * @return $this
     */
    public function setEditedOn($edited_on)
    {
        $this->container['edited_on'] = $edited_on;

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
     * Gets pinned
     *
     * @return bool
     */
    public function getPinned()
    {
        return $this->container['pinned'];
    }

    /**
     * Sets pinned
     *
     * @param bool $pinned Whether the comment is pinned to the top.
     *
     * @return $this
     */
    public function setPinned($pinned)
    {
        $this->container['pinned'] = $pinned;

        return $this;
    }
    

    /**
     * Gets transaction_invoice
     *
     * @return int
     */
    public function getTransactionInvoice()
    {
        return $this->container['transaction_invoice'];
    }

    /**
     * Sets transaction_invoice
     *
     * @param int $transaction_invoice 
     *
     * @return $this
     */
    public function setTransactionInvoice($transaction_invoice)
    {
        $this->container['transaction_invoice'] = $transaction_invoice;

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



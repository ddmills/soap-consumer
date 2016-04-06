<?php

class ArrayOfEntity implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Entity[] $Entity
     */
    protected $Entity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Entity[]
     */
    public function getEntity()
    {
      return $this->Entity;
    }

    /**
     * @param Entity[] $Entity
     * @return ArrayOfEntity
     */
    public function setEntity(array $Entity = null)
    {
      $this->Entity = $Entity;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Entity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Entity
     */
    public function offsetGet($offset)
    {
      return $this->Entity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Entity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Entity[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Entity[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Entity Return the current element
     */
    public function current()
    {
      return current($this->Entity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Entity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Entity);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Entity);
    }

    /**
     * Countable implementation
     *
     * @return Entity Return count of elements
     */
    public function count()
    {
      return count($this->Entity);
    }

}

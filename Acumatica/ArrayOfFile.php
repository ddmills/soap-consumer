<?php

class ArrayOfFile implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var File[] $File
     */
    protected $File = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return File[]
     */
    public function getFile()
    {
      return $this->File;
    }

    /**
     * @param File[] $File
     * @return ArrayOfFile
     */
    public function setFile(array $File = null)
    {
      $this->File = $File;
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
      return isset($this->File[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return File
     */
    public function offsetGet($offset)
    {
      return $this->File[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param File $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->File[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->File[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return File Return the current element
     */
    public function current()
    {
      return current($this->File);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->File);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->File);
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
      reset($this->File);
    }

    /**
     * Countable implementation
     *
     * @return File Return count of elements
     */
    public function count()
    {
      return count($this->File);
    }

}

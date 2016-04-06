<?php

class AttributeValue extends Entity
{

    /**
     * @var StringValue $AttributeID
     */
    protected $AttributeID = null;

    /**
     * @var StringValue $Value
     */
    protected $Value = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return StringValue
     */
    public function getAttributeID()
    {
      return $this->AttributeID;
    }

    /**
     * @param StringValue $AttributeID
     * @return AttributeValue
     */
    public function setAttributeID($AttributeID)
    {
      $this->AttributeID = $AttributeID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param StringValue $Value
     * @return AttributeValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

<?php

class AttributeDefinition extends Entity
{

    /**
     * @var StringValue $AttributeID
     */
    protected $AttributeID = null;

    /**
     * @var StringValue $ControlType
     */
    protected $ControlType = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $EntryMask
     */
    protected $EntryMask = null;

    /**
     * @var BooleanValue $Internal
     */
    protected $Internal = null;

    /**
     * @var StringValue $RegExp
     */
    protected $RegExp = null;

    /**
     * @var Values $Values
     */
    protected $Values = null;

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
     * @return AttributeDefinition
     */
    public function setAttributeID($AttributeID)
    {
      $this->AttributeID = $AttributeID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getControlType()
    {
      return $this->ControlType;
    }

    /**
     * @param StringValue $ControlType
     * @return AttributeDefinition
     */
    public function setControlType($ControlType)
    {
      $this->ControlType = $ControlType;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringValue $Description
     * @return AttributeDefinition
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getEntryMask()
    {
      return $this->EntryMask;
    }

    /**
     * @param StringValue $EntryMask
     * @return AttributeDefinition
     */
    public function setEntryMask($EntryMask)
    {
      $this->EntryMask = $EntryMask;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getInternal()
    {
      return $this->Internal;
    }

    /**
     * @param BooleanValue $Internal
     * @return AttributeDefinition
     */
    public function setInternal($Internal)
    {
      $this->Internal = $Internal;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getRegExp()
    {
      return $this->RegExp;
    }

    /**
     * @param StringValue $RegExp
     * @return AttributeDefinition
     */
    public function setRegExp($RegExp)
    {
      $this->RegExp = $RegExp;
      return $this;
    }

    /**
     * @return Values
     */
    public function getValues()
    {
      return $this->Values;
    }

    /**
     * @param Values $Values
     * @return AttributeDefinition
     */
    public function setValues($Values)
    {
      $this->Values = $Values;
      return $this;
    }

}

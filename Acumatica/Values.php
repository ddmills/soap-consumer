<?php

class Values
{

    /**
     * @var AttributeDefinitionValue $AttributeDefinitionValue
     */
    protected $AttributeDefinitionValue = null;

    /**
     * @param AttributeDefinitionValue $AttributeDefinitionValue
     */
    public function __construct($AttributeDefinitionValue)
    {
      $this->AttributeDefinitionValue = $AttributeDefinitionValue;
    }

    /**
     * @return AttributeDefinitionValue
     */
    public function getAttributeDefinitionValue()
    {
      return $this->AttributeDefinitionValue;
    }

    /**
     * @param AttributeDefinitionValue $AttributeDefinitionValue
     * @return Values
     */
    public function setAttributeDefinitionValue($AttributeDefinitionValue)
    {
      $this->AttributeDefinitionValue = $AttributeDefinitionValue;
      return $this;
    }

}

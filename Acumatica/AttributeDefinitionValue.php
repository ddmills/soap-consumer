<?php

class AttributeDefinitionValue extends Entity
{

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var BooleanValue $Disabled
     */
    protected $Disabled = null;

    /**
     * @var ShortValue $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @var StringValue $ValueID
     */
    protected $ValueID = null;

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
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringValue $Description
     * @return AttributeDefinitionValue
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getDisabled()
    {
      return $this->Disabled;
    }

    /**
     * @param BooleanValue $Disabled
     * @return AttributeDefinitionValue
     */
    public function setDisabled($Disabled)
    {
      $this->Disabled = $Disabled;
      return $this;
    }

    /**
     * @return ShortValue
     */
    public function getSortOrder()
    {
      return $this->SortOrder;
    }

    /**
     * @param ShortValue $SortOrder
     * @return AttributeDefinitionValue
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getValueID()
    {
      return $this->ValueID;
    }

    /**
     * @param StringValue $ValueID
     * @return AttributeDefinitionValue
     */
    public function setValueID($ValueID)
    {
      $this->ValueID = $ValueID;
      return $this;
    }

}

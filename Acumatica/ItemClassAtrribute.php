<?php

class ItemClassAtrribute extends Entity
{

    /**
     * @var StringValue $AttributeID
     */
    protected $AttributeID = null;

    /**
     * @var BooleanValue $Required
     */
    protected $Required = null;

    /**
     * @var ShortValue $SortOrder
     */
    protected $SortOrder = null;

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
     * @return ItemClassAtrribute
     */
    public function setAttributeID($AttributeID)
    {
      $this->AttributeID = $AttributeID;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getRequired()
    {
      return $this->Required;
    }

    /**
     * @param BooleanValue $Required
     * @return ItemClassAtrribute
     */
    public function setRequired($Required)
    {
      $this->Required = $Required;
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
     * @return ItemClassAtrribute
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

}

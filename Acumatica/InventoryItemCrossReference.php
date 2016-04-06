<?php

class InventoryItemCrossReference extends Entity
{

    /**
     * @var StringValue $AlternateID
     */
    protected $AlternateID = null;

    /**
     * @var StringValue $AlternateType
     */
    protected $AlternateType = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $VendorCustomer
     */
    protected $VendorCustomer = null;

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
    public function getAlternateID()
    {
      return $this->AlternateID;
    }

    /**
     * @param StringValue $AlternateID
     * @return InventoryItemCrossReference
     */
    public function setAlternateID($AlternateID)
    {
      $this->AlternateID = $AlternateID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getAlternateType()
    {
      return $this->AlternateType;
    }

    /**
     * @param StringValue $AlternateType
     * @return InventoryItemCrossReference
     */
    public function setAlternateType($AlternateType)
    {
      $this->AlternateType = $AlternateType;
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
     * @return InventoryItemCrossReference
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getVendorCustomer()
    {
      return $this->VendorCustomer;
    }

    /**
     * @param StringValue $VendorCustomer
     * @return InventoryItemCrossReference
     */
    public function setVendorCustomer($VendorCustomer)
    {
      $this->VendorCustomer = $VendorCustomer;
      return $this;
    }

}

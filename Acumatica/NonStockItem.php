<?php

class NonStockItem extends Entity
{

    /**
     * @var CrossReferences $CrossReferences
     */
    protected $CrossReferences = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var StringValue $ItemClass
     */
    protected $ItemClass = null;

    /**
     * @var StringValue $ItemType
     */
    protected $ItemType = null;

    /**
     * @var BooleanValue $RequireReceipt
     */
    protected $RequireReceipt = null;

    /**
     * @var BooleanValue $RequireShipment
     */
    protected $RequireShipment = null;

    /**
     * @var VendorDetails $VendorDetails
     */
    protected $VendorDetails = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return CrossReferences
     */
    public function getCrossReferences()
    {
      return $this->CrossReferences;
    }

    /**
     * @param CrossReferences $CrossReferences
     * @return NonStockItem
     */
    public function setCrossReferences($CrossReferences)
    {
      $this->CrossReferences = $CrossReferences;
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
     * @return NonStockItem
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getInventoryID()
    {
      return $this->InventoryID;
    }

    /**
     * @param StringValue $InventoryID
     * @return NonStockItem
     */
    public function setInventoryID($InventoryID)
    {
      $this->InventoryID = $InventoryID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getItemClass()
    {
      return $this->ItemClass;
    }

    /**
     * @param StringValue $ItemClass
     * @return NonStockItem
     */
    public function setItemClass($ItemClass)
    {
      $this->ItemClass = $ItemClass;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getItemType()
    {
      return $this->ItemType;
    }

    /**
     * @param StringValue $ItemType
     * @return NonStockItem
     */
    public function setItemType($ItemType)
    {
      $this->ItemType = $ItemType;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getRequireReceipt()
    {
      return $this->RequireReceipt;
    }

    /**
     * @param BooleanValue $RequireReceipt
     * @return NonStockItem
     */
    public function setRequireReceipt($RequireReceipt)
    {
      $this->RequireReceipt = $RequireReceipt;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getRequireShipment()
    {
      return $this->RequireShipment;
    }

    /**
     * @param BooleanValue $RequireShipment
     * @return NonStockItem
     */
    public function setRequireShipment($RequireShipment)
    {
      $this->RequireShipment = $RequireShipment;
      return $this;
    }

    /**
     * @return VendorDetails
     */
    public function getVendorDetails()
    {
      return $this->VendorDetails;
    }

    /**
     * @param VendorDetails $VendorDetails
     * @return NonStockItem
     */
    public function setVendorDetails($VendorDetails)
    {
      $this->VendorDetails = $VendorDetails;
      return $this;
    }

}

<?php

class StockItem extends Entity
{

    /**
     * @var Attributes $Attributes
     */
    protected $Attributes = null;

    /**
     * @var StringValue $BaseUOM
     */
    protected $BaseUOM = null;

    /**
     * @var CrossReferences $CrossReferences
     */
    protected $CrossReferences = null;

    /**
     * @var StringValue $DefaultIssueLocationID
     */
    protected $DefaultIssueLocationID = null;

    /**
     * @var StringValue $DefaultReceiptLocationID
     */
    protected $DefaultReceiptLocationID = null;

    /**
     * @var StringValue $DefaultWarehouseID
     */
    protected $DefaultWarehouseID = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $ImageUrl
     */
    protected $ImageUrl = null;

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var BooleanValue $IsAKit
     */
    protected $IsAKit = null;

    /**
     * @var StringValue $ItemClass
     */
    protected $ItemClass = null;

    /**
     * @var StringValue $ItemStatus
     */
    protected $ItemStatus = null;

    /**
     * @var StringValue $ItemType
     */
    protected $ItemType = null;

    /**
     * @var DateTimeValue $LastModified
     */
    protected $LastModified = null;

    /**
     * @var StringValue $LotSerialClass
     */
    protected $LotSerialClass = null;

    /**
     * @var StringValue $PurchaseUOM
     */
    protected $PurchaseUOM = null;

    /**
     * @var StringValue $SalesUOM
     */
    protected $SalesUOM = null;

    /**
     * @var UOMConversions $UOMConversions
     */
    protected $UOMConversions = null;

    /**
     * @var VendorDetails $VendorDetails
     */
    protected $VendorDetails = null;

    /**
     * @var DecimalValue $Volume
     */
    protected $Volume = null;

    /**
     * @var WarehouseDetails $WarehouseDetails
     */
    protected $WarehouseDetails = null;

    /**
     * @var DecimalValue $Weight
     */
    protected $Weight = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return Attributes
     */
    public function getAttributes()
    {
      return $this->Attributes;
    }

    /**
     * @param Attributes $Attributes
     * @return StockItem
     */
    public function setAttributes($Attributes)
    {
      $this->Attributes = $Attributes;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getBaseUOM()
    {
      return $this->BaseUOM;
    }

    /**
     * @param StringValue $BaseUOM
     * @return StockItem
     */
    public function setBaseUOM($BaseUOM)
    {
      $this->BaseUOM = $BaseUOM;
      return $this;
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
     * @return StockItem
     */
    public function setCrossReferences($CrossReferences)
    {
      $this->CrossReferences = $CrossReferences;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDefaultIssueLocationID()
    {
      return $this->DefaultIssueLocationID;
    }

    /**
     * @param StringValue $DefaultIssueLocationID
     * @return StockItem
     */
    public function setDefaultIssueLocationID($DefaultIssueLocationID)
    {
      $this->DefaultIssueLocationID = $DefaultIssueLocationID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDefaultReceiptLocationID()
    {
      return $this->DefaultReceiptLocationID;
    }

    /**
     * @param StringValue $DefaultReceiptLocationID
     * @return StockItem
     */
    public function setDefaultReceiptLocationID($DefaultReceiptLocationID)
    {
      $this->DefaultReceiptLocationID = $DefaultReceiptLocationID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDefaultWarehouseID()
    {
      return $this->DefaultWarehouseID;
    }

    /**
     * @param StringValue $DefaultWarehouseID
     * @return StockItem
     */
    public function setDefaultWarehouseID($DefaultWarehouseID)
    {
      $this->DefaultWarehouseID = $DefaultWarehouseID;
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
     * @return StockItem
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getImageUrl()
    {
      return $this->ImageUrl;
    }

    /**
     * @param StringValue $ImageUrl
     * @return StockItem
     */
    public function setImageUrl($ImageUrl)
    {
      $this->ImageUrl = $ImageUrl;
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
     * @return StockItem
     */
    public function setInventoryID($InventoryID)
    {
      $this->InventoryID = $InventoryID;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getIsAKit()
    {
      return $this->IsAKit;
    }

    /**
     * @param BooleanValue $IsAKit
     * @return StockItem
     */
    public function setIsAKit($IsAKit)
    {
      $this->IsAKit = $IsAKit;
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
     * @return StockItem
     */
    public function setItemClass($ItemClass)
    {
      $this->ItemClass = $ItemClass;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getItemStatus()
    {
      return $this->ItemStatus;
    }

    /**
     * @param StringValue $ItemStatus
     * @return StockItem
     */
    public function setItemStatus($ItemStatus)
    {
      $this->ItemStatus = $ItemStatus;
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
     * @return StockItem
     */
    public function setItemType($ItemType)
    {
      $this->ItemType = $ItemType;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getLastModified()
    {
      return $this->LastModified;
    }

    /**
     * @param DateTimeValue $LastModified
     * @return StockItem
     */
    public function setLastModified($LastModified)
    {
      $this->LastModified = $LastModified;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLotSerialClass()
    {
      return $this->LotSerialClass;
    }

    /**
     * @param StringValue $LotSerialClass
     * @return StockItem
     */
    public function setLotSerialClass($LotSerialClass)
    {
      $this->LotSerialClass = $LotSerialClass;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPurchaseUOM()
    {
      return $this->PurchaseUOM;
    }

    /**
     * @param StringValue $PurchaseUOM
     * @return StockItem
     */
    public function setPurchaseUOM($PurchaseUOM)
    {
      $this->PurchaseUOM = $PurchaseUOM;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getSalesUOM()
    {
      return $this->SalesUOM;
    }

    /**
     * @param StringValue $SalesUOM
     * @return StockItem
     */
    public function setSalesUOM($SalesUOM)
    {
      $this->SalesUOM = $SalesUOM;
      return $this;
    }

    /**
     * @return UOMConversions
     */
    public function getUOMConversions()
    {
      return $this->UOMConversions;
    }

    /**
     * @param UOMConversions $UOMConversions
     * @return StockItem
     */
    public function setUOMConversions($UOMConversions)
    {
      $this->UOMConversions = $UOMConversions;
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
     * @return StockItem
     */
    public function setVendorDetails($VendorDetails)
    {
      $this->VendorDetails = $VendorDetails;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getVolume()
    {
      return $this->Volume;
    }

    /**
     * @param DecimalValue $Volume
     * @return StockItem
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
      return $this;
    }

    /**
     * @return WarehouseDetails
     */
    public function getWarehouseDetails()
    {
      return $this->WarehouseDetails;
    }

    /**
     * @param WarehouseDetails $WarehouseDetails
     * @return StockItem
     */
    public function setWarehouseDetails($WarehouseDetails)
    {
      $this->WarehouseDetails = $WarehouseDetails;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param DecimalValue $Weight
     * @return StockItem
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

}

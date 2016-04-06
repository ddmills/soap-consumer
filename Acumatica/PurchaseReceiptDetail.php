<?php

class PurchaseReceiptDetail extends Entity
{

    /**
     * @var StringValue $Branch
     */
    protected $Branch = null;

    /**
     * @var DateTimeValue $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var DecimalValue $ExtCost
     */
    protected $ExtCost = null;

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var IntValue $LineNbr
     */
    protected $LineNbr = null;

    /**
     * @var StringValue $LineType
     */
    protected $LineType = null;

    /**
     * @var StringValue $Location
     */
    protected $Location = null;

    /**
     * @var StringValue $LotSerialNbr
     */
    protected $LotSerialNbr = null;

    /**
     * @var DecimalValue $OpenQty
     */
    protected $OpenQty = null;

    /**
     * @var DecimalValue $OrderedQty
     */
    protected $OrderedQty = null;

    /**
     * @var IntValue $POLineNbr
     */
    protected $POLineNbr = null;

    /**
     * @var StringValue $POOrderNbr
     */
    protected $POOrderNbr = null;

    /**
     * @var StringValue $POOrderType
     */
    protected $POOrderType = null;

    /**
     * @var StringValue $Project
     */
    protected $Project = null;

    /**
     * @var StringValue $ProjectTask
     */
    protected $ProjectTask = null;

    /**
     * @var DecimalValue $ReceiptQty
     */
    protected $ReceiptQty = null;

    /**
     * @var StringValue $Subitem
     */
    protected $Subitem = null;

    /**
     * @var StringValue $TransactionDescr
     */
    protected $TransactionDescr = null;

    /**
     * @var DecimalValue $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var StringValue $UOM
     */
    protected $UOM = null;

    /**
     * @var StringValue $Warehouse
     */
    protected $Warehouse = null;

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
    public function getBranch()
    {
      return $this->Branch;
    }

    /**
     * @param StringValue $Branch
     * @return PurchaseReceiptDetail
     */
    public function setBranch($Branch)
    {
      $this->Branch = $Branch;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param DateTimeValue $ExpirationDate
     * @return PurchaseReceiptDetail
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getExtCost()
    {
      return $this->ExtCost;
    }

    /**
     * @param DecimalValue $ExtCost
     * @return PurchaseReceiptDetail
     */
    public function setExtCost($ExtCost)
    {
      $this->ExtCost = $ExtCost;
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
     * @return PurchaseReceiptDetail
     */
    public function setInventoryID($InventoryID)
    {
      $this->InventoryID = $InventoryID;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getLineNbr()
    {
      return $this->LineNbr;
    }

    /**
     * @param IntValue $LineNbr
     * @return PurchaseReceiptDetail
     */
    public function setLineNbr($LineNbr)
    {
      $this->LineNbr = $LineNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLineType()
    {
      return $this->LineType;
    }

    /**
     * @param StringValue $LineType
     * @return PurchaseReceiptDetail
     */
    public function setLineType($LineType)
    {
      $this->LineType = $LineType;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param StringValue $Location
     * @return PurchaseReceiptDetail
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLotSerialNbr()
    {
      return $this->LotSerialNbr;
    }

    /**
     * @param StringValue $LotSerialNbr
     * @return PurchaseReceiptDetail
     */
    public function setLotSerialNbr($LotSerialNbr)
    {
      $this->LotSerialNbr = $LotSerialNbr;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getOpenQty()
    {
      return $this->OpenQty;
    }

    /**
     * @param DecimalValue $OpenQty
     * @return PurchaseReceiptDetail
     */
    public function setOpenQty($OpenQty)
    {
      $this->OpenQty = $OpenQty;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getOrderedQty()
    {
      return $this->OrderedQty;
    }

    /**
     * @param DecimalValue $OrderedQty
     * @return PurchaseReceiptDetail
     */
    public function setOrderedQty($OrderedQty)
    {
      $this->OrderedQty = $OrderedQty;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getPOLineNbr()
    {
      return $this->POLineNbr;
    }

    /**
     * @param IntValue $POLineNbr
     * @return PurchaseReceiptDetail
     */
    public function setPOLineNbr($POLineNbr)
    {
      $this->POLineNbr = $POLineNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPOOrderNbr()
    {
      return $this->POOrderNbr;
    }

    /**
     * @param StringValue $POOrderNbr
     * @return PurchaseReceiptDetail
     */
    public function setPOOrderNbr($POOrderNbr)
    {
      $this->POOrderNbr = $POOrderNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPOOrderType()
    {
      return $this->POOrderType;
    }

    /**
     * @param StringValue $POOrderType
     * @return PurchaseReceiptDetail
     */
    public function setPOOrderType($POOrderType)
    {
      $this->POOrderType = $POOrderType;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getProject()
    {
      return $this->Project;
    }

    /**
     * @param StringValue $Project
     * @return PurchaseReceiptDetail
     */
    public function setProject($Project)
    {
      $this->Project = $Project;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getProjectTask()
    {
      return $this->ProjectTask;
    }

    /**
     * @param StringValue $ProjectTask
     * @return PurchaseReceiptDetail
     */
    public function setProjectTask($ProjectTask)
    {
      $this->ProjectTask = $ProjectTask;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getReceiptQty()
    {
      return $this->ReceiptQty;
    }

    /**
     * @param DecimalValue $ReceiptQty
     * @return PurchaseReceiptDetail
     */
    public function setReceiptQty($ReceiptQty)
    {
      $this->ReceiptQty = $ReceiptQty;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getSubitem()
    {
      return $this->Subitem;
    }

    /**
     * @param StringValue $Subitem
     * @return PurchaseReceiptDetail
     */
    public function setSubitem($Subitem)
    {
      $this->Subitem = $Subitem;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTransactionDescr()
    {
      return $this->TransactionDescr;
    }

    /**
     * @param StringValue $TransactionDescr
     * @return PurchaseReceiptDetail
     */
    public function setTransactionDescr($TransactionDescr)
    {
      $this->TransactionDescr = $TransactionDescr;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getUnitCost()
    {
      return $this->UnitCost;
    }

    /**
     * @param DecimalValue $UnitCost
     * @return PurchaseReceiptDetail
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getUOM()
    {
      return $this->UOM;
    }

    /**
     * @param StringValue $UOM
     * @return PurchaseReceiptDetail
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getWarehouse()
    {
      return $this->Warehouse;
    }

    /**
     * @param StringValue $Warehouse
     * @return PurchaseReceiptDetail
     */
    public function setWarehouse($Warehouse)
    {
      $this->Warehouse = $Warehouse;
      return $this;
    }

}

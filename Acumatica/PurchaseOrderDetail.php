<?php

class PurchaseOrderDetail extends Entity
{

    /**
     * @var StringValue $Account
     */
    protected $Account = null;

    /**
     * @var StringValue $AlternateID
     */
    protected $AlternateID = null;

    /**
     * @var StringValue $BranchID
     */
    protected $BranchID = null;

    /**
     * @var BooleanValue $Cancelled
     */
    protected $Cancelled = null;

    /**
     * @var BooleanValue $Completed
     */
    protected $Completed = null;

    /**
     * @var DecimalValue $CompleteOn
     */
    protected $CompleteOn = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var DecimalValue $ExtendedCost
     */
    protected $ExtendedCost = null;

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var StringValue $LineDescription
     */
    protected $LineDescription = null;

    /**
     * @var IntValue $LineNbr
     */
    protected $LineNbr = null;

    /**
     * @var StringValue $LineType
     */
    protected $LineType = null;

    /**
     * @var DecimalValue $MaxReceipt
     */
    protected $MaxReceipt = null;

    /**
     * @var DecimalValue $MinReceipt
     */
    protected $MinReceipt = null;

    /**
     * @var DecimalValue $OrderQty
     */
    protected $OrderQty = null;

    /**
     * @var StringValue $OrderType
     */
    protected $OrderType = null;

    /**
     * @var StringValue $PONbr
     */
    protected $PONbr = null;

    /**
     * @var DateTimeValue $Promised
     */
    protected $Promised = null;

    /**
     * @var DecimalValue $QtyOnReceipts
     */
    protected $QtyOnReceipts = null;

    /**
     * @var StringValue $ReceiptAction
     */
    protected $ReceiptAction = null;

    /**
     * @var DecimalValue $ReceivedAmount
     */
    protected $ReceivedAmount = null;

    /**
     * @var DateTimeValue $Requested
     */
    protected $Requested = null;

    /**
     * @var StringValue $Subitem
     */
    protected $Subitem = null;

    /**
     * @var StringValue $TaxCategory
     */
    protected $TaxCategory = null;

    /**
     * @var DecimalValue $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var StringValue $UOM
     */
    protected $UOM = null;

    /**
     * @var StringValue $WarehouseID
     */
    protected $WarehouseID = null;

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
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param StringValue $Account
     * @return PurchaseOrderDetail
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
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
     * @return PurchaseOrderDetail
     */
    public function setAlternateID($AlternateID)
    {
      $this->AlternateID = $AlternateID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getBranchID()
    {
      return $this->BranchID;
    }

    /**
     * @param StringValue $BranchID
     * @return PurchaseOrderDetail
     */
    public function setBranchID($BranchID)
    {
      $this->BranchID = $BranchID;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getCancelled()
    {
      return $this->Cancelled;
    }

    /**
     * @param BooleanValue $Cancelled
     * @return PurchaseOrderDetail
     */
    public function setCancelled($Cancelled)
    {
      $this->Cancelled = $Cancelled;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getCompleted()
    {
      return $this->Completed;
    }

    /**
     * @param BooleanValue $Completed
     * @return PurchaseOrderDetail
     */
    public function setCompleted($Completed)
    {
      $this->Completed = $Completed;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getCompleteOn()
    {
      return $this->CompleteOn;
    }

    /**
     * @param DecimalValue $CompleteOn
     * @return PurchaseOrderDetail
     */
    public function setCompleteOn($CompleteOn)
    {
      $this->CompleteOn = $CompleteOn;
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
     * @return PurchaseOrderDetail
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getExtendedCost()
    {
      return $this->ExtendedCost;
    }

    /**
     * @param DecimalValue $ExtendedCost
     * @return PurchaseOrderDetail
     */
    public function setExtendedCost($ExtendedCost)
    {
      $this->ExtendedCost = $ExtendedCost;
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
     * @return PurchaseOrderDetail
     */
    public function setInventoryID($InventoryID)
    {
      $this->InventoryID = $InventoryID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLineDescription()
    {
      return $this->LineDescription;
    }

    /**
     * @param StringValue $LineDescription
     * @return PurchaseOrderDetail
     */
    public function setLineDescription($LineDescription)
    {
      $this->LineDescription = $LineDescription;
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
     * @return PurchaseOrderDetail
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
     * @return PurchaseOrderDetail
     */
    public function setLineType($LineType)
    {
      $this->LineType = $LineType;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getMaxReceipt()
    {
      return $this->MaxReceipt;
    }

    /**
     * @param DecimalValue $MaxReceipt
     * @return PurchaseOrderDetail
     */
    public function setMaxReceipt($MaxReceipt)
    {
      $this->MaxReceipt = $MaxReceipt;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getMinReceipt()
    {
      return $this->MinReceipt;
    }

    /**
     * @param DecimalValue $MinReceipt
     * @return PurchaseOrderDetail
     */
    public function setMinReceipt($MinReceipt)
    {
      $this->MinReceipt = $MinReceipt;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getOrderQty()
    {
      return $this->OrderQty;
    }

    /**
     * @param DecimalValue $OrderQty
     * @return PurchaseOrderDetail
     */
    public function setOrderQty($OrderQty)
    {
      $this->OrderQty = $OrderQty;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getOrderType()
    {
      return $this->OrderType;
    }

    /**
     * @param StringValue $OrderType
     * @return PurchaseOrderDetail
     */
    public function setOrderType($OrderType)
    {
      $this->OrderType = $OrderType;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPONbr()
    {
      return $this->PONbr;
    }

    /**
     * @param StringValue $PONbr
     * @return PurchaseOrderDetail
     */
    public function setPONbr($PONbr)
    {
      $this->PONbr = $PONbr;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getPromised()
    {
      return $this->Promised;
    }

    /**
     * @param DateTimeValue $Promised
     * @return PurchaseOrderDetail
     */
    public function setPromised($Promised)
    {
      $this->Promised = $Promised;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getQtyOnReceipts()
    {
      return $this->QtyOnReceipts;
    }

    /**
     * @param DecimalValue $QtyOnReceipts
     * @return PurchaseOrderDetail
     */
    public function setQtyOnReceipts($QtyOnReceipts)
    {
      $this->QtyOnReceipts = $QtyOnReceipts;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getReceiptAction()
    {
      return $this->ReceiptAction;
    }

    /**
     * @param StringValue $ReceiptAction
     * @return PurchaseOrderDetail
     */
    public function setReceiptAction($ReceiptAction)
    {
      $this->ReceiptAction = $ReceiptAction;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getReceivedAmount()
    {
      return $this->ReceivedAmount;
    }

    /**
     * @param DecimalValue $ReceivedAmount
     * @return PurchaseOrderDetail
     */
    public function setReceivedAmount($ReceivedAmount)
    {
      $this->ReceivedAmount = $ReceivedAmount;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getRequested()
    {
      return $this->Requested;
    }

    /**
     * @param DateTimeValue $Requested
     * @return PurchaseOrderDetail
     */
    public function setRequested($Requested)
    {
      $this->Requested = $Requested;
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
     * @return PurchaseOrderDetail
     */
    public function setSubitem($Subitem)
    {
      $this->Subitem = $Subitem;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTaxCategory()
    {
      return $this->TaxCategory;
    }

    /**
     * @param StringValue $TaxCategory
     * @return PurchaseOrderDetail
     */
    public function setTaxCategory($TaxCategory)
    {
      $this->TaxCategory = $TaxCategory;
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
     * @return PurchaseOrderDetail
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
     * @return PurchaseOrderDetail
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getWarehouseID()
    {
      return $this->WarehouseID;
    }

    /**
     * @param StringValue $WarehouseID
     * @return PurchaseOrderDetail
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}

<?php

class InventorySummaryRow extends Entity
{

    /**
     * @var DecimalValue $Available
     */
    protected $Available = null;

    /**
     * @var DecimalValue $AvailableforShipment
     */
    protected $AvailableforShipment = null;

    /**
     * @var StringValue $BaseUOM
     */
    protected $BaseUOM = null;

    /**
     * @var DecimalValue $EstimatedTotalCost
     */
    protected $EstimatedTotalCost = null;

    /**
     * @var DecimalValue $EstimatedUnitCost
     */
    protected $EstimatedUnitCost = null;

    /**
     * @var DateTimeValue $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var StringValue $LocationID
     */
    protected $LocationID = null;

    /**
     * @var StringValue $LotSerialNumber
     */
    protected $LotSerialNumber = null;

    /**
     * @var DecimalValue $NotAvailable
     */
    protected $NotAvailable = null;

    /**
     * @var DecimalValue $OnHand
     */
    protected $OnHand = null;

    /**
     * @var StringValue $Subitem
     */
    protected $Subitem = null;

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
     * @return DecimalValue
     */
    public function getAvailable()
    {
      return $this->Available;
    }

    /**
     * @param DecimalValue $Available
     * @return InventorySummaryRow
     */
    public function setAvailable($Available)
    {
      $this->Available = $Available;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getAvailableforShipment()
    {
      return $this->AvailableforShipment;
    }

    /**
     * @param DecimalValue $AvailableforShipment
     * @return InventorySummaryRow
     */
    public function setAvailableforShipment($AvailableforShipment)
    {
      $this->AvailableforShipment = $AvailableforShipment;
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
     * @return InventorySummaryRow
     */
    public function setBaseUOM($BaseUOM)
    {
      $this->BaseUOM = $BaseUOM;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getEstimatedTotalCost()
    {
      return $this->EstimatedTotalCost;
    }

    /**
     * @param DecimalValue $EstimatedTotalCost
     * @return InventorySummaryRow
     */
    public function setEstimatedTotalCost($EstimatedTotalCost)
    {
      $this->EstimatedTotalCost = $EstimatedTotalCost;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getEstimatedUnitCost()
    {
      return $this->EstimatedUnitCost;
    }

    /**
     * @param DecimalValue $EstimatedUnitCost
     * @return InventorySummaryRow
     */
    public function setEstimatedUnitCost($EstimatedUnitCost)
    {
      $this->EstimatedUnitCost = $EstimatedUnitCost;
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
     * @return InventorySummaryRow
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param StringValue $LocationID
     * @return InventorySummaryRow
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLotSerialNumber()
    {
      return $this->LotSerialNumber;
    }

    /**
     * @param StringValue $LotSerialNumber
     * @return InventorySummaryRow
     */
    public function setLotSerialNumber($LotSerialNumber)
    {
      $this->LotSerialNumber = $LotSerialNumber;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getNotAvailable()
    {
      return $this->NotAvailable;
    }

    /**
     * @param DecimalValue $NotAvailable
     * @return InventorySummaryRow
     */
    public function setNotAvailable($NotAvailable)
    {
      $this->NotAvailable = $NotAvailable;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getOnHand()
    {
      return $this->OnHand;
    }

    /**
     * @param DecimalValue $OnHand
     * @return InventorySummaryRow
     */
    public function setOnHand($OnHand)
    {
      $this->OnHand = $OnHand;
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
     * @return InventorySummaryRow
     */
    public function setSubitem($Subitem)
    {
      $this->Subitem = $Subitem;
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
     * @return InventorySummaryRow
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}

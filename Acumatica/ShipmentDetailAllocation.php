<?php

class ShipmentDetailAllocation extends Entity
{

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var DateTimeValue $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var StringValue $LocationID
     */
    protected $LocationID = null;

    /**
     * @var StringValue $LotSerialNbr
     */
    protected $LotSerialNbr = null;

    /**
     * @var DecimalValue $Qty
     */
    protected $Qty = null;

    /**
     * @var StringValue $UOM
     */
    protected $UOM = null;

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
     * @return ShipmentDetailAllocation
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return ShipmentDetailAllocation
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
     * @return ShipmentDetailAllocation
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
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
     * @return ShipmentDetailAllocation
     */
    public function setLotSerialNbr($LotSerialNbr)
    {
      $this->LotSerialNbr = $LotSerialNbr;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getQty()
    {
      return $this->Qty;
    }

    /**
     * @param DecimalValue $Qty
     * @return ShipmentDetailAllocation
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
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
     * @return ShipmentDetailAllocation
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

}

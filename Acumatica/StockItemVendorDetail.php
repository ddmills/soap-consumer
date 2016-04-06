<?php

class StockItemVendorDetail extends Entity
{

    /**
     * @var StringValue $VendorID
     */
    protected $VendorID = null;

    /**
     * @var StringValue $VendorName
     */
    protected $VendorName = null;

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
    public function getVendorID()
    {
      return $this->VendorID;
    }

    /**
     * @param StringValue $VendorID
     * @return StockItemVendorDetail
     */
    public function setVendorID($VendorID)
    {
      $this->VendorID = $VendorID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getVendorName()
    {
      return $this->VendorName;
    }

    /**
     * @param StringValue $VendorName
     * @return StockItemVendorDetail
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
      return $this;
    }

}

<?php

class VendorDetails
{

    /**
     * @var NonStockItemVendorDetail $NonStockItemVendorDetail
     */
    protected $NonStockItemVendorDetail = null;

    /**
     * @param NonStockItemVendorDetail $NonStockItemVendorDetail
     */
    public function __construct($NonStockItemVendorDetail)
    {
      $this->NonStockItemVendorDetail = $NonStockItemVendorDetail;
    }

    /**
     * @return NonStockItemVendorDetail
     */
    public function getNonStockItemVendorDetail()
    {
      return $this->NonStockItemVendorDetail;
    }

    /**
     * @param NonStockItemVendorDetail $NonStockItemVendorDetail
     * @return VendorDetails
     */
    public function setNonStockItemVendorDetail($NonStockItemVendorDetail)
    {
      $this->NonStockItemVendorDetail = $NonStockItemVendorDetail;
      return $this;
    }

}

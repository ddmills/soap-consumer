<?php

class WarehouseDetails
{

    /**
     * @var StockItemWarehouseDetail $StockItemWarehouseDetail
     */
    protected $StockItemWarehouseDetail = null;

    /**
     * @param StockItemWarehouseDetail $StockItemWarehouseDetail
     */
    public function __construct($StockItemWarehouseDetail)
    {
      $this->StockItemWarehouseDetail = $StockItemWarehouseDetail;
    }

    /**
     * @return StockItemWarehouseDetail
     */
    public function getStockItemWarehouseDetail()
    {
      return $this->StockItemWarehouseDetail;
    }

    /**
     * @param StockItemWarehouseDetail $StockItemWarehouseDetail
     * @return WarehouseDetails
     */
    public function setStockItemWarehouseDetail($StockItemWarehouseDetail)
    {
      $this->StockItemWarehouseDetail = $StockItemWarehouseDetail;
      return $this;
    }

}

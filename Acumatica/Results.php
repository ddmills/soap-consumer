<?php

class Results
{

    /**
     * @var CurrencyRateHistoryRow $CurrencyRateHistoryRow
     */
    protected $CurrencyRateHistoryRow = null;

    /**
     * @param CurrencyRateHistoryRow $CurrencyRateHistoryRow
     */
    public function __construct($CurrencyRateHistoryRow)
    {
      $this->CurrencyRateHistoryRow = $CurrencyRateHistoryRow;
    }

    /**
     * @return CurrencyRateHistoryRow
     */
    public function getCurrencyRateHistoryRow()
    {
      return $this->CurrencyRateHistoryRow;
    }

    /**
     * @param CurrencyRateHistoryRow $CurrencyRateHistoryRow
     * @return Results
     */
    public function setCurrencyRateHistoryRow($CurrencyRateHistoryRow)
    {
      $this->CurrencyRateHistoryRow = $CurrencyRateHistoryRow;
      return $this;
    }

}

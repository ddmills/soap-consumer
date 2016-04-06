<?php

class CurrencyRateHistoryInquiry extends Entity
{

    /**
     * @var StringValue $FromCurrencyID
     */
    protected $FromCurrencyID = null;

    /**
     * @var Results $Results
     */
    protected $Results = null;

    /**
     * @var StringValue $ToCurrencyID
     */
    protected $ToCurrencyID = null;

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
    public function getFromCurrencyID()
    {
      return $this->FromCurrencyID;
    }

    /**
     * @param StringValue $FromCurrencyID
     * @return CurrencyRateHistoryInquiry
     */
    public function setFromCurrencyID($FromCurrencyID)
    {
      $this->FromCurrencyID = $FromCurrencyID;
      return $this;
    }

    /**
     * @return Results
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param Results $Results
     * @return CurrencyRateHistoryInquiry
     */
    public function setResults($Results)
    {
      $this->Results = $Results;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getToCurrencyID()
    {
      return $this->ToCurrencyID;
    }

    /**
     * @param StringValue $ToCurrencyID
     * @return CurrencyRateHistoryInquiry
     */
    public function setToCurrencyID($ToCurrencyID)
    {
      $this->ToCurrencyID = $ToCurrencyID;
      return $this;
    }

}

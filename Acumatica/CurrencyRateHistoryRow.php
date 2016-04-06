<?php

class CurrencyRateHistoryRow extends Entity
{

    /**
     * @var DateTimeValue $CurrencyEffectiveDate
     */
    protected $CurrencyEffectiveDate = null;

    /**
     * @var DecimalValue $CurrencyRate
     */
    protected $CurrencyRate = null;

    /**
     * @var IntValue $CurrencyRateID
     */
    protected $CurrencyRateID = null;

    /**
     * @var StringValue $CurrencyRateType
     */
    protected $CurrencyRateType = null;

    /**
     * @var StringValue $FromCurrencyID
     */
    protected $FromCurrencyID = null;

    /**
     * @var StringValue $MultDiv
     */
    protected $MultDiv = null;

    /**
     * @var DecimalValue $RateReciprocal
     */
    protected $RateReciprocal = null;

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
     * @return DateTimeValue
     */
    public function getCurrencyEffectiveDate()
    {
      return $this->CurrencyEffectiveDate;
    }

    /**
     * @param DateTimeValue $CurrencyEffectiveDate
     * @return CurrencyRateHistoryRow
     */
    public function setCurrencyEffectiveDate($CurrencyEffectiveDate)
    {
      $this->CurrencyEffectiveDate = $CurrencyEffectiveDate;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getCurrencyRate()
    {
      return $this->CurrencyRate;
    }

    /**
     * @param DecimalValue $CurrencyRate
     * @return CurrencyRateHistoryRow
     */
    public function setCurrencyRate($CurrencyRate)
    {
      $this->CurrencyRate = $CurrencyRate;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getCurrencyRateID()
    {
      return $this->CurrencyRateID;
    }

    /**
     * @param IntValue $CurrencyRateID
     * @return CurrencyRateHistoryRow
     */
    public function setCurrencyRateID($CurrencyRateID)
    {
      $this->CurrencyRateID = $CurrencyRateID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCurrencyRateType()
    {
      return $this->CurrencyRateType;
    }

    /**
     * @param StringValue $CurrencyRateType
     * @return CurrencyRateHistoryRow
     */
    public function setCurrencyRateType($CurrencyRateType)
    {
      $this->CurrencyRateType = $CurrencyRateType;
      return $this;
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
     * @return CurrencyRateHistoryRow
     */
    public function setFromCurrencyID($FromCurrencyID)
    {
      $this->FromCurrencyID = $FromCurrencyID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getMultDiv()
    {
      return $this->MultDiv;
    }

    /**
     * @param StringValue $MultDiv
     * @return CurrencyRateHistoryRow
     */
    public function setMultDiv($MultDiv)
    {
      $this->MultDiv = $MultDiv;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getRateReciprocal()
    {
      return $this->RateReciprocal;
    }

    /**
     * @param DecimalValue $RateReciprocal
     * @return CurrencyRateHistoryRow
     */
    public function setRateReciprocal($RateReciprocal)
    {
      $this->RateReciprocal = $RateReciprocal;
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
     * @return CurrencyRateHistoryRow
     */
    public function setToCurrencyID($ToCurrencyID)
    {
      $this->ToCurrencyID = $ToCurrencyID;
      return $this;
    }

}

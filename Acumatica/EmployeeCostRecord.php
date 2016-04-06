<?php

class EmployeeCostRecord extends Entity
{

    /**
     * @var DecimalValue $AnnualSalaryAmount
     */
    protected $AnnualSalaryAmount = null;

    /**
     * @var DateTimeValue $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var DecimalValue $HourlyRate
     */
    protected $HourlyRate = null;

    /**
     * @var DecimalValue $RegularHoursPerWeek
     */
    protected $RegularHoursPerWeek = null;

    /**
     * @var StringValue $TypeOfEmployment
     */
    protected $TypeOfEmployment = null;

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
    public function getAnnualSalaryAmount()
    {
      return $this->AnnualSalaryAmount;
    }

    /**
     * @param DecimalValue $AnnualSalaryAmount
     * @return EmployeeCostRecord
     */
    public function setAnnualSalaryAmount($AnnualSalaryAmount)
    {
      $this->AnnualSalaryAmount = $AnnualSalaryAmount;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param DateTimeValue $EffectiveDate
     * @return EmployeeCostRecord
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getHourlyRate()
    {
      return $this->HourlyRate;
    }

    /**
     * @param DecimalValue $HourlyRate
     * @return EmployeeCostRecord
     */
    public function setHourlyRate($HourlyRate)
    {
      $this->HourlyRate = $HourlyRate;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getRegularHoursPerWeek()
    {
      return $this->RegularHoursPerWeek;
    }

    /**
     * @param DecimalValue $RegularHoursPerWeek
     * @return EmployeeCostRecord
     */
    public function setRegularHoursPerWeek($RegularHoursPerWeek)
    {
      $this->RegularHoursPerWeek = $RegularHoursPerWeek;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTypeOfEmployment()
    {
      return $this->TypeOfEmployment;
    }

    /**
     * @param StringValue $TypeOfEmployment
     * @return EmployeeCostRecord
     */
    public function setTypeOfEmployment($TypeOfEmployment)
    {
      $this->TypeOfEmployment = $TypeOfEmployment;
      return $this;
    }

}

<?php

class DateTimeSearch extends DateTimeValue
{

    /**
     * @var DateTimeCondition $Condition
     */
    protected $Condition = null;

    /**
     * @var \DateTime $Value2
     */
    protected $Value2 = null;

    /**
     * @param DateTimeCondition $Condition
     */
    public function __construct($Condition)
    {
      parent::__construct();
      $this->Condition = $Condition;
    }

    /**
     * @return DateTimeCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param DateTimeCondition $Condition
     * @return DateTimeSearch
     */
    public function setCondition($Condition)
    {
      $this->Condition = $Condition;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValue2()
    {
      if ($this->Value2 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Value2);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Value2
     * @return DateTimeSearch
     */
    public function setValue2(\DateTime $Value2 = null)
    {
      if ($Value2 == null) {
       $this->Value2 = null;
      } else {
        $this->Value2 = $Value2->format(\DateTime::ATOM);
      }
      return $this;
    }

}

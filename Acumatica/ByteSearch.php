<?php

class ByteSearch extends ByteValue
{

    /**
     * @var ByteCondition $Condition
     */
    protected $Condition = null;

    /**
     * @var int $Value2
     */
    protected $Value2 = null;

    /**
     * @param ByteCondition $Condition
     */
    public function __construct($Condition)
    {
      parent::__construct();
      $this->Condition = $Condition;
    }

    /**
     * @return ByteCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param ByteCondition $Condition
     * @return ByteSearch
     */
    public function setCondition($Condition)
    {
      $this->Condition = $Condition;
      return $this;
    }

    /**
     * @return int
     */
    public function getValue2()
    {
      return $this->Value2;
    }

    /**
     * @param int $Value2
     * @return ByteSearch
     */
    public function setValue2($Value2)
    {
      $this->Value2 = $Value2;
      return $this;
    }

}

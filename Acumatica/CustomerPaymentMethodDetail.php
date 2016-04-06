<?php

class CustomerPaymentMethodDetail extends Entity
{

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $Name
     */
    protected $Name = null;

    /**
     * @var StringValue $Value
     */
    protected $Value = null;

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
     * @return CustomerPaymentMethodDetail
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param StringValue $Name
     * @return CustomerPaymentMethodDetail
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param StringValue $Value
     * @return CustomerPaymentMethodDetail
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

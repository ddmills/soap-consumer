<?php

class Address extends Entity
{

    /**
     * @var StringValue $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var StringValue $AddressLine2
     */
    protected $AddressLine2 = null;

    /**
     * @var StringValue $City
     */
    protected $City = null;

    /**
     * @var StringValue $Country
     */
    protected $Country = null;

    /**
     * @var StringValue $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var StringValue $State
     */
    protected $State = null;

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
    public function getAddressLine1()
    {
      return $this->AddressLine1;
    }

    /**
     * @param StringValue $AddressLine1
     * @return Address
     */
    public function setAddressLine1($AddressLine1)
    {
      $this->AddressLine1 = $AddressLine1;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getAddressLine2()
    {
      return $this->AddressLine2;
    }

    /**
     * @param StringValue $AddressLine2
     * @return Address
     */
    public function setAddressLine2($AddressLine2)
    {
      $this->AddressLine2 = $AddressLine2;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param StringValue $City
     * @return Address
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param StringValue $Country
     * @return Address
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param StringValue $PostalCode
     * @return Address
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param StringValue $State
     * @return Address
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}

<?php

class Contacts
{

    /**
     * @var CustomerContact $CustomerContact
     */
    protected $CustomerContact = null;

    /**
     * @param CustomerContact $CustomerContact
     */
    public function __construct($CustomerContact)
    {
      $this->CustomerContact = $CustomerContact;
    }

    /**
     * @return CustomerContact
     */
    public function getCustomerContact()
    {
      return $this->CustomerContact;
    }

    /**
     * @param CustomerContact $CustomerContact
     * @return Contacts
     */
    public function setCustomerContact($CustomerContact)
    {
      $this->CustomerContact = $CustomerContact;
      return $this;
    }

}

<?php

class CustomerContact extends Entity
{

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    /**
     * @var IntValue $ContactID
     */
    protected $ContactID = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param Contact $Contact
     * @return CustomerContact
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getContactID()
    {
      return $this->ContactID;
    }

    /**
     * @param IntValue $ContactID
     * @return CustomerContact
     */
    public function setContactID($ContactID)
    {
      $this->ContactID = $ContactID;
      return $this;
    }

}

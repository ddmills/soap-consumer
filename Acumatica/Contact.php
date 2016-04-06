<?php

class Contact extends Entity
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var IntValue $ContactID
     */
    protected $ContactID = null;

    /**
     * @var StringValue $DisplayName
     */
    protected $DisplayName = null;

    /**
     * @var StringValue $Email
     */
    protected $Email = null;

    /**
     * @var StringValue $Fax
     */
    protected $Fax = null;

    /**
     * @var StringValue $FirstName
     */
    protected $FirstName = null;

    /**
     * @var StringValue $LastName
     */
    protected $LastName = null;

    /**
     * @var StringValue $MiddleName
     */
    protected $MiddleName = null;

    /**
     * @var StringValue $Phone1
     */
    protected $Phone1 = null;

    /**
     * @var StringValue $Phone1Type
     */
    protected $Phone1Type = null;

    /**
     * @var StringValue $Phone2
     */
    protected $Phone2 = null;

    /**
     * @var StringValue $Phone2Type
     */
    protected $Phone2Type = null;

    /**
     * @var StringValue $Position
     */
    protected $Position = null;

    /**
     * @var StringValue $Title
     */
    protected $Title = null;

    /**
     * @var StringValue $Web
     */
    protected $Web = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return Contact
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
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
     * @return Contact
     */
    public function setContactID($ContactID)
    {
      $this->ContactID = $ContactID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDisplayName()
    {
      return $this->DisplayName;
    }

    /**
     * @param StringValue $DisplayName
     * @return Contact
     */
    public function setDisplayName($DisplayName)
    {
      $this->DisplayName = $DisplayName;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param StringValue $Email
     * @return Contact
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param StringValue $Fax
     * @return Contact
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param StringValue $FirstName
     * @return Contact
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param StringValue $LastName
     * @return Contact
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getMiddleName()
    {
      return $this->MiddleName;
    }

    /**
     * @param StringValue $MiddleName
     * @return Contact
     */
    public function setMiddleName($MiddleName)
    {
      $this->MiddleName = $MiddleName;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPhone1()
    {
      return $this->Phone1;
    }

    /**
     * @param StringValue $Phone1
     * @return Contact
     */
    public function setPhone1($Phone1)
    {
      $this->Phone1 = $Phone1;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPhone1Type()
    {
      return $this->Phone1Type;
    }

    /**
     * @param StringValue $Phone1Type
     * @return Contact
     */
    public function setPhone1Type($Phone1Type)
    {
      $this->Phone1Type = $Phone1Type;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPhone2()
    {
      return $this->Phone2;
    }

    /**
     * @param StringValue $Phone2
     * @return Contact
     */
    public function setPhone2($Phone2)
    {
      $this->Phone2 = $Phone2;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPhone2Type()
    {
      return $this->Phone2Type;
    }

    /**
     * @param StringValue $Phone2Type
     * @return Contact
     */
    public function setPhone2Type($Phone2Type)
    {
      $this->Phone2Type = $Phone2Type;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param StringValue $Position
     * @return Contact
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param StringValue $Title
     * @return Contact
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getWeb()
    {
      return $this->Web;
    }

    /**
     * @param StringValue $Web
     * @return Contact
     */
    public function setWeb($Web)
    {
      $this->Web = $Web;
      return $this;
    }

}

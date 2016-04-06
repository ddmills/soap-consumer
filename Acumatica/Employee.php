<?php

class Employee extends Entity
{

    /**
     * @var StringValue $BranchID
     */
    protected $BranchID = null;

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    /**
     * @var StringValue $CurrencyID
     */
    protected $CurrencyID = null;

    /**
     * @var DateTimeValue $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var StringValue $DepartmentID
     */
    protected $DepartmentID = null;

    /**
     * @var StringValue $EmployeeClassID
     */
    protected $EmployeeClassID = null;

    /**
     * @var EmployeeCost $EmployeeCost
     */
    protected $EmployeeCost = null;

    /**
     * @var StringValue $EmployeeID
     */
    protected $EmployeeID = null;

    /**
     * @var EmploymentHistory $EmploymentHistory
     */
    protected $EmploymentHistory = null;

    /**
     * @var StringValue $Name
     */
    protected $Name = null;

    /**
     * @var StringValue $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var StringValue $ReportsToID
     */
    protected $ReportsToID = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

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
    public function getBranchID()
    {
      return $this->BranchID;
    }

    /**
     * @param StringValue $BranchID
     * @return Employee
     */
    public function setBranchID($BranchID)
    {
      $this->BranchID = $BranchID;
      return $this;
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
     * @return Employee
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCurrencyID()
    {
      return $this->CurrencyID;
    }

    /**
     * @param StringValue $CurrencyID
     * @return Employee
     */
    public function setCurrencyID($CurrencyID)
    {
      $this->CurrencyID = $CurrencyID;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getDateOfBirth()
    {
      return $this->DateOfBirth;
    }

    /**
     * @param DateTimeValue $DateOfBirth
     * @return Employee
     */
    public function setDateOfBirth($DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDepartmentID()
    {
      return $this->DepartmentID;
    }

    /**
     * @param StringValue $DepartmentID
     * @return Employee
     */
    public function setDepartmentID($DepartmentID)
    {
      $this->DepartmentID = $DepartmentID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getEmployeeClassID()
    {
      return $this->EmployeeClassID;
    }

    /**
     * @param StringValue $EmployeeClassID
     * @return Employee
     */
    public function setEmployeeClassID($EmployeeClassID)
    {
      $this->EmployeeClassID = $EmployeeClassID;
      return $this;
    }

    /**
     * @return EmployeeCost
     */
    public function getEmployeeCost()
    {
      return $this->EmployeeCost;
    }

    /**
     * @param EmployeeCost $EmployeeCost
     * @return Employee
     */
    public function setEmployeeCost($EmployeeCost)
    {
      $this->EmployeeCost = $EmployeeCost;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getEmployeeID()
    {
      return $this->EmployeeID;
    }

    /**
     * @param StringValue $EmployeeID
     * @return Employee
     */
    public function setEmployeeID($EmployeeID)
    {
      $this->EmployeeID = $EmployeeID;
      return $this;
    }

    /**
     * @return EmploymentHistory
     */
    public function getEmploymentHistory()
    {
      return $this->EmploymentHistory;
    }

    /**
     * @param EmploymentHistory $EmploymentHistory
     * @return Employee
     */
    public function setEmploymentHistory($EmploymentHistory)
    {
      $this->EmploymentHistory = $EmploymentHistory;
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
     * @return Employee
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param StringValue $PaymentMethod
     * @return Employee
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getReportsToID()
    {
      return $this->ReportsToID;
    }

    /**
     * @param StringValue $ReportsToID
     * @return Employee
     */
    public function setReportsToID($ReportsToID)
    {
      $this->ReportsToID = $ReportsToID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StringValue $Status
     * @return Employee
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}

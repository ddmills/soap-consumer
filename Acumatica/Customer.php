<?php

class Customer extends Entity
{

    /**
     * @var StringValue $AccountRef
     */
    protected $AccountRef = null;

    /**
     * @var BooleanValue $ApplyOverdueCharges
     */
    protected $ApplyOverdueCharges = null;

    /**
     * @var BooleanValue $AutoApplyPayments
     */
    protected $AutoApplyPayments = null;

    /**
     * @var BooleanValue $BillingAddressSameAsMain
     */
    protected $BillingAddressSameAsMain = null;

    /**
     * @var Contact $BillingContact
     */
    protected $BillingContact = null;

    /**
     * @var BooleanValue $BillingContactSameAsMain
     */
    protected $BillingContactSameAsMain = null;

    /**
     * @var Contacts $Contacts
     */
    protected $Contacts = null;

    /**
     * @var ShortValue $CreditDaysPastDue
     */
    protected $CreditDaysPastDue = null;

    /**
     * @var DecimalValue $CreditLimit
     */
    protected $CreditLimit = null;

    /**
     * @var StringValue $CreditVerification
     */
    protected $CreditVerification = null;

    /**
     * @var StringValue $CurrencyID
     */
    protected $CurrencyID = null;

    /**
     * @var StringValue $CustomerClass
     */
    protected $CustomerClass = null;

    /**
     * @var StringValue $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var StringValue $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var BooleanValue $EnableWriteOffs
     */
    protected $EnableWriteOffs = null;

    /**
     * @var DateTimeValue $FirstInvoiceDate
     */
    protected $FirstInvoiceDate = null;

    /**
     * @var StringValue $FOBPoint
     */
    protected $FOBPoint = null;

    /**
     * @var DateTimeValue $LastModified
     */
    protected $LastModified = null;

    /**
     * @var ShortValue $LeadTimedays
     */
    protected $LeadTimedays = null;

    /**
     * @var StringValue $LocationName
     */
    protected $LocationName = null;

    /**
     * @var Contact $MainContact
     */
    protected $MainContact = null;

    /**
     * @var DecimalValue $OpenOrdersBalance
     */
    protected $OpenOrdersBalance = null;

    /**
     * @var ShortValue $OrderPriority
     */
    protected $OrderPriority = null;

    /**
     * @var StringValue $ParentRecord
     */
    protected $ParentRecord = null;

    /**
     * @var StringValue $PriceClassID
     */
    protected $PriceClassID = null;

    /**
     * @var BooleanValue $PrintInvoices
     */
    protected $PrintInvoices = null;

    /**
     * @var BooleanValue $PrintStatements
     */
    protected $PrintStatements = null;

    /**
     * @var DecimalValue $RemainingCreditLimit
     */
    protected $RemainingCreditLimit = null;

    /**
     * @var BooleanValue $ResidentialDelivery
     */
    protected $ResidentialDelivery = null;

    /**
     * @var BooleanValue $SaturdayDelivery
     */
    protected $SaturdayDelivery = null;

    /**
     * @var BooleanValue $SendInvoicesbyEmail
     */
    protected $SendInvoicesbyEmail = null;

    /**
     * @var BooleanValue $SendStatementsbyEmail
     */
    protected $SendStatementsbyEmail = null;

    /**
     * @var BooleanValue $ShippingAddressSameAsMain
     */
    protected $ShippingAddressSameAsMain = null;

    /**
     * @var StringValue $ShippingBranch
     */
    protected $ShippingBranch = null;

    /**
     * @var Contact $ShippingContact
     */
    protected $ShippingContact = null;

    /**
     * @var BooleanValue $ShippingContactSameAsMain
     */
    protected $ShippingContactSameAsMain = null;

    /**
     * @var StringValue $ShippingRule
     */
    protected $ShippingRule = null;

    /**
     * @var StringValue $ShippingTerms
     */
    protected $ShippingTerms = null;

    /**
     * @var StringValue $ShippingZoneID
     */
    protected $ShippingZoneID = null;

    /**
     * @var StringValue $ShipVia
     */
    protected $ShipVia = null;

    /**
     * @var StringValue $StatementCycleID
     */
    protected $StatementCycleID = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var StringValue $TaxRegistrationID
     */
    protected $TaxRegistrationID = null;

    /**
     * @var StringValue $TaxZone
     */
    protected $TaxZone = null;

    /**
     * @var StringValue $Terms
     */
    protected $Terms = null;

    /**
     * @var DecimalValue $UnreleasedBalance
     */
    protected $UnreleasedBalance = null;

    /**
     * @var StringValue $WarehouseID
     */
    protected $WarehouseID = null;

    /**
     * @var DecimalValue $WriteOffLimit
     */
    protected $WriteOffLimit = null;

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
    public function getAccountRef()
    {
      return $this->AccountRef;
    }

    /**
     * @param StringValue $AccountRef
     * @return Customer
     */
    public function setAccountRef($AccountRef)
    {
      $this->AccountRef = $AccountRef;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getApplyOverdueCharges()
    {
      return $this->ApplyOverdueCharges;
    }

    /**
     * @param BooleanValue $ApplyOverdueCharges
     * @return Customer
     */
    public function setApplyOverdueCharges($ApplyOverdueCharges)
    {
      $this->ApplyOverdueCharges = $ApplyOverdueCharges;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getAutoApplyPayments()
    {
      return $this->AutoApplyPayments;
    }

    /**
     * @param BooleanValue $AutoApplyPayments
     * @return Customer
     */
    public function setAutoApplyPayments($AutoApplyPayments)
    {
      $this->AutoApplyPayments = $AutoApplyPayments;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getBillingAddressSameAsMain()
    {
      return $this->BillingAddressSameAsMain;
    }

    /**
     * @param BooleanValue $BillingAddressSameAsMain
     * @return Customer
     */
    public function setBillingAddressSameAsMain($BillingAddressSameAsMain)
    {
      $this->BillingAddressSameAsMain = $BillingAddressSameAsMain;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getBillingContact()
    {
      return $this->BillingContact;
    }

    /**
     * @param Contact $BillingContact
     * @return Customer
     */
    public function setBillingContact($BillingContact)
    {
      $this->BillingContact = $BillingContact;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getBillingContactSameAsMain()
    {
      return $this->BillingContactSameAsMain;
    }

    /**
     * @param BooleanValue $BillingContactSameAsMain
     * @return Customer
     */
    public function setBillingContactSameAsMain($BillingContactSameAsMain)
    {
      $this->BillingContactSameAsMain = $BillingContactSameAsMain;
      return $this;
    }

    /**
     * @return Contacts
     */
    public function getContacts()
    {
      return $this->Contacts;
    }

    /**
     * @param Contacts $Contacts
     * @return Customer
     */
    public function setContacts($Contacts)
    {
      $this->Contacts = $Contacts;
      return $this;
    }

    /**
     * @return ShortValue
     */
    public function getCreditDaysPastDue()
    {
      return $this->CreditDaysPastDue;
    }

    /**
     * @param ShortValue $CreditDaysPastDue
     * @return Customer
     */
    public function setCreditDaysPastDue($CreditDaysPastDue)
    {
      $this->CreditDaysPastDue = $CreditDaysPastDue;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getCreditLimit()
    {
      return $this->CreditLimit;
    }

    /**
     * @param DecimalValue $CreditLimit
     * @return Customer
     */
    public function setCreditLimit($CreditLimit)
    {
      $this->CreditLimit = $CreditLimit;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCreditVerification()
    {
      return $this->CreditVerification;
    }

    /**
     * @param StringValue $CreditVerification
     * @return Customer
     */
    public function setCreditVerification($CreditVerification)
    {
      $this->CreditVerification = $CreditVerification;
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
     * @return Customer
     */
    public function setCurrencyID($CurrencyID)
    {
      $this->CurrencyID = $CurrencyID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCustomerClass()
    {
      return $this->CustomerClass;
    }

    /**
     * @param StringValue $CustomerClass
     * @return Customer
     */
    public function setCustomerClass($CustomerClass)
    {
      $this->CustomerClass = $CustomerClass;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param StringValue $CustomerID
     * @return Customer
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCustomerName()
    {
      return $this->CustomerName;
    }

    /**
     * @param StringValue $CustomerName
     * @return Customer
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getEnableWriteOffs()
    {
      return $this->EnableWriteOffs;
    }

    /**
     * @param BooleanValue $EnableWriteOffs
     * @return Customer
     */
    public function setEnableWriteOffs($EnableWriteOffs)
    {
      $this->EnableWriteOffs = $EnableWriteOffs;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getFirstInvoiceDate()
    {
      return $this->FirstInvoiceDate;
    }

    /**
     * @param DateTimeValue $FirstInvoiceDate
     * @return Customer
     */
    public function setFirstInvoiceDate($FirstInvoiceDate)
    {
      $this->FirstInvoiceDate = $FirstInvoiceDate;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getFOBPoint()
    {
      return $this->FOBPoint;
    }

    /**
     * @param StringValue $FOBPoint
     * @return Customer
     */
    public function setFOBPoint($FOBPoint)
    {
      $this->FOBPoint = $FOBPoint;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getLastModified()
    {
      return $this->LastModified;
    }

    /**
     * @param DateTimeValue $LastModified
     * @return Customer
     */
    public function setLastModified($LastModified)
    {
      $this->LastModified = $LastModified;
      return $this;
    }

    /**
     * @return ShortValue
     */
    public function getLeadTimedays()
    {
      return $this->LeadTimedays;
    }

    /**
     * @param ShortValue $LeadTimedays
     * @return Customer
     */
    public function setLeadTimedays($LeadTimedays)
    {
      $this->LeadTimedays = $LeadTimedays;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLocationName()
    {
      return $this->LocationName;
    }

    /**
     * @param StringValue $LocationName
     * @return Customer
     */
    public function setLocationName($LocationName)
    {
      $this->LocationName = $LocationName;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getMainContact()
    {
      return $this->MainContact;
    }

    /**
     * @param Contact $MainContact
     * @return Customer
     */
    public function setMainContact($MainContact)
    {
      $this->MainContact = $MainContact;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getOpenOrdersBalance()
    {
      return $this->OpenOrdersBalance;
    }

    /**
     * @param DecimalValue $OpenOrdersBalance
     * @return Customer
     */
    public function setOpenOrdersBalance($OpenOrdersBalance)
    {
      $this->OpenOrdersBalance = $OpenOrdersBalance;
      return $this;
    }

    /**
     * @return ShortValue
     */
    public function getOrderPriority()
    {
      return $this->OrderPriority;
    }

    /**
     * @param ShortValue $OrderPriority
     * @return Customer
     */
    public function setOrderPriority($OrderPriority)
    {
      $this->OrderPriority = $OrderPriority;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getParentRecord()
    {
      return $this->ParentRecord;
    }

    /**
     * @param StringValue $ParentRecord
     * @return Customer
     */
    public function setParentRecord($ParentRecord)
    {
      $this->ParentRecord = $ParentRecord;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPriceClassID()
    {
      return $this->PriceClassID;
    }

    /**
     * @param StringValue $PriceClassID
     * @return Customer
     */
    public function setPriceClassID($PriceClassID)
    {
      $this->PriceClassID = $PriceClassID;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getPrintInvoices()
    {
      return $this->PrintInvoices;
    }

    /**
     * @param BooleanValue $PrintInvoices
     * @return Customer
     */
    public function setPrintInvoices($PrintInvoices)
    {
      $this->PrintInvoices = $PrintInvoices;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getPrintStatements()
    {
      return $this->PrintStatements;
    }

    /**
     * @param BooleanValue $PrintStatements
     * @return Customer
     */
    public function setPrintStatements($PrintStatements)
    {
      $this->PrintStatements = $PrintStatements;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getRemainingCreditLimit()
    {
      return $this->RemainingCreditLimit;
    }

    /**
     * @param DecimalValue $RemainingCreditLimit
     * @return Customer
     */
    public function setRemainingCreditLimit($RemainingCreditLimit)
    {
      $this->RemainingCreditLimit = $RemainingCreditLimit;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getResidentialDelivery()
    {
      return $this->ResidentialDelivery;
    }

    /**
     * @param BooleanValue $ResidentialDelivery
     * @return Customer
     */
    public function setResidentialDelivery($ResidentialDelivery)
    {
      $this->ResidentialDelivery = $ResidentialDelivery;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getSaturdayDelivery()
    {
      return $this->SaturdayDelivery;
    }

    /**
     * @param BooleanValue $SaturdayDelivery
     * @return Customer
     */
    public function setSaturdayDelivery($SaturdayDelivery)
    {
      $this->SaturdayDelivery = $SaturdayDelivery;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getSendInvoicesbyEmail()
    {
      return $this->SendInvoicesbyEmail;
    }

    /**
     * @param BooleanValue $SendInvoicesbyEmail
     * @return Customer
     */
    public function setSendInvoicesbyEmail($SendInvoicesbyEmail)
    {
      $this->SendInvoicesbyEmail = $SendInvoicesbyEmail;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getSendStatementsbyEmail()
    {
      return $this->SendStatementsbyEmail;
    }

    /**
     * @param BooleanValue $SendStatementsbyEmail
     * @return Customer
     */
    public function setSendStatementsbyEmail($SendStatementsbyEmail)
    {
      $this->SendStatementsbyEmail = $SendStatementsbyEmail;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getShippingAddressSameAsMain()
    {
      return $this->ShippingAddressSameAsMain;
    }

    /**
     * @param BooleanValue $ShippingAddressSameAsMain
     * @return Customer
     */
    public function setShippingAddressSameAsMain($ShippingAddressSameAsMain)
    {
      $this->ShippingAddressSameAsMain = $ShippingAddressSameAsMain;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getShippingBranch()
    {
      return $this->ShippingBranch;
    }

    /**
     * @param StringValue $ShippingBranch
     * @return Customer
     */
    public function setShippingBranch($ShippingBranch)
    {
      $this->ShippingBranch = $ShippingBranch;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getShippingContact()
    {
      return $this->ShippingContact;
    }

    /**
     * @param Contact $ShippingContact
     * @return Customer
     */
    public function setShippingContact($ShippingContact)
    {
      $this->ShippingContact = $ShippingContact;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getShippingContactSameAsMain()
    {
      return $this->ShippingContactSameAsMain;
    }

    /**
     * @param BooleanValue $ShippingContactSameAsMain
     * @return Customer
     */
    public function setShippingContactSameAsMain($ShippingContactSameAsMain)
    {
      $this->ShippingContactSameAsMain = $ShippingContactSameAsMain;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getShippingRule()
    {
      return $this->ShippingRule;
    }

    /**
     * @param StringValue $ShippingRule
     * @return Customer
     */
    public function setShippingRule($ShippingRule)
    {
      $this->ShippingRule = $ShippingRule;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getShippingTerms()
    {
      return $this->ShippingTerms;
    }

    /**
     * @param StringValue $ShippingTerms
     * @return Customer
     */
    public function setShippingTerms($ShippingTerms)
    {
      $this->ShippingTerms = $ShippingTerms;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getShippingZoneID()
    {
      return $this->ShippingZoneID;
    }

    /**
     * @param StringValue $ShippingZoneID
     * @return Customer
     */
    public function setShippingZoneID($ShippingZoneID)
    {
      $this->ShippingZoneID = $ShippingZoneID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getShipVia()
    {
      return $this->ShipVia;
    }

    /**
     * @param StringValue $ShipVia
     * @return Customer
     */
    public function setShipVia($ShipVia)
    {
      $this->ShipVia = $ShipVia;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getStatementCycleID()
    {
      return $this->StatementCycleID;
    }

    /**
     * @param StringValue $StatementCycleID
     * @return Customer
     */
    public function setStatementCycleID($StatementCycleID)
    {
      $this->StatementCycleID = $StatementCycleID;
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
     * @return Customer
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTaxRegistrationID()
    {
      return $this->TaxRegistrationID;
    }

    /**
     * @param StringValue $TaxRegistrationID
     * @return Customer
     */
    public function setTaxRegistrationID($TaxRegistrationID)
    {
      $this->TaxRegistrationID = $TaxRegistrationID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTaxZone()
    {
      return $this->TaxZone;
    }

    /**
     * @param StringValue $TaxZone
     * @return Customer
     */
    public function setTaxZone($TaxZone)
    {
      $this->TaxZone = $TaxZone;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTerms()
    {
      return $this->Terms;
    }

    /**
     * @param StringValue $Terms
     * @return Customer
     */
    public function setTerms($Terms)
    {
      $this->Terms = $Terms;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getUnreleasedBalance()
    {
      return $this->UnreleasedBalance;
    }

    /**
     * @param DecimalValue $UnreleasedBalance
     * @return Customer
     */
    public function setUnreleasedBalance($UnreleasedBalance)
    {
      $this->UnreleasedBalance = $UnreleasedBalance;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getWarehouseID()
    {
      return $this->WarehouseID;
    }

    /**
     * @param StringValue $WarehouseID
     * @return Customer
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getWriteOffLimit()
    {
      return $this->WriteOffLimit;
    }

    /**
     * @param DecimalValue $WriteOffLimit
     * @return Customer
     */
    public function setWriteOffLimit($WriteOffLimit)
    {
      $this->WriteOffLimit = $WriteOffLimit;
      return $this;
    }

}

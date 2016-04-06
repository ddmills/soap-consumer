<?php

class PaymentDetail extends Entity
{

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $DocumentType
     */
    protected $DocumentType = null;

    /**
     * @var StringValue $ReferenceNbr
     */
    protected $ReferenceNbr = null;

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
     * @return PaymentDetail
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDocumentType()
    {
      return $this->DocumentType;
    }

    /**
     * @param StringValue $DocumentType
     * @return PaymentDetail
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getReferenceNbr()
    {
      return $this->ReferenceNbr;
    }

    /**
     * @param StringValue $ReferenceNbr
     * @return PaymentDetail
     */
    public function setReferenceNbr($ReferenceNbr)
    {
      $this->ReferenceNbr = $ReferenceNbr;
      return $this;
    }

}

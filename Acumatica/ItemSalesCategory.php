<?php

class ItemSalesCategory extends Entity
{

    /**
     * @var IntValue $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var DateTimeValue $LastModifiedDateTime
     */
    protected $LastModifiedDateTime = null;

    /**
     * @var Members $Members
     */
    protected $Members = null;

    /**
     * @var IntValue $ParentCategoryID
     */
    protected $ParentCategoryID = null;

    /**
     * @var StringValue $Path
     */
    protected $Path = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return IntValue
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param IntValue $CategoryID
     * @return ItemSalesCategory
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
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
     * @return ItemSalesCategory
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getLastModifiedDateTime()
    {
      return $this->LastModifiedDateTime;
    }

    /**
     * @param DateTimeValue $LastModifiedDateTime
     * @return ItemSalesCategory
     */
    public function setLastModifiedDateTime($LastModifiedDateTime)
    {
      $this->LastModifiedDateTime = $LastModifiedDateTime;
      return $this;
    }

    /**
     * @return Members
     */
    public function getMembers()
    {
      return $this->Members;
    }

    /**
     * @param Members $Members
     * @return ItemSalesCategory
     */
    public function setMembers($Members)
    {
      $this->Members = $Members;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getParentCategoryID()
    {
      return $this->ParentCategoryID;
    }

    /**
     * @param IntValue $ParentCategoryID
     * @return ItemSalesCategory
     */
    public function setParentCategoryID($ParentCategoryID)
    {
      $this->ParentCategoryID = $ParentCategoryID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPath()
    {
      return $this->Path;
    }

    /**
     * @param StringValue $Path
     * @return ItemSalesCategory
     */
    public function setPath($Path)
    {
      $this->Path = $Path;
      return $this;
    }

}

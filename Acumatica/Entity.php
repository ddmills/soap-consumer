<?php

class Entity
{

    /**
     * @var guid $ID
     */
    protected $ID = null;

    /**
     * @var LongValue $RowNumber
     */
    protected $RowNumber = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var boolean $Delete
     */
    protected $Delete = null;

    /**
     * @var ArrayOfCustomField $CustomFields
     */
    protected $CustomFields = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      $this->Delete = $Delete;
    }

    /**
     * @return guid
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param guid $ID
     * @return Entity
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return LongValue
     */
    public function getRowNumber()
    {
      return $this->RowNumber;
    }

    /**
     * @param LongValue $RowNumber
     * @return Entity
     */
    public function setRowNumber($RowNumber)
    {
      $this->RowNumber = $RowNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return Entity
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDelete()
    {
      return $this->Delete;
    }

    /**
     * @param boolean $Delete
     * @return Entity
     */
    public function setDelete($Delete)
    {
      $this->Delete = $Delete;
      return $this;
    }

    /**
     * @return ArrayOfCustomField
     */
    public function getCustomFields()
    {
      return $this->CustomFields;
    }

    /**
     * @param ArrayOfCustomField $CustomFields
     * @return Entity
     */
    public function setCustomFields($CustomFields)
    {
      $this->CustomFields = $CustomFields;
      return $this;
    }

}

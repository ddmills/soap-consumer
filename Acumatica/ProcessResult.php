<?php

class ProcessResult
{

    /**
     * @var guid $EntityId
     */
    protected $EntityId = null;

    /**
     * @var ProcessStatus $Status
     */
    protected $Status = null;

    /**
     * @var int $Seconds
     */
    protected $Seconds = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param guid $EntityId
     * @param ProcessStatus $Status
     * @param int $Seconds
     */
    public function __construct($EntityId, $Status, $Seconds)
    {
      $this->EntityId = $EntityId;
      $this->Status = $Status;
      $this->Seconds = $Seconds;
    }

    /**
     * @return guid
     */
    public function getEntityId()
    {
      return $this->EntityId;
    }

    /**
     * @param guid $EntityId
     * @return ProcessResult
     */
    public function setEntityId($EntityId)
    {
      $this->EntityId = $EntityId;
      return $this;
    }

    /**
     * @return ProcessStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ProcessStatus $Status
     * @return ProcessResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getSeconds()
    {
      return $this->Seconds;
    }

    /**
     * @param int $Seconds
     * @return ProcessResult
     */
    public function setSeconds($Seconds)
    {
      $this->Seconds = $Seconds;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return ProcessResult
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}

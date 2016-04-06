<?php

class InvokeResult
{

    /**
     * @var guid $TicketId
     */
    protected $TicketId = null;

    /**
     * @param guid $TicketId
     */
    public function __construct($TicketId)
    {
      $this->TicketId = $TicketId;
    }

    /**
     * @return guid
     */
    public function getTicketId()
    {
      return $this->TicketId;
    }

    /**
     * @param guid $TicketId
     * @return InvokeResult
     */
    public function setTicketId($TicketId)
    {
      $this->TicketId = $TicketId;
      return $this;
    }

}

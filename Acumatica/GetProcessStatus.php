<?php

class GetProcessStatus
{

    /**
     * @var InvokeResult $invokeResult
     */
    protected $invokeResult = null;

    /**
     * @param InvokeResult $invokeResult
     */
    public function __construct($invokeResult)
    {
      $this->invokeResult = $invokeResult;
    }

    /**
     * @return InvokeResult
     */
    public function getInvokeResult()
    {
      return $this->invokeResult;
    }

    /**
     * @param InvokeResult $invokeResult
     * @return GetProcessStatus
     */
    public function setInvokeResult($invokeResult)
    {
      $this->invokeResult = $invokeResult;
      return $this;
    }

}

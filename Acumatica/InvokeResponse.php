<?php

class InvokeResponse
{

    /**
     * @var InvokeResult $InvokeResult
     */
    protected $InvokeResult = null;

    /**
     * @param InvokeResult $InvokeResult
     */
    public function __construct($InvokeResult)
    {
      $this->InvokeResult = $InvokeResult;
    }

    /**
     * @return InvokeResult
     */
    public function getInvokeResult()
    {
      return $this->InvokeResult;
    }

    /**
     * @param InvokeResult $InvokeResult
     * @return InvokeResponse
     */
    public function setInvokeResult($InvokeResult)
    {
      $this->InvokeResult = $InvokeResult;
      return $this;
    }

}

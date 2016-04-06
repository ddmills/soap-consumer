<?php

class GetProcessStatusResponse
{

    /**
     * @var ProcessResult $GetProcessStatusResult
     */
    protected $GetProcessStatusResult = null;

    /**
     * @param ProcessResult $GetProcessStatusResult
     */
    public function __construct($GetProcessStatusResult)
    {
      $this->GetProcessStatusResult = $GetProcessStatusResult;
    }

    /**
     * @return ProcessResult
     */
    public function getGetProcessStatusResult()
    {
      return $this->GetProcessStatusResult;
    }

    /**
     * @param ProcessResult $GetProcessStatusResult
     * @return GetProcessStatusResponse
     */
    public function setGetProcessStatusResult($GetProcessStatusResult)
    {
      $this->GetProcessStatusResult = $GetProcessStatusResult;
      return $this;
    }

}

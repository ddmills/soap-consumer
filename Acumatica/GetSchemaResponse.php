<?php

class GetSchemaResponse
{

    /**
     * @var string $GetSchemaResult
     */
    protected $GetSchemaResult = null;

    /**
     * @param string $GetSchemaResult
     */
    public function __construct($GetSchemaResult)
    {
      $this->GetSchemaResult = $GetSchemaResult;
    }

    /**
     * @return string
     */
    public function getGetSchemaResult()
    {
      return $this->GetSchemaResult;
    }

    /**
     * @param string $GetSchemaResult
     * @return GetSchemaResponse
     */
    public function setGetSchemaResult($GetSchemaResult)
    {
      $this->GetSchemaResult = $GetSchemaResult;
      return $this;
    }

}

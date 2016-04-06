<?php

class GetResponse
{

    /**
     * @var Entity $GetResult
     */
    protected $GetResult = null;

    /**
     * @param Entity $GetResult
     */
    public function __construct($GetResult)
    {
      $this->GetResult = $GetResult;
    }

    /**
     * @return Entity
     */
    public function getGetResult()
    {
      return $this->GetResult;
    }

    /**
     * @param Entity $GetResult
     * @return GetResponse
     */
    public function setGetResult($GetResult)
    {
      $this->GetResult = $GetResult;
      return $this;
    }

}

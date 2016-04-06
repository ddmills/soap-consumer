<?php

class PutResponse
{

    /**
     * @var Entity $PutResult
     */
    protected $PutResult = null;

    /**
     * @param Entity $PutResult
     */
    public function __construct($PutResult)
    {
      $this->PutResult = $PutResult;
    }

    /**
     * @return Entity
     */
    public function getPutResult()
    {
      return $this->PutResult;
    }

    /**
     * @param Entity $PutResult
     * @return PutResponse
     */
    public function setPutResult($PutResult)
    {
      $this->PutResult = $PutResult;
      return $this;
    }

}

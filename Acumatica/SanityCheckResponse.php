<?php

class SanityCheckResponse
{

    /**
     * @var Entity $SanityCheckResult
     */
    protected $SanityCheckResult = null;

    /**
     * @param Entity $SanityCheckResult
     */
    public function __construct($SanityCheckResult)
    {
      $this->SanityCheckResult = $SanityCheckResult;
    }

    /**
     * @return Entity
     */
    public function getSanityCheckResult()
    {
      return $this->SanityCheckResult;
    }

    /**
     * @param Entity $SanityCheckResult
     * @return SanityCheckResponse
     */
    public function setSanityCheckResult($SanityCheckResult)
    {
      $this->SanityCheckResult = $SanityCheckResult;
      return $this;
    }

}

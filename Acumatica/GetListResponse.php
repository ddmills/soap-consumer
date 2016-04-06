<?php

class GetListResponse
{

    /**
     * @var ArrayOfEntity $GetListResult
     */
    protected $GetListResult = null;

    /**
     * @param ArrayOfEntity $GetListResult
     */
    public function __construct($GetListResult)
    {
      $this->GetListResult = $GetListResult;
    }

    /**
     * @return ArrayOfEntity
     */
    public function getGetListResult()
    {
      return $this->GetListResult;
    }

    /**
     * @param ArrayOfEntity $GetListResult
     * @return GetListResponse
     */
    public function setGetListResult($GetListResult)
    {
      $this->GetListResult = $GetListResult;
      return $this;
    }

}

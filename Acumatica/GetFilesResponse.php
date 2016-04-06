<?php

class GetFilesResponse
{

    /**
     * @var ArrayOfFile $GetFilesResult
     */
    protected $GetFilesResult = null;

    /**
     * @param ArrayOfFile $GetFilesResult
     */
    public function __construct($GetFilesResult)
    {
      $this->GetFilesResult = $GetFilesResult;
    }

    /**
     * @return ArrayOfFile
     */
    public function getGetFilesResult()
    {
      return $this->GetFilesResult;
    }

    /**
     * @param ArrayOfFile $GetFilesResult
     * @return GetFilesResponse
     */
    public function setGetFilesResult($GetFilesResult)
    {
      $this->GetFilesResult = $GetFilesResult;
      return $this;
    }

}

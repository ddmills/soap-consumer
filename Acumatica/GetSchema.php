<?php

class GetSchema
{

    /**
     * @var string $version
     */
    protected $version = null;

    /**
     * @param string $version
     */
    public function __construct($version)
    {
      $this->version = $version;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param string $version
     * @return GetSchema
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}

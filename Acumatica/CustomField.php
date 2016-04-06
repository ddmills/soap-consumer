<?php

abstract class CustomField
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return CustomField
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}

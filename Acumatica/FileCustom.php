<?php

class FileCustom
{

    /**
     * @var base64Binary $Content
     */
    protected $Content = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return base64Binary
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param base64Binary $Content
     * @return File
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
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
     * @return File
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}

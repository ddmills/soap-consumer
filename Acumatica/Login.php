<?php

class Login
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $branch
     */
    protected $branch = null;

    /**
     * @var string $locale
     */
    protected $locale = null;

    /**
     * @param string $name
     * @param string $password
     * @param string $company
     * @param string $branch
     * @param string $locale
     */
    public function __construct($name, $password, $company, $branch, $locale)
    {
      $this->name = $name;
      $this->password = $password;
      $this->company = $company;
      $this->branch = $branch;
      $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return Login
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return Login
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param string $company
     * @return Login
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return string
     */
    public function getBranch()
    {
      return $this->branch;
    }

    /**
     * @param string $branch
     * @return Login
     */
    public function setBranch($branch)
    {
      $this->branch = $branch;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param string $locale
     * @return Login
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

}

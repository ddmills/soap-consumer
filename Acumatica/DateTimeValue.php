<?php

class DateTimeValue
{

    /**
     * @var \DateTime $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getValue()
    {
      if ($this->Value == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Value);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Value
     * @return DateTimeValue
     */
    public function setValue(\DateTime $Value = null)
    {
      if ($Value == null) {
       $this->Value = null;
      } else {
        $this->Value = $Value->format(\DateTime::ATOM);
      }
      return $this;
    }

}

<?php

class SetBusinessDate
{

    /**
     * @var \DateTime $businessDate
     */
    protected $businessDate = null;

    /**
     * @param \DateTime $businessDate
     */
    public function __construct(\DateTime $businessDate)
    {
      $this->businessDate = $businessDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getBusinessDate()
    {
      if ($this->businessDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->businessDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $businessDate
     * @return SetBusinessDate
     */
    public function setBusinessDate(\DateTime $businessDate)
    {
      $this->businessDate = $businessDate->format(\DateTime::ATOM);
      return $this;
    }

}

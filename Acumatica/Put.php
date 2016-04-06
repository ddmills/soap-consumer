<?php

class Put
{

    /**
     * @var Entity $entity
     */
    protected $entity = null;

    /**
     * @param Entity $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return Entity
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param Entity $entity
     * @return Put
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}

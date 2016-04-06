<?php

class Get
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
     * @return Get
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}

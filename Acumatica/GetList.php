<?php

class GetList
{

    /**
     * @var Entity $entity
     */
    protected $entity = null;

    /**
     * @var boolean $returnFullEntities
     */
    protected $returnFullEntities = null;

    /**
     * @param Entity $entity
     * @param boolean $returnFullEntities
     */
    public function __construct($entity, $returnFullEntities)
    {
      $this->entity = $entity;
      $this->returnFullEntities = $returnFullEntities;
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
     * @return GetList
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnFullEntities()
    {
      return $this->returnFullEntities;
    }

    /**
     * @param boolean $returnFullEntities
     * @return GetList
     */
    public function setReturnFullEntities($returnFullEntities)
    {
      $this->returnFullEntities = $returnFullEntities;
      return $this;
    }

}

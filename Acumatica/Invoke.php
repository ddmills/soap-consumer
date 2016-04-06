<?php

class Invoke
{

    /**
     * @var Entity $entity
     */
    protected $entity = null;

    /**
     * @var Action $action
     */
    protected $action = null;

    /**
     * @param Entity $entity
     * @param Action $action
     */
    public function __construct($entity, $action)
    {
      $this->entity = $entity;
      $this->action = $action;
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
     * @return Invoke
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return Action
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param Action $action
     * @return Invoke
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

}

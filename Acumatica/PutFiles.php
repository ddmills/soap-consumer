<?php

class PutFiles
{

    /**
     * @var Entity $entity
     */
    protected $entity = null;

    /**
     * @var ArrayOfFile $files
     */
    protected $files = null;

    /**
     * @param Entity $entity
     * @param ArrayOfFile $files
     */
    public function __construct($entity, $files)
    {
      $this->entity = $entity;
      $this->files = $files;
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
     * @return PutFiles
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return ArrayOfFile
     */
    public function getFiles()
    {
      return $this->files;
    }

    /**
     * @param ArrayOfFile $files
     * @return PutFiles
     */
    public function setFiles($files)
    {
      $this->files = $files;
      return $this;
    }

}

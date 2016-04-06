<?php

class PutSchema
{

    /**
     * @var string $schema
     */
    protected $schema = null;

    /**
     * @param string $schema
     */
    public function __construct($schema)
    {
      $this->schema = $schema;
    }

    /**
     * @return string
     */
    public function getSchema()
    {
      return $this->schema;
    }

    /**
     * @param string $schema
     * @return PutSchema
     */
    public function setSchema($schema)
    {
      $this->schema = $schema;
      return $this;
    }

}

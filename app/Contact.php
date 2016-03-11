<?php

namespace App;

class Contact
{
    public $id;
    public $firstName;
    public $lastName;
    public $email;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->email = $data['email'];
    }

    public function __get($key)
    {
        if ($key == 'name') {
            return $this->name();
        }
    }

    public function name()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

<?php

namespace App\Repositories;

use App\Contact;

class ContactRepository {

    public function __construct()
    {
    }

    protected $fields = [
        'id' => [
            "FieldName" => "ContactID",
            "ObjectName" => "Contact",
            "Value" => "ContactID",
            "Commit" => true,
        ],
        'firstName' => [
            "FieldName" => "FirstName",
            "ObjectName" => "Contact",
            "Value" => "FirstName",
        ],
        'lastName' => [
            "FieldName" => "LastName",
            "ObjectName" => "Contact",
            "Value" => "LastName",
        ],
        'email' => [
            "FieldName" => "EMail",
            "ObjectName" => "Contact",
            "Value" => "Email",
            "Commit" => true,
        ]
    ];

    public function all()
    {
        $data = [
            'id' => 1,
            'firstName' => 'Professor',
            'lastName' => 'Snape',
            'email' => 'snake@hogwarts.com',
        ];
        $contact = new Contact($data);
        return [$contact];
    }

    public function find($id)
    {
        $data = [
            'id' => $id,
            'firstName' => 'Professor',
            'lastName' => 'Snape',
            'email' => 'snake@hogwarts.com',
        ];
        $contact = new Contact($data);
        return $contact;
    }

    public function create(array $data)
    {
        // $this->validateContactData($data);
        dd('contact create');
    }

    public function destroy($id)
    {
        dd('contact destroy');
    }
}

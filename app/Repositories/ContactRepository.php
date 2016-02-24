<?php

namespace App\Repositories;

use App\Contact;

class ContactRepository implements ContactRepositoryInterface {

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
        $name		= env('SOAP_USERNAME');
    	$password	= env('SOAP_PASSWORD');
        $service    = env('SOAP_SERVICE_NAME');
    	$url 		= env('SOAP_WSDL_LOCATION');

        include('AcumaticaWSDL.php');

        try
    	{
            	$client 			= new Screen($url, array('exceptions'=>true, 'trace'=>1, 'encoding' => 'UTF-8'));
    	        $login 				= new Login();
            	$login->name    	= $name;
    			$login->password 	= $password;
    			$client->Login($login);
    	}
    	catch (Exception $e)
    	{
    		 echo $e->getMessage();
    	}

        $export = new CR302000export();

        $export->commands = [
            $this->fields['id'],
            $this->fields['firstName'],
            $this->fields['lastName'],
            $this->fields['email'],
        ];
        $export->filters = [
            [
                'OpenBrackets' => 1,
                'Field' => 'Email',
                'Condition' => 'NotEqual',
                'Value' => '',
                'CloseBrackets' => 1,
                'Operator' => 'And'
            ],
        ];
        $export->topCount = 0;
        $export->includeHeaders = false;
        $export->breakOnError = false;

        try
    	{
    		$submit_result = $client->CR302000Export($export);
    	}
    	catch(Exception $e)
    	{
    		print_r($e);
    	}

        $contacts = array();
        foreach($submit_result->ExportResult->ArrayOfString as $item) {
            $contact = new Contact();
            $contact->id        =  $item->string[0];
            $contact->firstName =  $item->string[1];
            $contact->lastName  =  $item->string[2];
            $contact->email     =  $item->string[3];
            $contacts[] = $contact;
        }
        return $contacts;
    }

    public function find()
    {
        dd('contact find');
    }
}

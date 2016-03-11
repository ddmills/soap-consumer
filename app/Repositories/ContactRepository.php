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
        $name     = env('SOAP_USERNAME');
        $password = env('SOAP_PASSWORD');
        $service  = env('SOAP_SERVICE_NAME');
        $url      = env('SOAP_WSDL_LOCATION');

        include('AcumaticaWSDL.php');

        try
        {
            $client = new Screen($url, array('exceptions'=>true, 'trace'=>1, 'encoding' => 'UTF-8'));
            $login = new Login();
            $login->name = $name;
            $login->password = $password;
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

        $contacts = [];
        foreach($submit_result->ExportResult->ArrayOfString as $item) {
            $data['id']        =  $item->string[0];
            $data['firstName'] =  $item->string[1];
            $data['lastName']  =  $item->string[2];
            $data['email']     =  $item->string[3];

            $contact = new Contact($data);
            array_push($contacts, $contact);
        }

        return $contacts;
    }

    public function find($id)
    {
        $name     = env('SOAP_USERNAME');
        $password = env('SOAP_PASSWORD');
        $service  = env('SOAP_SERVICE_NAME');
        $url      = env('SOAP_WSDL_LOCATION');

        $client = new \SoapClient($url);
        $login = [
            'name' => $name,
            'password' => $password,
        ];

        $client->Login($login);
        $schema = $client->CR302000GetSchema([]);

        $commands = [
            $this->fields['id'],
            $this->fields['firstName'],
            $this->fields['lastName'],
            $this->fields['email']
        ];

        $filters = [];

        $filters[] = [
            'Field' => [
                'FieldName' => 'ContactId',
                'ObjectName' => 'Contact',
            ],
            'Condition' => "Equals",
            'Value' => new \SoapVar($id, XSD_STRING, 'string', 'http://www.w3.org/2001/XMLSchema'),
            'OpenBrackets' => 0,
            'CloseBrackets' => 0,
            'Operator' => "And"
        ];

        $results = $client->CR302000Export([
            'commands' => $commands,
            'filters' => $filters,
            'topCount' => 1,
            'includeHeaders' => false,
            'breakOnError' => false,
        ])->ExportResult->ArrayOfString->string;

        $data = [
            'id' => $results[0],
            'firstName' => $results[1],
            'lastName' => $results[2],
            'email' => $results[3],
        ];

        return new Contact($data);
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

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

        // dd($client->CR302000GetSchema(new CR302000GetSchema));

        //
        // $descriptor = new ElementDescriptor;
        // $descriptor->ElementType = 'string';
        //
        // $value = new Value;
        // $value->FieldName = 'ContactId';
        // $value->Value = $id;
        // $value->Descriptor = $descriptor;
        // $value->LinkedCommand = 'ContactId';

        // $soapvar = new \SoapVar($value, SOAP_ENC_OBJECT, "value", "http://www.w3.org/2001/XMLSchema");
        // $soapvar = new \SoapVar($id, XSD_STRING, "string", "http://www.w3.org/2001/XMLSchema");

        // dd($soapvar);

        $descriptor = new ElementDescriptor;
        $descriptor->ElementType = ElementTypes::StringSelector;

        $field = [
            'FieldName' => 'ContactId',
            'ObjectName' => 'Contact',
            'Value' => 'ContactID',
            'Descriptor' => $descriptor,
        ];


        $filter = new Filter;
        $filter->Field = $field;
        $filter->Condition = FilterCondition::Equals;
        $filter->Value = $id;
        $filter->OpenBrackets = 1;
        $filter->CloseBrackets = 1;
        $filter->Operator = FilterOperator::_And;

        // dd($filter);

        $export->filters = [$filter];


        $export->topCount = 4;
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

        dd($contacts);

        return $contacts;
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

<?php

namespace App\Repositories;

use App\Contact;
use App\Acumatica\AcumaticaClient;

class ContactRepository
{

    private $acumaticaClient;

    public function __construct(AcumaticaClient $acumaticaClient)
    {
        $this->acumaticaClient = $acumaticaClient;
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
        $commands = array_values($this->fields);

        $results = $this->acumaticaClient->CR302000Export([
            'commands' => $commands,
            'topCount' => 0,
            'includeHeaders' => false,
            'breakOnError' => false,
        ])->ExportResult->ArrayOfString;

        $contacts = [];
        foreach($results as $contact) {
            $data['id']        =  $contact->string[0];
            $data['firstName'] =  $contact->string[1];
            $data['lastName']  =  $contact->string[2];
            $data['email']     =  $contact->string[3];

            array_push($contacts, new Contact($data));
        }

        return $contacts;
    }

    function getGUID(){
        if (function_exists('com_create_guid')){
            return com_create_guid();
        }else{
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12);
            return $uuid;
        }
    }

    public function find($id)
    {
        // <Get xmlns="http://www.acumatica.com/entity/5.30.001/Default/">
        //   <entity>
        //     <ID>guid</ID>
        //     <RowNumber>
        //       <Value>long</Value>
        //     </RowNumber>
        //     <Note>string</Note>
        //     <Delete>boolean</Delete>
        //     <CustomFields>
        //       <CustomField>
        //         <Name>string</Name>
        //       </CustomField>
        //       <CustomField>
        //         <Name>string</Name>
        //       </CustomField>
        //     </CustomFields>
        //   </entity>
        // </Get>

        require('../Acumatica/autoload.php');

        $username = config('acumatica.username');
        $password = config('acumatica.password');

        $client = new \DefaultEndpoint;
        $client->Login(new \Login($username, $password, null, null, null));

        $entity = new \Contact(false);

        $search = new \StringSearch('Equal');
        $search->setValue2('ContactID');
        $search->setValue('10');

        $entity->setContactID($search);

        $request = new \Get($entity);

        try {
            $client->Get($request);
        } catch (\SoapFault $e) {
            var_dump($client->__getLastRequest());
            throw $e;
        }


        // echo($this->getGUID());
        // $response = '';
        // try {
        //     $response = $this->acumaticaClient->Get();
        // } catch (\SoapFault $e) {
        //     var_dump($this->acumaticaClient->__getLastRequest());
        //     throw $e;
        // }

        // $commands = [
        //     $this->fields['id'],
        //     $this->fields['firstName'],
        //     $this->fields['lastName'],
        //     $this->fields['email']
        // ];
        //
        // $filters = [];
        //
        // $filters[] = [
        //     'Field' => [
        //         'FieldName' => 'ContactId',
        //         'ObjectName' => 'Contact',
        //     ],
        //     'Condition' => "Equals",
        //     'Value' => new \SoapVar($id, XSD_STRING, 'string', 'http://www.w3.org/2001/XMLSchema'),
        //     'OpenBrackets' => 0,
        //     'CloseBrackets' => 0,
        //     'Operator' => "And"
        // ];
        //
        // $response = $this->acumaticaClient->CR302000Export([
        //     'commands' => $commands,
        //     'filters' => $filters,
        //     'topCount' => 1,
        //     'includeHeaders' => false,
        //     'breakOnError' => false,
        // ])->ExportResult;
        //
        // if (property_exists($response, 'ArrayOfString') > 0) {
        //     $results = $response->ArrayOfString->string;
        // } else {
        //     abort(404);
        // }
        //
        // $data = [
        //     'id' => $results[0],
        //     'firstName' => $results[1],
        //     'lastName' => $results[2],
        //     'email' => $results[3],
        // ];
        //
        // return new Contact($data);
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

<?php

namespace App\Repositories;

use App\SalesOrder;

class SalesOrderRepository {

    public function __construct()
    {
    }

    protected $fields = [
        'orderNumber' => [
            "FieldName" => "OrderNbr",
            "ObjectName" => "Document",
            "Value" => "OrderNbr",
        ],
        'orderType' => [
            "FieldName" => "OrderType",
            "ObjectName" => "Document",
            "Value" => "OrderType",
        ],
        'status' => [
            "FieldName" => "Status",
            "ObjectName" => "Document",
            "Value" => "Status",
        ],
    ];

    public function all()
    {
        $client = $this->login();


        //dd($client->SO301000GetSchema());

        $commands = array_values($this->fields);

        $results = $client->SO301000Export([
            'commands' => $commands,
            'topCount' => 0,
            'includeHeaders' => false,
            'breakOnError' => false,
        ])->ExportResult->ArrayOfString;

        $salesOrders = [];
        foreach($results as $salesOrder) {
            $data['orderNumber'] =  $salesOrder->string[0];
            $data['orderType'] = $salesOrder->string[1];
            $data['status']  =  $salesOrder->string[2];

            array_push($salesOrders, new SalesOrder($data));
        }

        return $salesOrders;
    }

    public function find($orderNumber)
    {
        $client = $this->login();

        $commands = array_values($this->fields);

        $filters = [];
        $filters[] = [
            'Field' => [
                'FieldName' => 'OrderNbr',
                'ObjectName' => 'Document',
            ],
            'Condition' => "Equals",
            'Value' => new \SoapVar($orderNumber, XSD_STRING, 'string', 'http://www.w3.org/2001/XMLSchema'),
            'OpenBrackets' => 0,
            'CloseBrackets' => 0,
            'Operator' => "And"
        ];

        $salesOrder = $client->SO301000Export([
            'commands' => $commands,
            'filters' => $filters,
            'topCount' => 1,
            'includeHeaders' => false,
            'breakOnError' => false,
        ])->ExportResult->ArrayOfString;

        $data = [];
        $data['orderNumber'] =  $salesOrder->string[0];
        $data['orderType'] = $salesOrder->string[1];
        $data['status']  =  $salesOrder->string[2];

        return new SalesOrder($data);
    }

    public function create(array $data)
    {
        // $this->validateContactData($data);
        dd('salesOrder create');
    }

    public function destroy($id)
    {
        dd('salesOrder destroy');
    }

    private function login()
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

        return $client;
    }

}

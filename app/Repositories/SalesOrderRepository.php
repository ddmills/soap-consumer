<?php

namespace App\Repositories;

use App\SalesOrder;
use App\Acumatica\AcumaticaClient;

class SalesOrderRepository
{

    private $acumaticaClient;

    public function __construct(AcumaticaClient $acumaticaClient)
    {
        $this->acumaticaClient = $acumaticaClient;
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
        $commands = array_values($this->fields);

        $results = $this->acumaticaClient->SO301000Export([
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

        $salesOrder = $this->acumaticaClient->SO301000Export([
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

}

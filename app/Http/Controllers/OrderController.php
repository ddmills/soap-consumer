<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;

class OrderController extends Controller
{
    public function __construct()
    {
        SoapWrapper::add(function($service) {
            $service
                ->name(env('SOAP_SERVICE_NAME'))
                ->wsdl(env('SOAP_WSDL_LOCATION'))
                ->cache(WSDL_CACHE_NONE)
                ->trace(true);
        });
    }

    protected function getSoapService()
    {
        $serviceRef = null;
        SoapWrapper::service(env('SOAP_SERVICE_NAME'), function($service) use(&$serviceRef) {
            $serviceRef = $service;
        });

        $loginParams = [
            'name' => env('SOAP_USERNAME'),
            'password' => env('SOAP_PASSWORD'),
        ];

        $serviceRef->call('Login', [$loginParams]);
        return $serviceRef;
    }

    public function index()
    {
        $service = $this->getSoapService();

        $params = [
            'commands' => [
                [
                    'FieldName' => 'Dynamic',
                ],
            ],
            'filters' => [],
            'topCount' => 3,
            'includeHeaders' => true,
            'breakOnError' => true,
        ];

        // dd($service->call('GI000002Submit', []));
        // dd($service->call('SO301000GetSchema', []));
        dd($service->call('GI000002GetSchema', []));
        // dd($service->call('GI000002Submit', []));
        // dd($service->call('GI000002Export', [$params])->ExportResult->ArrayOfString);

        return view('order.index');
    }

    public function actions()
    {
        $functions = $this->getSoapService()->getFunctions();
        return view('order.actions', compact('functions'));
    }
}

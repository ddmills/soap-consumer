<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;

class OrderController extends Controller
{
    public function index()
    {
        SoapWrapper::add(function($service) {
            $service
                ->name(env('SOAP_SERVICE_NAME'))
                ->wsdl(env('SOAP_WSDL_LOCATION'))
                ->cache(WSDL_CACHE_NONE)
                ->trace(true);
        });

        $functions = [];

        SoapWrapper::service(env('SOAP_SERVICE_NAME'), function($service) use(&$functions) {
            $functions = $service->getFunctions();
        });

        dd($functions);
    }
}

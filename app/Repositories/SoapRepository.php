<?php

namespace App\Repositories;

use Artisaninweb\SoapWrapper\Facades\SoapWrapper;

trait SoapRepository {

    protected function getSoapService()
    {
        SoapWrapper::add(function($service) {
            $service
                ->name(env('SOAP_SERVICE_NAME'))
                ->wsdl(env('SOAP_WSDL_LOCATION'))
                ->cache(WSDL_CACHE_NONE)
                ->trace(true);
        });

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

}

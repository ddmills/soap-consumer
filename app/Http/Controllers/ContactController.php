<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;

class ContactController extends Controller
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

    public function index()
    {
        $service = $this->getSoapService();

        $params = [
            'commands' => [
                [
                    "FieldName" => "ContactID",
                    "ObjectName" => "Contact",
                    "Value" => "ContactID",
                    "Commit" => true,
                    // Adding the below blows things up
                    // "LinkedCommand" => [
                    //     "FieldName" => "Cancel",
                    //     "ObjectName" => "Contact",
                    //     "LinkedCommand" => [
                    //         "FieldName" => "ContactID",
                    //         "ObjectName" => "Contact",
                    //         "Value" => "=[Contact.ContactID]",
                    //     ],
                    // ],
                ],
                [
                    "FieldName" => "FirstName",
                    "ObjectName" => "Contact",
                    "Value" => "FirstName",
                ],
                [
                    "FieldName" => "LastName",
                    "ObjectName" => "Contact",
                    "Value" => "LastName",
                ],
                [
                    "FieldName" => "EMail",
                    "ObjectName" => "Contact",
                    "Value" => "Email",
                    "Commit" => true,
                ],
            ],
            'filters' => [
                [
                    'OpenBrackets' => 1,
                    'Field' => 'Email',
                    'Condition' => 'NotEqual',
                    'Value' => '',
                    'CloseBrackets' => 1,
                    'Operator' => 'And'
                ]
            ],
            'topCount' => 0,
            'includeHeaders' => true,
            'breakOnError' => false,
        ];

        $contacts = $service->call('CR302000export', [$params])->ExportResult->ArrayOfString;

        print('<div class="container"><table class="table table-striped">');
        foreach($contacts as $contact) {
            $con = $contact;
            print("<tr>" .
                "<td>" . $con->string[0] . "</td>" .
                "<td>" . $con->string[1] . "</td>" .
                "<td>" . $con->string[2] . "</td>" .
                "<td>" . $con->string[3] . "</td>" .
                "</tr>"
            );
        }
        print('</table></div>');
        return view('contact.index');
    }

    public function actions()
    {
        $functions = $this->getSoapService()->getFunctions();
        return view('contact.actions', compact('functions'));
    }

    public function schema()
    {
        $service = $this->getSoapService();
        dd($service->call('CR302000getSchema', []));
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
}

<?php

namespace App\Acumatica;

use \SoapClient;

use Cache;
use Config;

class AcumaticaClient extends SoapClient
{
    private $session;

    public function __construct()
    {
        parent::__construct(config('acumatica.wsdl'), [
            'cache_wsdl' => WSDL_CACHE_NONE,
            'exceptions' => true,
        ]);
        $this->setup();
    }

    public function setup()
    {
        if (Cache::has('acumatica.cookies')) {
            echo('<div class="alert alert-warning"><div class="container"><span class="glyphicon glyphicon-ok-circle"></span> Acumatica cookie detected</div></div>');
            $this->_cookies = Cache::get('acumatica.cookies');
            // $this->_cookies['ASP.NET_SessionId'][0] = 'invalid';
            // $this->_cookies['.ASPXAUTH'][0] = 'invalid';
        } else {
            $this->login();
        }
    }

    function __call($request, $data)
    {
        echo('<div class="alert alert-warning"><div class="container"><span class="glyphicon glyphicon-ok-circle"></span> Sending an a request: ' . $request . '</div></div>');

        try {
            $response = parent::__call($request, $data);
            echo('<div class="alert alert-success"><div class="container"><span class="glyphicon glyphicon-ok-circle"></span> Request success: ' . $request . '</div></div>');
            return $response;
        } catch (\SoapFault $e) {
            echo('<div class="alert alert-danger"><div class="container"><span class="glyphicon glyphicon-ok-circle"></span> Acumatica Request Failed. Going to login again and resend request.</div></div>');
            $this->login();
            echo('<div class="alert alert-warning"><div class="container"><span class="glyphicon glyphicon-ok-circle"></span> Sending an a request: ' . $request . '</div></div>');
            $response = parent::__call($request, $data);
            echo('<div class="alert alert-success"><div class="container"><span class="glyphicon glyphicon-ok-circle"></span> Request success: ' . $request . '</div></div>');
            return $response;
        }
    }

    public function login()
    {
        $username = config('acumatica.username');
        $password = config('acumatica.password');

        $response = parent::login([
            'name' => $username,
            'password' => $password
        ]);

        Cache::put('acumatica.cookies', $this->_cookies, 10);

        return $response->LoginResult;
    }

}

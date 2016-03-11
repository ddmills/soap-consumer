<?php

namespace App\Acumatica;

use \SoapClient;

use Cache;
use Config;
use Carbon\Carbon;

class AcumaticaClient extends SoapClient
{
    private $session;

    public function __construct()
    {
        parent::__construct(config('acumatica.wsdl'));
        $this->setup();
    }

    public function setup()
    {
        if (Cache::has('acumatica.cookies')) {
            $this->_cookies = Cache::get('acumatica.cookies');
        } else {
            $this->login();
            $expiresAt = Carbon::now()->addMinutes(10);
            Cache::put('acumatica.cookies', $this->_cookies, $expiresAt);
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

        print_r('logged in!');

        return $response->LoginResult;
    }

}

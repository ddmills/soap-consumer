<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository as Contacts;

class ContactController extends Controller
{
    protected $contacts;

    public function __construct(Contacts $contacts)
    {
        $this->contacts = $contacts;
    }

    public function index()
    {
        return view('contact.index', [
            'contacts' => $this->contacts->all()
        ]);
    }

    public function actions()
    {
        // $functions = $this->getSoapService()->getFunctions();
        // return view('contact.actions', compact('functions'));
    }

    public function schema()
    {
        // $service = $this->getSoapService();
        // dd($service->call('CR302000getSchema', []));
    }
}

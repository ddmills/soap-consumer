<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\ContactService;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $contacts = $this->contactService->all();
        return view('contact.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = $this->contactService->find($id);
        return view('contact.show', compact('contact'));
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

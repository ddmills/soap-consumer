<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\SalesOrderService;

class SalesOrderController extends Controller
{
    protected $salesOrderService;

    public function __construct(SalesOrderService $salesOrderService)
    {
        $this->salesOrderService = $salesOrderService;
    }

    public function index()
    {
        $salesOrders = $this->salesOrderService->all();
        return view('salesOrder.index', compact('salesOrders'));
    }

    public function show($orderNumber)
    {
        $salesOrder = $this->salesOrderService->find($orderNumber);
        return view('salesOrder.show', compact('salesOrder'));
    }

}

<?php

namespace App\Services;

use App\Repositories\SalesOrderRepository;

class SalesOrderService {

    private $salesOrderRepository;

    public function __construct(SalesOrderRepository $salesOrderRepository)
    {
        $this->salesOrderRepository = $salesOrderRepository;
    }

    public function all()
    {
        return $this->salesOrderRepository->all();
    }

    public function destroy($id)
    {
        return $this->salesOrderRepository->destroy($id);
    }

    public function find($id)
    {
        return $salesOrder = $this->salesOrderRepository->find($id);
    }

    public function create(array $data)
    {
        return $salesOrder = $this->salesOrderRepository->create($data);
    }
}

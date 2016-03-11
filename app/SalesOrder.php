<?php

namespace App;

class SalesOrder
{
    public $orderNumber;
    public $orderType;
    public $status;

    public function __construct(array $data)
    {
        $this->orderNumber = $data['orderNumber'];
        $this->orderType = $data['orderType'];
        $this->status = $data['status'];
    }

}

<?php

namespace App\Repositories;

use App\Bill;

class BillRepository
{
    protected $bill;

    public function __construct(Bill $bill)
    {
        $this->bill = $bill;
    }

    public function store($attributes)
    {
        $this->bill->create($attributes);
    }

}
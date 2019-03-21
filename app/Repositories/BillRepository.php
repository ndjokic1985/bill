<?php

namespace App\Repositories;

use App\Bill;

class BillRepository {

    protected $bill;

    public function __construct(Bill $bill) {
        $this->bill = $bill;
    }

    public function store($attributes) {
        $this->bill->create($attributes);
    }

    public function all() {
        return $this->bill->with('category')->get();
    }

    public function show($id) {
        return $this->bill->findOrFail($id);
    }

    public function update($attributes, $id) {
        $bill = $this->bill->findOrFail($id);
        return $bill->update($attributes);
    }

}

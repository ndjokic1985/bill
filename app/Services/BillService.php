<?php

namespace App\Services;

use App\Repositories\BillRepository;

class BillService {

    protected $billRepository;

    public function __construct(BillRepository $billRepository) {
        $this->billRepository = $billRepository;
    }

    public function getMonths() {
        return $months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ];
    }

    public function store($attributes) {
        $this->prepareData($attributes);
        $this->billRepository->store($attributes);
    }

    public function prepareData(&$attributes) {
        $month = date('m', strtotime($attributes['month']));
        $attributes['period'] = $attributes['year'] . '-' . $month . '-01';
        $attributes['paid'] = (isset($attributes['paid']) && $attributes['paid'] == 'on') ? 1 : 0;
        unset($attributes['year']);
        unset($attributes['month']);
    }

    public function all() {
        return $this->billRepository->all();
    }

    public function show($id) {
        return $this->billRepository->show($id);
    }

    public function update(array $attributes, $id) {
        $this->prepareData($attributes);
        return $this->billRepository->update($attributes, $id);
    }

    public function delete($id) {
        return $this->billRepository->delete($id);
    }

}

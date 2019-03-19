<?php

namespace App\Services;

use App\Repositories\BillRepository;

class BillService
{
    protected $billRepository;

    public function __construct(BillRepository $billRepository)
    {
        $this->billRepository = $billRepository;
    }
    public function getMonths()
    {
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

    public function store($attributes)
    {
        $period = $this->getPeriod($attributes);
        unset($attributes['year']);
        unset($attributes['month']);
        $attributes['period'] = $period;
        $this->billRepository->store($attributes);
    }
    public function getPeriod($attributes)
    {
        $month = date('m', strtotime($attributes['month']));
        $period = $attributes['year'] . '-' . $month . '-01';
        return $period;
    }

    public function all()
    {
        return $this->billRepository->all();
    }
}
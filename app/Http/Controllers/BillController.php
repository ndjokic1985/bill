<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillRequest;
use App\Services\BillCategoryService;
use App\Services\BillService;

/**
 * Class BillController.
 *
 * @package App\Http\Controllers
 */
class BillController extends Controller
{
    protected $billService;
    protected $billCategoryService;

    public function __construct(BillService $billService, BillCategoryService $billCategoryService)
    {
        $this->billService = $billService;
        $this->billCategoryService = $billCategoryService;
    }

    public function index()
    {

    }

    public function create()
    {
        $categories = $this->billCategoryService->all();
        $months = $this->billService->getMonths();
        return view('bill.create', compact('categories', 'months'));
    }

    public function store(BillRequest $request)
    {
        $this->billService->store($request->all());
    }

    public function show($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }

    public function edit($id)
    {

    }

}
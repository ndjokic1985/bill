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
class BillController extends Controller {

    protected $billService;

    protected $billCategoryService;

    public function __construct(BillService $billService, BillCategoryService $billCategoryService) {
        $this->billService = $billService;
        $this->billCategoryService = $billCategoryService;
    }

    public function index() {
        $bills = $this->billService->all();
        return view('bill.index', compact('bills'));
    }

    public function create() {
        $categories = $this->billCategoryService->all();
        $months = $this->billService->getMonths();
        return view('bill.create', compact('categories', 'months'));
    }

    public function store(BillRequest $request) {
        $this->billService->store($request->all());
        return redirect('/bill')->with('success', 'Bill has been created');
    }

    public function show($id) {

    }

    public function update(BillRequest $billRequest, $id) {
        $this->billService->update($billRequest->all(), $id);
        return redirect('/bill')->with('success', 'Bill has been updated');
    }

    public function destroy($id) {

    }

    public function edit($id) {
        $bill = $this->billService->show($id);
        $categories = $this->billCategoryService->all();
        $months = $this->billService->getMonths();
        return view('bill.edit', compact('bill', 'categories', 'months'));
    }

}

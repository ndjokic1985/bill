<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillCategoryRequest;
use App\Services\BillCategoryService;
use Illuminate\Http\Request;

class BillCategoryController extends Controller
{

    protected $billCategoryService;

    public function __construct(BillCategoryService $billCategoryService)
    {
        $this->billCategoryService = $billCategoryService;
    }

    public function index()
    {
        $categories = $this->billCategoryService->all();
        return view('bill_category.index', compact('categories'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('bill_category.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BillCategoryRequest $request)
    {
        $this->billCategoryService->create($request->all());
        return redirect('/billCategory')->with('success', 'Category has been added');
    }

    /**
     * Id parameter.
     *
     * @param $id
     */
    public function show($id)
    {

    }

    public function edit($id)
    {
        $category = $this->billCategoryService->show($id);
        return view('bill_category.edit', compact('category'));
    }

    public function update(BillCategoryRequest $request, $id)
    {
        $this->billCategoryService->update($request->all(), $id);
        return redirect('/billCategory')->with('success', 'Category has been updated');
    }

    public function destroy($id)
    {
        $this->billCategoryService->delete($id);
        return redirect('billCategory')->with('success', 'Category has been deleted successfully');
    }
}
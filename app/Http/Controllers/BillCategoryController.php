<?php

namespace App\Http\Controllers;

use App\BillCategory;
use App\Repositories\Repository;
use Illuminate\Http\Request;

class BillCategoryController extends Controller {

 protected $model;

 public function __construct(BillCategory $billCategory) {
  $this->model = new Repository($billCategory);
 }
 public function index() {
  $categories = $this->model->all();
  return view('bill_category.index', compact('categories'));
 }

 /**
  * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
  */
 public function create() {
  return view('bill_category.create');
 }

 /**
  * @param \Illuminate\Http\Request $request
  *
  * @return \Illuminate\Http\RedirectResponse
  */
 public function store(Request $request) {
  $request->validate([
   'name'    => 'required|unique:bill_categories',
   'due_day' => 'required|numeric|min:1|max:25',
  ]);
  $this->model->create([
   'name'    => $request->get('name'),
   'due_day' => $request->get('due_day'),
  ]);
  return redirect('/billCategory')->with('success', 'Category has been added');
 }

 /**
  * Id parameter.
  *
  * @param $id
  */
 public function show($id) {

 }

 public function edit($id) {
  $category = BillCategory::find($id);
  return view('bill_category.edit', compact('category'));
 }

 public function update(Request $request, $id) {
  $request->validate([
   'name'    => 'required',
   'due_day' => 'required|numeric|min:1|max:25',
  ]);
  $this->model->update([
   'name'    => $request->get('name'),
   'due_day' => $request->get('due_day'),
  ], $id);

  return redirect('/billCategory')->with('success', 'Category has been updated');
 }

 public function destroy($id) {
  $this->model->delete($id);
  return redirect('billCategory')->with('success', 'Category has been deleted successfully');
 }
}
<?php

namespace App\Http\Controllers;

use App\BillCategory;
use Illuminate\Http\Request;

/**
 * Class BillController.
 *
 * @package App\Http\Controllers
 */
class BillController extends Controller {

    public function index() {

    }

    public function create() {
        $categories = BillCategory::all();
        $months = [
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
        return view('bill.create', compact('categories', 'months'));
    }

    public function store(Request $request) {

    }

    public function show($id) {

    }

    public function update($id) {

    }

    public function destroy($id) {

    }

    public function edit($id) {

    }

}

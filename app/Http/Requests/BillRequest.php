<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'cat_id' => 'required',
            'amount' => 'required|numeric',
            'period' => 'unique:bills',
        ];
    }

    public function messages() {
        return [
            'cat_id.required' => 'Category is required.',
        ];
    }
}

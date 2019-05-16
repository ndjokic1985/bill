<?php

namespace App\Rules;

use App\Services\BillService;
use Illuminate\Contracts\Validation\Rule;

class UniqueBill implements Rule {

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $billService;

    public function __construct(BillService $billService) {
        $this->billService = $billService;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     *
     * @return bool
     */
    public function passes($attribute, $value) {
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'The validation error message.';
    }
}

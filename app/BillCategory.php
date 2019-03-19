<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillCategory extends Model
{

    /**
     * Table associated with model.
     *
     * @var string
     */
    protected $table = "bill_categories";

    /**
     * Fillable fields.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'due_day',
    ];

    public function bills()
    {
        return $this->hasMany('App\Bill');
    }
}

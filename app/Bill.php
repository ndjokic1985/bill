<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

    /**
     * Table associated with model.
     *
     * @var string
     */
    protected $table = 'bills';

    /**
     * Fillable fields.
     *
     * @var array
     */
    protected $fillable = [
        'cat_id',
        'amount',
        'paid',
        'period',
    ];

    public function category()
    {
        return $this->belongsTo('App\BillCategory', 'cat_id');
    }

}
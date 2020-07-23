<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model{

    protected $fillable = [
        'product_id',
        'user_id',
        'count'
    ];

    public function product(){
        return $this->belongsTo(Market_product::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market_product extends Model{

    protected $fillable = [
        'title',
        'image',
        'price',
        'description',
        'external_link',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Market_category::class);
    }

}

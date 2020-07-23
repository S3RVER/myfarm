<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice_products extends Model{
    public function product(){
        return $this->belongsTo(Market_product::class);
    }
}

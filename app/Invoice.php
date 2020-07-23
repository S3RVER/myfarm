<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model{

    protected $fillable = [
        'user_id',
        'address_id',
        'status',
        'refId'
    ];

    public function address(){
        return $this->belongsTo(Market_address::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Invoice_products::class);
    }
}

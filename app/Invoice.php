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
        return $this->hasOne(Address::class);
    }
}

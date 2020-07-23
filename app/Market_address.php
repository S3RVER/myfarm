<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market_address extends Model{

    protected $fillable = [
        'user_id',
        'title',
        'address',
        'postal_code',
        'mobile'
    ];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model{

    protected $fillable = [
        'title',
        'has_clay'
    ];

}

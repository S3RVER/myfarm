<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market_category extends Model{

    protected $fillable = [
        'title',
        'subtitle',
        'image_path'
    ];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model{

    use NodeTrait;

    protected $fillable = [
        'title',
        'alias'
    ];

    public function items(){
        return $this->hasMany(Item::class);
    }

}

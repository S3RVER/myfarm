<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop_recommendation extends Model{

    protected $fillable = [
        'crop_id',
        'kind',
        'from',
        'to',
        'value',
        'value_bio',
        'fee_bio',
        'bio_text',
        'clay',
    ];

    public function getFullBioAttribute(){
        if ($this->value_bio > 0) {
            $text = "{$this->value_bio} کیلوگرم + {$this->bio_text}";
        }else{
            $text = '';
        }
        return $text;
    }

}

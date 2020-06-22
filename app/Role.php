<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model{
    protected $fillable = [
        'title'
    ];

    public function getLinkedTitleAttribute(){
        $link = route('rbac.show', $this->id);
        return "<a href='{$link}'>{$this->title}</a>";
    }
}

<?php

namespace App\Http\Controllers;

use App\User;

class PersonnelController extends UsersController {

    protected function userSelect(){
        return User::whereHas('roles', function($query){
            // select system default roles and use the ids
            $query->whereNotIn('roles.id', [2,3]);
        })->orderBy('id','desc')->get();
    }

    protected function redirectTo($msg){
        return redirect()->route('personnel.index')->with(['success' => $msg]);
    }

    protected function urlName(){
        return 'personnel';
    }

}

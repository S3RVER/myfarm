<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class CheckPermission{

    private $abilities = [];

    public function handle($request, Closure $next){
        $name = Route::currentRouteName();
        if (empty($this->abilities)) {
            $this->setAbilities(Auth::id());
        }
        Config::set(['abilities' => $this->abilities]);
        if (!in_array($name, Config::get('check_permission')['exception'])) {
            if (empty($this->abilities)) {
                $this->setAbilities(Auth::id());
            }
            if (!(isset($this->abilities[$name]) && $this->abilities[$name] === true)) {
                return $next($request);
                abort(403,'شما مجوز این عملیات را ندارید');
            }
        }
        return $next($request);
    }

    private function setAbilities($user_id){
//        $this->abilities = Cache::rememberForever("user_id_{$user_id}_abilities", function () use ($user_id) {
            $select = DB::table('users');
            $select->join('role_users','users.id','role_users.user_id');
            $select->join('roles','roles.id','role_users.role_id');
            $select->join('role_abilities','roles.id','role_abilities.role_id');
            $select->join('abilities','abilities.id','role_abilities.ability_id');
            $select->where('users.id', $user_id);
            $select->select([
                'abilities.name AS ability_name'
            ]);
            $data = $select->get();
            $abilities = [];
            foreach ($data as $key => $value) {
                $abilities[$value->ability_name] = true;
            }
            $select = DB::table('users_abilities_override');
            $select->join('abilities','abilities.id','users_abilities_override.ability_id');
            $select->where('user_id', $user_id);
            $select->select([
                'abilities.name AS ability_name',
                'users_abilities_override.mode AS mode'
            ]);
            $data = $select->get();
            foreach ($data as $key => $value) {
                $abilities[$value->ability_name] = ($value->status) ? true : false;
            }
            return $this->abilities = $abilities;
//        });
    }

}

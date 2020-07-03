<?php

namespace App\Http\Controllers;

use App\Role;
use App\Role_users;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

class UsersController extends Controller{

    public function __construct(){
        View::share('url', $this->urlName());
    }

    public function index(){
        $data = $this->userSelect();
        return view('users.index', ['data' => $data]);
    }

    protected function userSelect(){
        return User::whereHas('roles', function($query){
            // select system default roles and use the ids
            $query->whereIn('roles.id', [2,3]);
        })->orderBy('id','desc')->get();
    }

    public function create(){
        $abilities_data = $this->check_set_roles_abilities();
        if ($abilities_data === true) {
            $data = Role::all();
        }else{
            $data = Role::whereIn('title',$abilities_data['titles']);
            if ($abilities_data['custom'] === true) {
                $data->orWhere('system_default', false);
            }
            $data = $data->get(['id','title']);
        }
        return view('users.create', ['data' => $data]);
    }

    public function store(Request $request){
        $request->validate([
            'mobile'    => 'required|unique:users,mobile',
            'password'  => 'required',
            'role'      => 'required'
        ]);

        $password = ['password' => bcrypt($request->password)];
        $request->merge($password);
        $user = User::create($request->all());

        $roles = [];
        foreach ($request->role as $value) {
            $roles[] = ['user_id' => $user->id, 'role_id' => $value];
        }
        Role_users::insert($roles);
        return $this->redirectTo('آیتم با موفقیت ایجاد شد');
    }

    public function show($id){
        $data = User::findOrFail($id);
        return view('users.show', ['data' => $data]);
    }

    public function edit($id){
        $user['data'] = User::FindOrFail($id);
        $role_user = Role_users::where('user_id', $id)->get(['role_id']);
        $user['roles'] = [];
        foreach ($role_user as $key => $value) {
            $user['roles'][] = $value->role_id;
        }
        $abilities_data = $this->check_set_roles_abilities();
        if ($abilities_data === true) {
            $data = Role::all();
        }else{
            $data = Role::whereIn('title', $abilities_data['titles']);
            if ($abilities_data['custom'] === true) {
                $data->orWhere('system_default', false);
            }
            $data = $data->get(['id','title']);
        }
        return view('users.edit', ['data' => $data,'user' => $user]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'role'      => 'required'
        ]);

        $data = User::findOrFail($id);

        if (!empty($request->password)) {
            $request->merge(['password' => bcrypt($request->password)]);
            $input = $request->except('mobile');
            $data->fill($input)->save();
        }

        $role_user = Role_users::where('user_id', $id)->get(['role_id']);
        $roles_id = [];
        foreach ($role_user as $key => $value) {
            $roles_id[] = $value->role_id;
        }
        $request_role = $request->role;
        sort($request_role);
        sort($roles_id);
        if ($request_role != $roles_id) {
            Role_users::where('user_id', $id)->delete();
            $role_user = [];
            foreach ($request_role as $key => $value) {
                $role_user[] = [
                    'user_id' => $id,
                    'role_id' => $value
                ];
            }
            Role_users::insert($role_user);
//            Cache::forget("user_id_{$id}_abilities");
        }
        return $this->redirectTo('آیتم با موفقیت ویرایش شد');
    }

    public function destroy($id){
        User::find($id)->delete();
        return $this->redirectTo('آیتم با موفقیت حذف شد');
    }

    private function check_set_roles_abilities(){
        $abilities = Config::get('abilities');
        $roles = [
            ['title' => 'مدیریت', 'ability' => 'users.set_role.admin'],
        ];
        $data['titles'] = [];
        $data['custom'] = false;
        foreach ($roles as $key => $value) {
            if (isset($abilities[$value['ability']]) && $abilities[$value['ability']] === true) {
                $data['titles'][] = $value['title'];
            }
        }
        if (isset($abilities['user.set_role.custom']) && $abilities['user.set_role.custom'] === true) {
            $data['custom'] = true;
        }
        if (count($data['titles']) === count($roles) && $data['custom'] === true) {
            $data = true;
        }
        return $data;
    }

    protected function redirectTo($msg){
        return redirect()->route('users.index')->with(['success' => $msg]);
    }

    protected function urlName(){
        return 'users';
    }
}

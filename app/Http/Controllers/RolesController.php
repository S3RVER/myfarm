<?php

namespace App\Http\Controllers;

use App\Ability;
use App\Role;
use App\Role_ability;
use App\Role_dependency;
use App\Role_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RolesController extends Controller{

    public function index(){
        $data = Role::orderBy('id','desc')->get();
        return view('rbac.index', ['data' => $data]);
    }

    public function create(){
        $data = Ability::where('sub_ability', false)->get();
        $data = $data->groupBy('group');
        return view('rbac.create', ['data' => $data]);
    }

    public function store(Request $request){
        $request->validate([
            'role_title' => 'required|unique:roles,title',
            'rbac' => 'required'
        ]);
        $new_role = Role::create([
            'title' => $request->role_title
        ]);
        $insert = $this->role_abilities_preper($request, $new_role->id);
        Role_ability::insert($insert);
        return redirect()->route('rbac.index')->with(['success' => 'نقش جدید با موفقیت ایجاد شد']);
    }

    public function show($id){

    }

    public function edit($id){
        $data['role'] = Role::findOrFail($id);
        $data['role_ability'] = Role_ability::where('role_id', $id)->get();
        $data['role_ability'] = $data['role_ability']->keyBy('ability_id');
        $data['abilities'] = Ability::where('sub_ability', false)->get();
        $data['abilities'] = $data['abilities']->groupBy('group');
        return view('rbac.edit', ['data' => $data]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'role_title' => 'required|unique:roles,title,'.$id,
            'rbac' => 'required'
        ]);
        $role = Role::findOrFail($id);
        $role->title = $request->role_title;
        $role->save();

        $insert = $this->role_abilities_preper($request, $id);
        Role_ability::where('role_id', $id)->delete();
        Role_ability::insert($insert);
        $role_users = Role_users::where('role_id', $id)->get();
        foreach ($role_users as $key => $value) {
            Cache::forget("user_id_{$value->user_id}_abilities");
        }
        return redirect()->route('rbac.index')->with(['success' => 'نقش با موفقیت ویرایش شد']);
    }

    public function destroy($id){
        $role = Role::findOrFail($id);
        if ($role->system_default !== 1) {
            $role->delete();
            Role_ability::where('role_id', $id)->delete();
            $role_users = Role_users::where('role_id', $id)->get();
            Role_users::where('role_id', $id)->delete();
            foreach ($role_users as $key => $value) {
                Cache::forget("user_id_{$value->user_id}_abilities");
            }
        }
        return redirect()->route('rbac.index')->with(['success' => 'نقش با موفقیت حذف شد']);;
    }

    private function role_abilities_preper($request, $role_id){
        $keys = array_keys($request->rbac);
        $role_ids = [];
        foreach ($keys as $key => $value) {
            if(is_numeric($value)){
                $role_ids[] = $value;
            }
        }
        $dependent_to_roles = Role_dependency::whereIn('dependent_to_role_id', $keys)->get();
        $dependent_to_role_ids = [];
        foreach ($dependent_to_roles as $key => $value) {
            $dependent_to_role_ids[] = $value->role_id;
        }
        $merged = array_merge($role_ids, $dependent_to_role_ids);
        $insert = [];
        foreach ($merged as $key => $value) {
            $insert[] = [
                'role_id' => $role_id,
                'ability_id' => $value
            ];
        }
        return $insert;
    }
}

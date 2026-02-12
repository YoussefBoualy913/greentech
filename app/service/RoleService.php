<?php
namespace App\service;

use App\Http\Requests\StoreroleRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleService
{


public function index()
{
  $roles = Role::all();
  $permissions = Permission::all();
  return $data =[
    'roles' => $roles,
    'permissions' => $permissions
  ];

}

 public function store(StoreroleRequest $request)
    {
      Role::firstOrCreate($request->validated());
      $rolename = $request->name;
      $Role = Role::where('name',$rolename)->first();

      $Role->syncPermissions($request->permissions);

      }
      
      public function update(StoreroleRequest $request ,role $role)
    {
          
          $role->update($request->validated());
       
    
    }

    public function  delete(role $role)
    {
     $role->delete();
    }

}
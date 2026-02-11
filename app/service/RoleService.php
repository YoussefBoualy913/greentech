<?php
namespace App\service;

use App\Http\Requests\StoreroleRequest;
use Spatie\Permission\Models\Role;

class RoleService
{


public function index()
{
  return   $user = Role::all();

}

 public function store(StoreroleRequest $request)
    {
      role::create($request->validated());
      
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
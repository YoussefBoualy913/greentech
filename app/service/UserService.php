<?php
namespace App\service;

use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;
use App\Models\User;


class UserService
{


public function index()
{
  return   $user = user::with('roles')->paginate(3);

}

 public function store(StoreuserRequest $request)
    {
      $user =  user::create($request->validated());
      $user->assignRole($request->role);
      
      }
      
      public function update(UpdateuserRequest $request ,User $user)
    {
          
          $user->update($request->validated());
          $user->assignRole($request->role);
       
    
    }

    public function  delete(User $user)
    {
     $user->delete();
    }

}
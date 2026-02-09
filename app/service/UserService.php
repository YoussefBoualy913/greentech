<?php
namespace App\service;

use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;
use App\Models\User;


class UserService
{


public function index()
{
  return   $user = user::latest()->paginate(3);

}

 public function store(StoreuserRequest $request)
    {
      user::create($request->validated());
      
      }
      
      public function update(UpdateuserRequest $request ,User $user)
    {
          
          $user->update($request->validated());
       
    
    }

    public function  delete(User $user)
    {
     $user->delete();
    }

}
<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;
use App\Models\User as ModelsUser;
use App\service\UserService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserService $service)
    {  
        $users = $service->index();
     
        return view('users.index',compact('users'));
        }
        
        /**
         * Show the form for creating a new resource.
        */
        public function create()
        {   

            $roles = Role::all();
            $data = [
                'user' => null,
                'roles' => $roles,
                'route' => route('users.store'),
                'method' => 'POST'
            ];
            return view('users.create',$data);
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreuserRequest $request,UserService $service)
    {
        $service->store($request);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
         $roles = Role::all();
         $data = [
                'user' => $user,
                'roles' => $roles,
                'route' => route('users.update',$user),
                'method' => 'PUT'
            ];
         return view('users.create',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateuserRequest $request,UserService $service , user $user)
    {
         $service->update($request,$user);
         return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user,UserService $service)
    {
       $service->delete($user);
       return redirect()->route('users.index');

    }

    
}

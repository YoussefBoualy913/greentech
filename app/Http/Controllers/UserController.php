<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreuserRequest;
use App\Models\User as ModelsUser;
use App\service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserService $service)
    {  
        $user = $service->index();
        return view('users.index',compact('users'));
        }
        
        /**
         * Show the form for creating a new resource.
        */
        public function create()
        {   

            return view('users.create');
            
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,UserService $service , user $user)
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
    }
}

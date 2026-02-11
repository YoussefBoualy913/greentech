<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreroleRequest;
use App\service\RoleService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RoleService $service)
    {  
        $roles = $service->index();
        return view('roles.roles',compact('roles'));
        }
        
        /**
         * Show the form for creating a new resource.
        */
        public function create()
        {   

            return view('roles.roles');
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreroleRequest $request,RoleService $service)
    {
        $service->store($request);
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,RoleService $service , Role $role)
    {
         $service->update($request, $role);
         return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role,RoleService $service)
    {
       $service->delete($role);
    }
}

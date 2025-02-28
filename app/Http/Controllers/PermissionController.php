<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    //index
    public function index(Request $request){
        $permissions = Permission::with('prajurit')
            ->when($request->input('name'), function ($query, $name) {
                $query->whereHas('prajurit', function ($query) use ($name) {
                    $query->where('name', 'like', '%' . $name . '%');
                });
            })->orderBy('id', 'desc')->paginate(10);
        return view('pages.permission.index', compact('permissions'));
    }

     //view
     public function show($id)
     {
         $permission = Permission::with('prajurit')->find($id);
         return view('pages.permission.show', compact('permission'));
     }

     //edit
     public function edit($id)
     {
         $permission = Permission::find($id);
         return view('pages.permission.edit', compact('permission'));
     }

     //update
    public function update(Request $request, $id){
        $permission = Permission::find($id);
        $permission->is_approved = $request->is_approved;
        $permission->save();
        return redirect()->route('permissions.index')->with('success', 'Permission Updated Successfully');

    }

     // destroy
     public function destroy(Permission $permission){

        $permission->delete();
        return redirect()->route('permissions.index')->with('success', 'Permission Delete Successfull');
    }
}

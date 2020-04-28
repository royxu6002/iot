<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        return Group::all(); 
    }

    public function show(Group $group)
    {
        return $group;
    }

    public function store(Request $request)
    {
        
        $result = Group::create([
            'name' => $request->groupname,
        ]);
        if ($result) {
            return response()->json([
                'msg' => 'created successfully',
            ]); 
        } else {
            return response()->json([
                'msg' => 'sorry, create process failed',
            ]);
        }
    }
    // 不支持
    public function update(Request $request, $id)
    {
        $update = Group::findOrFail($id)->update([
            'name' => $request->name,
        ]);
        if ($update) {
            return response()->json([
                'msg' => 'updated successfullly',
            ]);
        } else {
            return response()->json([
                'msg' => 'failed updating',
            ]);
        }
    }

    public function destroy(Group $group)
    {
        $delete = $group->delete();
        if ($delete) {
            return response()->json([
                'msg' => 'delete successfully',
            ]);
        } else {
            return response()->json([
                'msg' => 'sorry, the information still remains',
            ]);
        }
    }

    public function getCustomers(Group $group) 
    {
        return $group->customers()->get();
    }
}

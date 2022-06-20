<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Staff;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $staff = Staff::all();
        $staffSelect = Staff::all();
        $group = Group::all();
        return view('welcome',
            [
                'staff' => $staff,
                'group' => $group,
                'staffSelect'=>$staffSelect
            ]
        );
    }
    public function createGroup(Request $request){
//        dd($request->request->get('name'));
        Group::create([
            'name'=>$request->request->get('name')
        ]);
        return redirect()->to('/');
    }
    public function createStaff(Request $request){
        Staff::create([
            'name'=>$request->request->get('name'),
            'group_id'=>$request->request->get('group'),
            'parent_id'=>$request->request->get('parent_id'),
            'role'=>$request->request->get('role'),
        ]);
        return redirect()->to('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Phongban;
use App\Models\Nhanvien;
use App\Models\Role;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $staff = Nhanvien::with('role','phongban')->latest()->get();
        $staffRoleAdmin = Nhanvien::with('role')->whereHas('role', function($query) {
            return $query->where('role_id', 1);
        })->get();
        $staffSelect = Nhanvien::all();
        $group = Phongban::with('nhanvien')->get();
        $roles = Role::all();
        return view('welcome',
            [
                'staff' => $staff,
                'group' => $group,
                'staffSelect'=>$staffSelect,
                'roles'=>$roles,
                'staffRoleAdmin'=>$staffRoleAdmin
            ]
        );
    }
    public function createGroup(Request $request){
//        dd($request->request->get('name'));
        Phongban::create([
            'name'=>$request->request->get('name')
        ]);
        return redirect()->to('/');
    }
    public function createStaff(Request $request){

//        dd($request->get('group'));
        $nhanvien = Nhanvien::create([
            'name'=>$request->request->get('name'),
            'parent_id'=>$request->request->get('parent_id'),
        ]);
        $nhanvien->role()->attach($request->get('roles'));
        $nhanvien->phongban()->attach($request->get('phongban'));
        return redirect()->to('/');
    }
    public function createRole(Request $request){
        Role::create([
            'name'=>$request->request->get('name')
        ]);
        return redirect()->to('/');

    }
}

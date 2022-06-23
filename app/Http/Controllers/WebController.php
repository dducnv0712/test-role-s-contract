<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Phongban;
use App\Models\Nhanvien;
use App\Models\Province;
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
        $province = Province::with('district','street','ward')->get();
        $district = District::with("province")->get();
        $path = storage_path() . "/json/local.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true);

//        dd($json);
        return view('welcome',
            [
                'staff' => $staff,
                'group' => $group,
                'staffSelect'=>$staffSelect,
                'roles'=>$roles,
                'staffRoleAdmin'=>$staffRoleAdmin,
                'province'=>$json
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

    public function getLocal(Request $request){
        $province_id = $request->get('prov_id');
        $district_id = $request->get('district_id');
        $path = storage_path() . "/json/local.json";
        $json = json_decode(file_get_contents($path), true);
        foreach ($json as $province){
            if($province_id !=null){
                if($province['id'] == $province_id){
                    if($district_id !== null){
                       foreach ($province['districts'] as $district){
                           if($district['id'] == $district_id){
                               return response()->json([
                                   'province'=>$province,
                                   'district'=>$district
                               ]);
                           }
                       }
                    }else{
                        return response()->json([
                            'province'=>$province
                        ]);
                    }

                }
            }

        }
        return null;

    }
}

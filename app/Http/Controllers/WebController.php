<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Phongban;
use App\Models\Nhanvien;
use App\Models\Role;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $staff = Nhanvien::with('role', 'phongban')->latest()->get();
        $staffRoleAdmin = Nhanvien::with('role')->whereHas('role', function ($query) {
            return $query->where('role_id', 1);
        })->get();
        $staffSelect = Nhanvien::all();
        $group = Phongban::with('nhanvien')->get();
        $roles = Role::all();
        $path = storage_path() . "/json/local.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true);
//        dd($json);
        return view('welcome',
            [
                'staff' => $staff,
                'group' => $group,
                'staffSelect' => $staffSelect,
                'roles' => $roles,
                'staffRoleAdmin' => $staffRoleAdmin,
                'province' => $json
            ]
        );
    }


    public function createGroup(Request $request)
    {
        $province_id = $request->request->get('province');
        $district_id = $request->request->get('district');
        $ward_id = $request->request->get('ward');
        $path = storage_path() . "/json/local.json";
        $json = json_decode(file_get_contents($path), true);
        $province_name = '';
        $district_name = '';
        $ward_name = '';
        foreach ($json as $province) {
            if ($province_id != null) {
                if ($province['id'] == $province_id) {
                    if ($district_id !== null) {
                        foreach ($province['districts'] as $district) {
                            if ($district['id'] == $district_id) {
                                foreach ($district['wards'] as $item_ward) {
                                    if ($item_ward['id'] == $ward_id) {
                                        $province_name = $province['name'];
                                        $district_name = $district['name'];
                                        $ward_name =$item_ward['prefix'] .' '. $item_ward['name'];
                                    }
                                }
                            }
                        }
                    } else {
                        return response()->json([
                            'province' => $province
                        ]);
                    }

                }
            }

        }

//        dd($province_name,$district_name,$ward_name);
        Phongban::create([
            'name' => $request->request->get('name'),
            'province'=>$province_name,
            'district'=>$district_name,
            'ward'=>$ward_name
        ]);
        return redirect()->to('/');
    }

    public function createStaff(Request $request)
    {
        $province_id = $request->request->get('province');
        $district_id = $request->request->get('district');
        $ward_id = $request->request->get('ward');
        $path = storage_path() . "/json/local.json";
        $json = json_decode(file_get_contents($path), true);
        $province_name = '';
        $district_name = '';
        $ward_name = '';
        foreach ($json as $province) {
            if ($province_id != null) {
                if ($province['id'] == $province_id) {
                    if ($district_id !== null) {
                        foreach ($province['districts'] as $district) {
                            if ($district['id'] == $district_id) {
                                foreach ($district['wards'] as $item_ward) {
                                    if ($item_ward['id'] == $ward_id) {
                                        $province_name = $province['name'];
                                        $district_name = $district['name'];
                                        $ward_name =$item_ward['prefix'] .' '. $item_ward['name'];
                                    }
                                }
                            }
                        }
                    } else {
                        return response()->json([
                            'province' => $province
                        ]);
                    }

                }
            }

        }

//        dd($request->get('group'));
        $nhanvien = Nhanvien::create([
            'name' => $request->request->get('name'),
            'parent_id' => $request->request->get('parent_id'),
            'province'=>$province_name,
            'district'=>$district_name,
            'ward'=>$ward_name
        ]);
        $nhanvien->role()->attach($request->get('roles'));
        $nhanvien->phongban()->attach($request->get('phongban'));
        return redirect()->to('/');
    }

    public function createRole(Request $request)
    {
        Role::create([
            'name' => $request->request->get('name')
        ]);
        return redirect()->to('/');

    }

    public function getLocal(Request $request)
    {
        $province_id = $request->get('prov_id');
        $district_id = $request->get('district_id');
        $path = storage_path() . "/json/local.json";
        $json = json_decode(file_get_contents($path), true);
        foreach ($json as $province) {
            if ($province_id != null) {
                if ($province['id'] == $province_id) {
                    if ($district_id !== null) {
                        foreach ($province['districts'] as $district) {
                            if ($district['id'] == $district_id) {
                                return response()->json([
                                    'province' => $province,
                                    'district' => $district
                                ]);
                            }
                        }
                    } else {
                        return response()->json([
                            'province' => $province
                        ]);
                    }

                }
            }

        }
        return null;

    }

    public function insertLocal()
    {
        $path = storage_path() . "/json/local.json";
        $json = json_decode(file_get_contents($path), true);
        foreach ($json as $province) {
            $province_insert = Local::create([
                'name' => $province['name'],
                'code' => $province['code'],
                'type' => 'province'
            ]);
            foreach ($province['districts'] as $district) {
                $district_insert = Local::create([
                    'name' => $district['name'],
                    'type' => 'district',
                    'parent_id' => $province_insert->id
                ]);
                foreach ($district['wards'] as $ward) {
                    Local::create([
                        'name' => $ward['name'],
                        'type' => 'ward',
                        'prefix' => $ward['prefix'],
                        'parent_id' => $district_insert->id
                    ]);
                }
            }
        }
        return redirect()->to('/');
    }

    public function getLocalFromDB(Request $request)
    {
        $province_id = $request->get('province_id');
        $local = Local::search($request)->with('parent', 'children')->take(6)->get();
        dd($local);
        return response()->json([
            'local' => $local
        ]);
    }
}

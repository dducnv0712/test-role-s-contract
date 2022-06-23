<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    use HasFactory;
    protected $table ="nhanvien";
    protected $fillable = [
        'name',
        'parent_id',
    ];
    public function phongban()
    {
        return $this->belongsToMany(Phongban::class)->withTimestamps();
    }
    public function role()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
}

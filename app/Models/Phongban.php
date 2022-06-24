<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phongban extends Model
{
    use HasFactory;
    protected $table ="phongban";
    protected $fillable = [
        'name',
        'province',
        'district',
        'ward'
    ];

    public function nhanvien()
    {
        return $this->belongsToMany(Nhanvien::class);
    }
}

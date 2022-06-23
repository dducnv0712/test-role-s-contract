<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = "province";
    protected $fillable = [
        '_name',
        '_code',
    ];
    public function district()
    {
        return $this->hasMany(District::class, '_province_id','id');
    }

    public function street()
    {
        return $this->hasMany(Street::class, '_province_id','id');
    }

    public function ward()
    {
        return $this->hasMany(Ward::class, '_province_id');
    }
}

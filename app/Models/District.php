<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = "district";
    protected $fillable = [
        '_name',
        '_prefix',
    ];


    public function street()
    {
        return $this->hasMany(Street::class, '_district_id','id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, '_province_id','id');
    }
}

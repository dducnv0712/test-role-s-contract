<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $table = "street";
    protected $fillable = [
        '_name',
        '_prefix',
    ];
    public function province()
    {
        return $this->belongsTo(Province::class, '_province_id','id');
    }

    public function district()
    {
        return $this->belongsTo(Street::class, '_district_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $table ="local";
    protected $fillable = [
        'name',
        'prefix',
        'code',
        'type',
        'parent_id'
    ];
    public function children()
    {
        return $this->hasMany(Local::class, 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo(Local::class,'parent_id');
    }
    public function scopeSearch($query,$search){
        $province = $search->get('province_id');
        $district = $search->get('district_id');

        if($province != null){
            return $query->where("id",$province);
        }else if($district !=null) {
            return $query->where("parent_id",$district);
        }
        return $query;


    }
}

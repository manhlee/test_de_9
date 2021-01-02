<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hanghoa extends Model
{
    use HasFactory;
    protected $table='hanghoa';
    protected function hangsanxuat()
    {
    	return $this->belongsTo('App\Models\hangsanxuat','hangsx_id','id');
    }
    protected function chitietvandon()
    {
    	return $this->hasMany('App\Models\chitietvandon','hanghoa_id','id');
    }
}

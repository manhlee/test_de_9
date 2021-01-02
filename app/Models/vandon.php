<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vandon extends Model
{
    use HasFactory;
    protected $table="vandon";
    protected function nhanvien()
    {
    	return $this->belongsTo('App\Models\nhanvien','nhanvien_id','id');
    }
     protected function chitietvandon()
    {
    	return $this->hasMany('App\Models\chitietvandon','id_vandon','id');
    }
}

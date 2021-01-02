<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hangsanxuat extends Model
{
    use HasFactory;
    protected $table="hangsanxuat";
    protected function hanghoa()
    {
    	return $this->hasMany('App\Models\hanghoa','hangsx_id','id');
    }
}

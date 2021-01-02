<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietvandon extends Model
{
    use HasFactory;
    protected $table="chitietvandon";
    protected function vandon()
    {
    	return $this->belongsTo('App\Models\vandon','id_vandon','id');
    }
     protected function hanghoa()
    {
    	return $this->belongsTo('App\Models\hanghoa','hanghoa_id','id');
    }
}

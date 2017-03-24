<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table='permissions';

    protected $fillable = [
        'name','description'
    ];


    function roles(){
    	return $this->belongsToMany('App\Models\Role','App\Models\Role_role','id','permission_id');
    }
}

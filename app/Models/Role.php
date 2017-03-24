<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';

    protected $fillable = [
        'name','description'
    ];

    function admins(){
    	$this->hasmany('App\Models\Admin');
    }

    function permissions(){
    	return $this->belongsToMany('App\Models\Permission','App\Models\Role_permission','id','role_id');
    }
}
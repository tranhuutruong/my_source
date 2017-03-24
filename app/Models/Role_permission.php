<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role_permission extends Model
{
    protected $table='Role_permissions';
    protected $fillable=['role_id','permission_id'];
}

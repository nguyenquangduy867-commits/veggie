<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    protected $fillable = ['role_id','permission_id'];

    public function role()  {

        return $this->belongsToMany(Permission::class,'role_permission');
        
    }

    public function permission(){

        return $this->belongsTo(Permission::class);
    }
}

<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Role extends Model
{
    // use HasFactory;
    use softDeletes;

    public $tabel = 'role';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare filllabel = mendeklarasikan table ini bisa di isi
    protected $fillabel =[
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function permission_role()
    {
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole','role');
    }

    
    public function role_user()
    {
        return $this->hasMany('App\Models\ManagementAccess\RoleUser','role');
    }
}

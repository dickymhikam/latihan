<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class PermissionRole extends Model
{
    // use HasFactory;
    use softDeletes;

    // declare table = deklarasi nama tebelnya
    public $tabel = 'permission_role';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare filllabel = mendeklarasikan table ini bisa di isi
    protected $fillabel =[
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function permission()
    {
        return $this->belongsTo('App\Models\ManagementAccess\Permission','permission_id','id');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\ManagementAccess\Role','role_id','id');
    }
}

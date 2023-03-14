<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Permission extends Model
{
    // use HasFactory;
    use softDeletes;

    // declare table = deklarasi nama tebelnya
    public $tabel = 'permission';

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
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole','permission');
    }
    
}

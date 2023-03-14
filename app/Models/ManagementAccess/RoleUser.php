<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class RoleUser extends Model
{
    // use HasFactory;

    use softDeletes;

    // declare table = deklarasi nama tebelnya
    public $tabel = 'role_user';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare filllabel = mendeklarasikan table ini bisa di isi
    protected $fillabel =[
        'role_id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTO('App\Models\User','user_id','id');
    }

    public function role()
    {
        return $this->belongsTO('App\Models\ManagementAccess\Role','role_id','id');
    }
}

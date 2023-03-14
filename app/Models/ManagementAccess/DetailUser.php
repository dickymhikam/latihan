<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class DetailUser extends Model
{
    // use HasFactory;
    use softDeletes;

    // declare table = deklarasi nama tebelnya
    public $tabel = 'detail_user';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare filllabel = mendeklarasikan table ini bisa di isi
    protected $fillabel =[
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function type_user(){
        /* untuk belongsTo itu mempunyai 3 parameter yaitu ada path model yang dituju,  
           field tabel FK(Foreign Key),dan primary key dari tabel hasMany/hasOne
           
           belongs = milik */
        return $this->belongsTo('App\Models\MasterData\TypeUser','type_user_id','id');
    }
    
    public function user(){
        /* untuk belongsTo itu mempunyai 3 parameter yaitu ada path model yang dituju,  
           field tabel FK(Foreign Key),dan primary key dari tabel hasMany/hasOne
           
           belongs = milik */
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}

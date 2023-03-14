<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TypeUser extends Model
{
    // use HasFactory;
    use softDeletes;

    // declare table = deklarasi nama tebelnya
    public $tabel = 'type_user';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare filllabel = mendeklarasikan table ini bisa di isi
    protected $fillabel =[
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many 
    public function detail_user()
    {
        return $this->hasMany('App\Models\ManagementAccess\DetailUser','type_user_id');
         /*untuk parameter pertama itu diisikan dengan path model yang kita tuju
           sedangkan untuk parameter kedua itu disi dengan field tabel itu sendiri*/
    }
}

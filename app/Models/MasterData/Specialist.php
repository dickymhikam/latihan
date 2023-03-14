<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Specialist extends Model
{
    // use HasFactory;
    use softDeletes;

    // declare table = deklarasi nama tebelnya
    public $tabel = 'specialist';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare filllabel = mendeklarasikan table ini bisa di isi
    protected $fillabel =[
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function doctor()
    {
        return $this->hasMany('App\Models\Oprasional\Doctor','specialist_id');
         /*untuk parameter pertama itu diisikan dengan path model yang kita tuju
           sedangkan untuk parameter kedua itu disi dengan field tabel itu sendiri*/
    }
}

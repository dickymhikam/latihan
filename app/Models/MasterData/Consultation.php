<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Consultation extends Model
{
    // use HasFactory;
    use softDeletes;

    // declare table = deklarasi nama tebelnya
    public $tabel = 'consultation';

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

    public function appointment(){
        return $this->hasMany('App\Models\Operational\Appointment','consultation_id');
    }
}

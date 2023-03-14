<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Transaction extends Model
{
    // use HasFactory;
    use softDeletes;

    public $tabel = 'transaction';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare filllabel = mendeklarasikan table ini bisa di isi
    protected $fillabel =[
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function appointment(){
        /* untuk belongsTo itu mempunyai 3 parameter yaitu ada path model yang dituju,  
           field tabel FK(Foreign Key),dan primary key dari tabel hasMany/hasOne
           
           belongs = milik 
           
           ketentuan one to many,one to one,dan many to many
           one to many itu = hasMany + belongsTO
           one to one itu = hasOne + belongsTO
           many to many itu = hasMany + BelongsToMany*/
        return $this->belongsTo('App\Models\Oprasional\Appointment','appointment_id','id');
    }
}

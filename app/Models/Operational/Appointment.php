<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Appointment extends Model
{
    // use HasFactory;
    use softDeletes;

    public $tabel = 'appointment';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare filllabel = mendeklarasikan table ini bisa di isi
    protected $fillabel =[
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function doctor(){
        /* untuk belongsTo itu mempunyai 3 parameter yaitu ada path model yang dituju,  
           field tabel FK(Foreign Key),dan primary key dari tabel hasMany/hasOne
           
           belongs = milik 
           
           ketentuan one to many,one to one,dan many to many
           one to many itu = hasMany + belongsTO
           one to one itu = hasOne + belongsTO
           many to many itu = hasMany + BelongsToMany*/
        return $this->belongsTo('App\Models\Oprational\Doctor','doctor_id','id');
    }

    public function consultation(){
        /* untuk belongsTo itu mempunyai 3 parameter yaitu ada path model yang dituju,  
           field tabel FK(Foreign Key),dan primary key dari tabel hasMany/hasOne
           
           belongs = milik 
           
           ketentuan one to many,one to one,dan many to many
           one to many itu = hasMany + belongsTO
           one to one itu = hasOne + belongsTO
           many to many itu = hasMany + BelongsToMany*/
        return $this->belongsTo('App\Models\MasterData\Consultation','consultation_id','id');
    }

    public function user(){
        /* untuk belongsTo itu mempunyai 3 parameter yaitu ada path model yang dituju,  
           field tabel FK(Foreign Key),dan primary key dari tabel hasMany/hasOne
           
           belongs = milik 
           
           ketentuan one to many,one to one,dan many to many
           one to many itu = hasMany + belongsTO
           one to one itu = hasOne + belongsTO
           many to many itu = hasMany + BelongsToMany*/
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function transaction(){
        return $this->hasOne('App\Models\Operational\Transaction','appointment_id');
    }
}

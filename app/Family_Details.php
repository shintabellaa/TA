<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family_Details extends Model
{


    protected $primaryKey = 'id_number';
    protected $table = 'family';
    protected $fillable = ['nip/nik','name','relationship','username', 'phone_no', 'birth_date',
    'birth_place', 'status','occupation','last_education','npwp'];
    public $incrementing = false;
    public $timestamps = false;



}

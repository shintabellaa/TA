<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Family extends Model
{

    protected $primaryKey = 'id_number';
    protected $table = 'family';
    protected $fillable = ['nip_nik','name','relationship','username', 'phone_no', 'birth_date',
    'birth_place', 'status','occupation','last_education','npwp'];
    public $incrementing = false;
    public $timestamps = false;



}

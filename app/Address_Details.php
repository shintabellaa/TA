<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address_Details extends Model
{
    protected $table= 'address__details';
    protected $fillable= ['address__details_id', 'nip_nik' , 'district_id', 'address','phone_number'];

}





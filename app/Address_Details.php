<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address_Details extends Model
{
    protected $table= 'address__details';
    protected $fillable= ['address__details_id', 'nip/nik' , 'district_id', 'street','phone_number'];

}





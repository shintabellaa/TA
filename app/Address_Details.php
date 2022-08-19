<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;


class Address_Details extends Model
{
    protected $table= 'address_details';
    protected $fillable= ['address_details_id', 'nip_nik' , 'district_id', 'address'];
    public $incrementing = false;
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'nip_nik', 'nip_nik');
    }
    public function district(){
        return $this->belongsTo(District::class, 'district_id', 'district_id');
    }


    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'address_details_id' => [
                'format' => 'ADD-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 6 // The number of digits in an autonumber
            ]
        ];
    }
}





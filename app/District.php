<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class District extends Model
{
    protected $primaryKey = 'district_id';
    protected $fillable = ['district_id','regency_id', 'district_name'];
    public $incrementing = false;
    public $timestamps = false;

    public function regency(){
        return $this->belongsTo(Regency::class, 'regency_id', 'regency_id');
    }

    public function address_details(){
        return $this->hasMany(Address_Details::class, 'district_id', 'district_id');
    }

    // use AutoNumberTrait;
    // public function getAutoNumberOptions()
    // {
    //     return [
    //         'district_id' => [
    //             'format' => 'DIS-?', // autonumber format. '?' will be replaced with the generated number.
    //             'length' => 4 // The number of digits in an autonumber
    //         ]
    //     ];
    // }


}

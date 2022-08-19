<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Structural_Details extends Model
{
    protected $table = 'structural_details';
    protected $primaryKey = ['nip_nik', 'structural_id','tmt'];
    public $incrementing = false;

    protected $fillable = ['nip_nik', 'structural_id','tmt', 'sign_by', 'sk_no', 'sk_date','status','sk_file' ];


    public function structural(){
        return $this->belongsTo(Structural::class, 'structural_id', 'structural_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'nip_nik', 'nip_nik');
    }

    // use AutoNumberTrait;
    // public function getAutoNumberOptions()
    // {
    //     return [
    //         'structural_id' => [
    //             'format' => 'ST-?', // autonumber format. '?' will be replaced with the generated number.
    //             'length' => 4 // The number of digits in an autonumber
    //         ]
    //     ];
    // }

}


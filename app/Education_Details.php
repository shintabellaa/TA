<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Education_Details extends Model
{
    protected $primaryKey = 'education_details_id';
    protected $table = 'education_details';
    protected $fillable = ['education_details_id','education_id', 'nip_nik', 'name','major','graduation_year','country','dean_headmaster','certificate_file'];
    public $incrementing = false;
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'nip_nik', 'nip_nik');
    }

    public function education(){
        return $this->belongsTo(Education::class, 'education_id');
    }


    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'education_details_id' => [
                'format' => 'EDU-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 4 // The number of digits in an autonumber
            ]
        ];
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Education extends Model
{

    protected $primaryKey = 'education_id';
    protected $table = 'education';
    protected $fillable = ['education_id', 'level'];
    public $incrementing = false;
    public $timestamps = false;

    public function education_details(){
        return $this->belongsTo(Education_Details::class, 'education_id', 'education_id');
    }

    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'education_id' => [
                'format' => 'EDU-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }


}

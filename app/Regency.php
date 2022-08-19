<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Regency extends Model
{
    protected $primaryKey = 'regency_id';
    protected $fillable = ['regency_id','regency_name'];
    public $incrementing = false;
    public $timestamps = false;



    public function district(){
        return $this->hasMany(Regency::class, 'regency_id', 'regency_id');
    }

    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'regency_id' => [
                'format' => 'REG-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 4 // The number of digits in an autonumber
            ]
        ];
    }





}

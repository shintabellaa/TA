<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Structural extends Model
{
    protected $table = 'structurals';
    protected $primaryKey = 'structural_id';
    public $incrementing = false;

    protected $fillable = ['structral_id', 'information'];

    public function structural_details (){
        return $this->hasMany(Structural_Details ::class);
    }


    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'structural_id' => [
                'format' => 'STR-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }


}


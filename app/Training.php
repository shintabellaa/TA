<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Training extends Model
{
    protected $table = 'trainings';
    protected $primaryKey = 'training_id';
    protected $fillable = ['training_id', 'nip_nik', 'hour', 'training_name','type_of_training','place', 'year', 'certificate_file'];
    public $incrementing = false;
    public $timestamps = false;


    public function user(){
        return $this->belongsTo(Employee_Transfer::class, 'nip_nik', 'nip_nik');
    }

    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'training_id' => [
                'format' => 'TR-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 4 // The number of digits in an autonumber
            ]
        ];
    }

}

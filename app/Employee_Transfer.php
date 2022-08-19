<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Employee_Transfer extends Model
{

    protected $primaryKey = 'employee_transfer_id';
    protected $table = 'employee_transfers';
    protected $fillable = ['employee_transfer_id', 'nip_nik','work_unit_id','employee_transfer_date','sk_no','sign_by','sk_file'];
    public $incrementing = false;
    public $timestamps = false;


    public function user(){
        return $this->belongsTo(User::class, 'nip_nik', 'nip_nik');
    }
    public function work_unit(){
        return $this->belongsTo(Work_Unit::class, 'work_unit_id', 'work_unit_id');
    }


    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'employee_transfer_id' => [
                'format' => 'MUT-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 4 // The number of digits in an autonumber
            ]
        ];
    }
}



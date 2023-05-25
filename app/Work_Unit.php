<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Work_Unit extends Model
{
    protected $primaryKey = 'work_unit_id';
    protected $table = 'work_units';
    protected $fillable = ['work_unit_id', 'name'];
    public $incrementing = false;
    public $timestamps = false;


    public function employee_transfer(){
        return $this->hasMany(Employee_Transfer::class, 'work_unit_id', 'work_unit_id');
    }

    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'work_unit_id' => [
                'format' => 'WU-?', 
                'length' => 5
            ]
        ];
    }






}

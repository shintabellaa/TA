<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_Name extends Model
{
    protected $primaryKey = 'bank_name_id';
    protected $table = 'bank_name';
    protected $fillable = ['bank_name_id','bank_name'];
    public $incrementing = false;
    public $timestamps = false;

    public function bank(){
        return $this->hasMany(Bank::class, 'bank_name_id', 'bank_name_id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $primaryKey = 'id_bank';
    protected $table = 'bank';
    protected $fillable = ['bank_name_id','account_number','creation_number'];
    public $incrementing = false;
    public $timestamps = false;

    public function bank_name(){
        return $this->belongsTo(Bank_Name::class, 'bank_name_id', 'bank_name_id');
    }

    public function user(){
        return $this->hasMany(User::class, 'nip_nik', 'nip_nik');
    }

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Functional_Details extends Model
{
    protected $table = 'functional_details';
    protected $primaryKey = 'functional_id';
    public $incrementing = false;
    protected $fillable = ['nip_nik', 'functional_id', 'tmt', 'sign_by','sk_no','sk_date','status', 'sk_file', ];
    public $timestamps = false;

    public function functional(){
        return $this->belongsTo(Functional::class, 'functional_id', 'functional_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'nip_nik', 'nip_nik');
    }

    // use AutoNumberTrait;
    // public function getAutoNumberOptions()
    // {
    //     return [
    //         'functional_id' => [
    //             'format' => 'FD-?', // Format kode yang akan digunakan.
    //             'length' => 3 // Jumlah digit yang akan digunakan sebagai nomor urut
    //         ]
    //     ];
    // }
}

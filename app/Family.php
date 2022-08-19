<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;


class Family extends Model
{

    protected $primaryKey = 'id_number';
    protected $table = 'family';
    protected $fillable = ['nip_nik','name','relationship','username', 'phone_number', 'birth_date',
    'birth_place','occupation','last_education','npwp_no'];
    public $incrementing = false;
    public $timestamps = false;


    public function user(){
        return $this->belongsTo(User::class, 'nip_nik', 'nip_nik');
    }



    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'id_number' => [
                'format' => 'Kel-?', // Format kode yang akan digunakan.
                'length' => 3 // Jumlah digit yang akan digunakan sebagai nomor urut
            ]
        ];
    }


}

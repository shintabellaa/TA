<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Functional extends Model
{
    protected $table = 'functionals';
    protected $primaryKey = 'functional_id';
    public $incrementing = false;
    protected $fillable = ['functional_id', 'information',];

    public function functional_details(){
        return $this->hasMany(Functional_Details::class);
    }

    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'functional_id' => [
                'format' => 'FUNG-?', // Format kode yang akan digunakan.
                'length' => 3 // Jumlah digit yang akan digunakan sebagai nomor urut
            ]
        ];
    }
}

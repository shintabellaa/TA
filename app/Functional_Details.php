<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Functional_Details extends Model
{
    protected $table = 'functional_detail';
    protected $primaryKey = ['nip_nik','functional_id'];
    public $incrementing = false;

    protected $fillable = ['functional_id', 'nip_nik', 'tmt', 'sign_by','sk_no','sk_date','status', 'sk_file', ];
}

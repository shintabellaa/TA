<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structural_Details extends Model
{
    protected $table = 'structural_detail';
    protected $primaryKey = 'work_unit_id';
    public $incrementing = false;

    protected $fillable = ['work_unit_id', 'name', 'entry_date'];
}

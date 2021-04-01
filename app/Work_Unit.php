<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_Unit extends Model
{
    protected $table = 'work_units';
    protected $primaryKey = 'work_unit_id';
    public $incrementing = false;

    protected $fillable = ['work_unit_id', 'name', 'entry_date'];

}

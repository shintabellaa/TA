<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Functional extends Model
{
    protected $table = 'functionals';
    protected $primaryKey = 'functional_id';
    public $incrementing = false;

    protected $fillable = ['functional_id', 'name', 'entry_date'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structural extends Model
{
    protected $table = 'structurals';
    protected $primaryKey = 'structural_id';
    public $incrementing = false;

    protected $fillable = ['structral_id', 'information'];




    }


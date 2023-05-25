<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Api extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'token'];
    protected $table ='api';
    public $timestamps = false;






}

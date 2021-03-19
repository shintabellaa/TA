<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'nip_nik';
    protected $table = 'users';
    protected $fillable = ['nip_nik','nidn','role_id','username', 'password', 'title_ahead',
    'real_name', 'back_title', 'birth_place', 'birth_date','photo','group','blood_group','height',
    'weight','handicap','email','id_card_number','npwp','bpjs','gender','religion','marital_status',
    'citizen_status','retirement_age_limit','employee_status'];
    public $incrementing = false;
    public $timestamps = false;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

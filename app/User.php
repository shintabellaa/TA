<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'nip_nik';
    protected $table = 'users';
    protected $fillable = ['nip_nik','nidn', 'username', 'role_id', 'password', 'title_ahead',
    'real_name', 'back_title', 'birth_place', 'birth_date','photo','group','blood_group','height',
    'weight','email','id_card_number','phone_number','npwp','bpjs','gender','religion','marital_status',
    'citizen_status','retirement_age_limit','employee_status'];
    public $incrementing = false;
    public $timestamps = false;
    protected $keyType = 'string';


    public function role(){
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    public function employee_transfer(){
        return $this->hasMany(Employee_Transfer::class, 'nip_nik', 'nip_nik');
    }

    public function employee_transfer_last(){
        return $this->employee_transfer()->latest('employee_transfer_date')->first();
    }

    public function functional_details(){
        return $this->hasMany(Functional_Details::class, 'nip_nik', 'nip_nik');
    }
    public function structural_details(){
        return $this->hasMany(Structural_Details::class, 'nip_nik', 'nip_nik');
    }
    public function training(){
        return $this->hasMany(Training::class, 'nip_nik', 'nip_nik');
    }
    public function bank(){
        return $this->hasMany(Bank::class, 'nip_nik', 'nip_nik');
    }
    public function education_details(){
        return $this->hasMany(Education_Details::class, 'nip_nik', 'nip_nik');
    }
    public function address_details(){
        return $this->hasMany(Address_Details::class, 'nip_nik', 'nip_nik');
    }
    public function family(){
        return $this->hasMany(Family::class, 'nip_nik', 'nip_nik');
    }
    public function rank_group(){
        return $this->hasMany(Rank_Group::class, 'nip_nik', 'nip_nik');
    }



    public function getAvatarUrlAttribute()
    {
        $patlink = rtrim(app()->basePath('public/storage'), '/');
        if($this->photo && is_dir($patlink) && Storage::disk('public')->exists($this->photo)){
            return url("/storage/".$this->photo);
        }
        return "https://uxwing.com/wp-content/themes/uxwing/download/12-people-gesture/avatar.png";
    }

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

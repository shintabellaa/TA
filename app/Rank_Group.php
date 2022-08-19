<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Rank_Group extends Model
{

        protected $table = 'rank_groups';
        protected $primaryKey = 'rank_group_id';
        public $incrementing = false;

        protected $fillable = ['rank_group_id', 'nip_nik', 'name', 'tmt', 'sk_no', 'sk_date','sign_by','status','sk_file'];


        public function user(){
            return $this->belongsTo(User::class, 'nip_nik', 'nip_nik');
        }

        use AutoNumberTrait;
        public function getAutoNumberOptions()
        {
            return [
                'rank_group_id' => [
                    'format' => 'RG-?', // autonumber format. '?' will be replaced with the generated number.
                    'length' => 4 // The number of digits in an autonumber
                ]
            ];
        }
}

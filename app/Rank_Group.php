<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank_Group extends Model
{

        protected $table = 'rank_groups';
        protected $primaryKey = 'rank_group_id';
        public $incrementing = false;

        protected $fillable = ['rank_group_id', 'nip_nik', 'name', 'tmt', 'sk_no', 'sk_date','sign_by','status','sk_files'];


}

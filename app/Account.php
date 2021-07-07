<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';

    protected $fillable = ['name','password','premdays','lastday','email','key','blocked','warnings','group_id','vip_time','page_access','page_lastday','email_new','email_new_time','rlname','location','created','email_code','next_email','premium_points','nickname','avatar','about_me'];
}

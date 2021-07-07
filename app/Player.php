<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
     protected $table = 'players';

    protected $fillable = ['name','world_id','group_id','account_id','level','vocation','health','healthmax','experience','lookbody','lookfeet','lookhead','looklegs','looktype','lookaddons','maglevel','mana','manamax','manaspent','soul','town_id','posx','posy','posz','conditions','cap','sex','lastlogin','lastip','save','skull','skulltime','rank_id','guildnick','lastlogout','blessings','balance','stamina','direction','loss_experience','loss_mana','loss_skills','loss_containers','loss_items','premend','online','marriage','marrystatus','promotion','deleted','description','old_name','hide_char','worldtransfer','created','nick_verify','comment',];
}

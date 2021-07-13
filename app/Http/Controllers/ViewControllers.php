<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use Auth;
use DB;

class ViewControllers extends Controller
{
    
  
    public function cpassword(request $request){
        $name = $request->get('name');
        $email = $request->get('email');
        $aux = DB::select("select * from users where name = ? ",array($name));
        
        if($aux != null && $email == $aux[0]->email){
               
            return view('lpassword',compact('aux'));
        }
             $aux='Cuenta o Email INVALIDO';
            return view('lpassword',compact('aux'));
    }

    public function lpassword(){
        $aux=null;
        return view('lpassword',compact('aux'));
    }


    //CONTROLLADOR DE FUNCIONES
    public function rplayer(request $request){
    	$playern=Auth::user()->name;
    	$aux = DB::select("select id from accounts where name = ?",array($playern));
    	$account_id = $aux[0]->id;

    	//Recuperando coordenadas
    	$pos = DB::select("select * from town where town_id = ?",array($request->get('city')));
    	
    	$player = new Player;

    	$player->account_id = $account_id;
    	$player->level = 8;
    	$player->name = $request->get('name');
    	$player->sex = $request->get('sex');
    	$player->town_id = $request->get('city');
    	$player->vocation = $request->get('vocation');
		$player->health = 185;
		$player->healthmax = 185;
		$player->experience = 4200;
		$player->maglevel = 2;
		$player->mana = 35;
		$player->manamax = 35;
		$player->soul = 100;
		$player->cap = 435;
		$player->group_id = 1;
   		$player->conditions = '1';
   		$player->marrystatus = 0;
   		$player->posx = $pos[0]->posx;
   		$player->posy = $pos[0]->posy;
   		$player->posz = $pos[0]->posz;

   		echo "Jugador Creado";
    	$player->save();
    	return view('home');
    }

    //FUNCION DE VOCACIONES
    public function voca($vocation){
    	$vplayer = new Player;
    	if($vocation == 1){
    		$vplayer->health = 185;
    		$vplayer->healthmax = 185;
    		$vplayer->experience = 4200;
    		$vplayer->maglevel = 2;
    		$vplayer->mana = 35;
    		$vplayer->manamax = 35;
    		$vplayer->soul = 100;
    		$vplayer->cap = 435;
    	}
    	return $vplayer;
    }

    public function highscore(){
        $players = DB::select("select * from players");
        return view('highscore')->with(['players'=>$players]);
    }
    public function characters(){
        $char = DB::select("select * from players where id = 1");
        return view('characters')->with(['char'=>$char]);
    }
    public function shop(){
        
        return view('shop');
    }
    public function fplayer(Request $request){
        $char = DB::select("select * from players where name = ?",array($request->get('name')));
        if($char == null ){
            $char = DB::select("select * from players where id = 1");
            return view('characters',compact('char'));
        }else{
            return view('characters',compact('char')); 
        }
    }	
}

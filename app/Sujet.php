<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App/User;
use App/Reponse;

class Sujet extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre', 'description', 'categorie_id', 'user_id'
		//'sujet_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
	/*
	public function scopeLastReponse($query){
		return $query-> 
		$rep = Reponse::where()
	}
	*/
	//Relation
	public function reponse(){
		return $this->hasMany('App\Reponse');
	}
	public function categorie(){
		return $this->hasOne('App\Categorie');
	}
}

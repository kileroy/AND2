<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Categorie extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'label', 'categories_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
	
	//Relation
	public function sujet(){
		return $this->hasMany('App\Sujet');
	}
	public function categorie(){
		return $this->hasMany('App\Categorie');
	}
}

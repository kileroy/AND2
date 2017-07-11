<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Sujet;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		/*
		//On prend pas tout car on utiliseras une catégorie pour les MP.
		$cats = Categorie::whereNot("label", "MP")->get();
		//On fait un array pour avoir pour chque catégorie, les sujet relié.
		$sujets[] = array();
		foreach($cats as $cat){
			$sujets[$cat->id] = Sujet::where("categorie_id", $cat->id)->get();
		}
		//Ne pas oublié de prendre la derniere réponse de l'utilisateur a ce sujet
		$last[] = array();
		foreach($sujets as $sujet){
			$last[$sujet->id] = Reponse::where("sujet_id", $sujet->id)->orderBy('created_at')->first();
		}
		*/
        return view('home', [
            //'cats' => $cats, 'sujets' => $sujets, 'last' => $last, 
        ]);
    }
	public function seedUno(){
		
	}
	
}

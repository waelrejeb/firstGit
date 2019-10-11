<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Livre;
class PagesController extends Controller
{
     public function index(){
        // $livres=Livre::orderBy('id','desc')->get();
        $livres=Livre::orderBy('id','desc')->paginate('3');

    	return view('welcome',['livres'=>$livres]);
    }
    public function contact(){
    	return view('contact');
    }


    public function postcontact(Request $Request){
    	// dd($Request->all());
// var_dump($Request->all());
// die;
    	echo $Request->nom."<br>";
    	    	echo $Request->prenom."<br>";
    	    	echo $Request['email'];

    }
}

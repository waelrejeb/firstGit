<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function ajouterCateg(){
return view('ajouterCateg');
    }

public function postajouterCateg(Request $request){
	//dd($request);
$data=$request->validate([
	'name'=>'required |unique:categories'
	]);


   Category::create($data);
	return back()->with('success','votre category a été ajouté');

    }
      public function voirCateg($id)
    {
    	$categ_a_voir= Category::find($id);
    	$categ_a_voir->get();
    	return view('voir_categ',['categ_a_voir'=>$categ_a_voir]);
    }
    public function livresCateg($id){
        // dd($id);
        $categorie=Category::find($id);
        return view('livres_par_categ',compact('categorie'));//['c....'=>$ca...]
    }
   








}

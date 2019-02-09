<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;
use App\create;

class PagesController extends Controller
{
    public function index (){
    	return view('index');
    }
    public function film (){

    	$films = film::orderBy('id','desc')->get();
    	return view('film')->with('films',$films);
    }
    // public function single (){
    // 	return view('single');
    // }
    public function create (){
    	return view('create');
    }
    
    public function store (Request $request){
    	$film = new film;
    	$film->fname = $request->title;
    	$film->description = $request->desc;
    	$film->release_date = $request->rd;
    	$film->rating = 5;
    	$film->ticket_price = $request->price;
    	$film->country = $request->country;
    	$film->genere = $request->genere;
    	$film->image = $request->cover;
        $film->slug = str_slug($request->title);
    	$film->save();
    	return redirect()->route('create')->with('success','Created Successfull!');
    }

     public function single ($slug){
        $film = Film::where('slug',$slug)->first();
        if(!is_null($film)){
            return view('single',compact('film'));
        }
        else{
            session()->flash('errors','Sorr there is no film in this url ....');
            return redirect()->route('film');
        }
     }

}

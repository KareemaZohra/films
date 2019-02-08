<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;

class PagesController extends Controller
{
    public function index (){
    	return view('index');
    }
    public function film (){

    	$films = film::orderBy('id','desc')->get();
    	return view('film')->with('films',$films);
    }
    public function single (){
    	return view('single');
    }
    public function create (){
    	return view('create');
    }
    public function store (Request $request){
    	$films = new $film;
    	$film->fname = $request->title;
    	$film->description = $request->desc;
    	$film->release_date = $request->rd;
    	$film->ticket_price = $request->price;
    	$film->country = $request->country;
    	$film->genere = $request->genere;
    	$film->image = $request->cover;
    	$film->save();

    	return redirect()->route('create');
    }

}

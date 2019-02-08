<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){
    	return view('index');
    }
    public function film (){
    	return view('film');
    }
    public function single (){
    	return view('single');
    }
    public function create (){
    	return view('create');
    }
}

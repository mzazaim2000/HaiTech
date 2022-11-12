<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller{


    public function index(){

    return view('pages.index');
    }

    public function about(){
    //$title = “About Us Page from Controller”;
  //  $body = “This is my about us page”;
   // return view('pages.about', compact(‘title’, ‘body’));
    // return $title;
    }

    public function users($id, $cop){
    //$name = “Ved Prakash - “. $id . “ COP - “ . $cop;
   // return view(‘pages.users’, compact(‘name’));
}
}
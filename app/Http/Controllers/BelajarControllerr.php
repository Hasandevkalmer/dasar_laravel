<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarControllerr extends Controller
{
    
  public function index()
  {

 return view('belajar/list',compact('data'));
     
  }
}

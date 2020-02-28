<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   

     public function userDemo()
     {
         return view('clientbk.dashboard');
     }
}

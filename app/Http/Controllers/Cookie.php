<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class Cookie extends Controller
{
   public function setcookie($id)
   {

         $response = response('Hello world');

        $identifiants = rand(1,1500000);

        $response->withCookie('panier', Str::uuid(), 36);

    }
    public function getCookie()
    {
       $ff= request()->cookie('panier');
       dd($ff);
        
    }
    public function del()
    {
        return response('deleted')->cookie('panier',null,-1);
    }
  
   
}

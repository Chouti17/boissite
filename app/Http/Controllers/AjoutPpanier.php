<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Panier;

class AjoutPpanier extends Controller
{   

    public function setcookie()
    {
 
          $response = response('Hello world');
 
         $identifiants = rand(1,1500000);
 
         $response->withCookie('panier', Str::uuid(), 1);
 
       
     }

    public function ajout($id,Request $request)
    {
        
        
        if (!isset($_COOKIE['panier']))
        {
        $identifiants=Str::uuid();
        setcookie('panier',$identifiants, time() + (86400 * 30), "/"); //name,value,time,url      
        }else{
            $identifiants=$_COOKIE['panier'];
        }

        Panier::create([
            'identifiant' =>$identifiants,
            'id_produit' =>$id,
        ]);

        return redirect()->back();
    }
}

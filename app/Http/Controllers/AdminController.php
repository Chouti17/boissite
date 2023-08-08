<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;



use App\Models\Panier;
use App\Models\Produit;
use App\Models\Client;

class AdminController extends Controller
{

    public function demande()
    {
       $clients = Client::where('valider',1)->get();
       $i=0;

       foreach ($clients as $client)
       {
        $identifiant = clients->identifiants;
       

        
        $panier=Panier::where('identifiant',$identifiant)->where('valider',1)->get();

        foreach($panier as $paniers)
        {
           
        }


       }
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Pdf;

use Illuminate\Http\Request;
use App\Models\Panier;
use App\Models\Produit;
use App\Models\Client;

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

    public function Ajoutproduit(Request $request)
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
            'id_produit' =>$request->id,
            'quantity' =>$request->quantity,
        ]);

        return redirect('/shop/kori');

    }

    public function delete($id)
    {
        Panier::destroy($id);

        return redirect('/shop/kori');

    }

    public function Ajoutq($id)
    {
        $enregistrement = Panier::where('id', $id)->first();
        if ($enregistrement) {
            // Mettez à jour la valeur de la colonne
            $enregistrement->quantity =$enregistrement->quantity +1 ;
    
            // Enregistrez les modifications dans la base de données
            $enregistrement->save();
        }

        return redirect('/shop/kori');

    }

    public function Rq($id)
    {
        $enregistrement = Panier::where('id', $id)->first();
        if ($enregistrement) {
            // Mettez à jour la valeur de la colonne
            $enregistrement->quantity =$enregistrement->quantity - 1 ;
    
            // Enregistrez les modifications dans la base de données
            $enregistrement->save();
        }

        return redirect('/shop/kori');

    }
    public function enregistrement(Request $request)
    {
        $identifiants=$_COOKIE['panier'];

        Client::create([
            'identifiants'=>$identifiants,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
            'pays'=>$request->pays,
            'civility'=>$request->civilite,
            'addresse'=>$request->addresse,

        ]);

       



        $produits = Panier::where('identifiant', $identifiants)
                        ->where('valider', 0)
                        ->get();
        $somme = 0;
        $livraison = 0;
        $total=0;

        // Utilisez une boucle foreach pour parcourir les produits et additionner le montant
       




        $facture = Panier::where('identifiant', $identifiants)
                       ->where('valider', 0)
                       ->get();
                       
        $client = Client::where('identifiant', $identifiants);
        
        app('dompdf.wrapper');
              

        return Pdf::loadView ('facture', ['facture' => $facture, 'client' => $client]);   



                     


        return view('facture');
    }
    public function enregistrements()
    {
       

        return view('achats');
    }

    public function facture(Request $request)
    {
      

        return view('facture');
    }
    public function index()
    {
        $identifiants=$_COOKIE['panier'];



        $produits = Panier::where('identifiant', $identifiants)
                        ->where('valider', 0)
                        ->get();
        $somme = 0;
        $livraison = 0;
        $total=0;

        // Utilisez une boucle foreach pour parcourir les produits et additionner le montant
        foreach ($produits as $produit) {
            $mt =$produit->produits->prix * $produit->quantity;
            
            $somme += $mt;
            $livraison +=  $produit->quantity;
        }




        $facture = Panier::where('identifiant', $identifiants)
                       ->where('valider', 0)
                       ->get();
                       
        $client = Client::where('identifiant', $identifiants);    
        $pdf = PDF::loadView('facture', ['facture' => $facture]);          

        return PDF::loadView ('facture', ['facture' => $facture, 'client' => $client,'somme' => $somme,'livraison' => $livraison]);   
               


    }

    public function aj()
    {
        return view('aj');
    }

    public function aj1(Request $request)
    {
        Produit::create([
            
            'nom'=>$request->nom,
            'detail'=>$request->detail,
            'image'=>$request->image,
            'prix'=>$request->prix,
           

        ]);

        return view('aj');
    }
   
}

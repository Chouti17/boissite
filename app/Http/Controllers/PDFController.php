<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Panier;
use App\Models\Produit;
use App\Models\Client;

class PDFController extends Controller
{
   public function generatePDF(Request $request)
   {
    $identifiants=$_COOKIE['panier'];
    
    $produits = Panier::where('identifiant', $identifiants)
    ->where('valider', 0)
    ->get();  

            $somme=0;
            $sommes=0;

            foreach ($produits as $produit)
            {
            $mr=$produit->id_produit;

            $ms= Produit::where('id',$mr)->first();

            $mt=$ms->prix * $produit->quantity;

            $somme +=$mt;
            $sommes +=$produit->quantity;

            }  
            $somme=$somme + $sommes*300;           
            $donnees =['somme'=>$somme,'sommes'=>$sommes];
            $contxt = stream_context_create([
                'ssl' => [
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                    'allow_self_signed' => TRUE,
                ]
            ]);

            if ($request->has('dowload')) {
                
                $filename ="demo.pdf";
                $data = [ 'title'=>'ee','somme'=>$somme,'sommes'=>$sommes] ;

                $html = view()->make('factures',$data)->render();

                $pdf = new TCPDF;
                $pdf::SetTitle('facture');
                $pdf::AddPage();
                $pdf::writeHTML($html,true,false,true,false,"");
                $pdf::Output(public_path($filename),"F");

                return response()->download(public_path($filename));

            }
                    

}
}

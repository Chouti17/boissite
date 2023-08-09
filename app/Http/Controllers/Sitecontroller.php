<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panier;
use App\Models\Contact;


class Sitecontroller extends Controller
{
    public function shop()
    {
        return view('shop.shop');
    }
    public function shop_bois()
    {
        return view('shop.shop_bois');
    }
    public function shops()
    {
        return view('shop.Produit_single.produit1');
    }
     public function shop_8()
    {
        return view('shop.Produit_single.8pied');
    }
    public function shop_10()
    {
        return view('shop.Produit_single.10pied');
    }
    public function shop_20()
    {
        return view('shop.Produit_single.20pied');
    }
    public function shop_40()
    {
        return view('shop.Produit_single.40pied');
    }
    public function shop_30()
    {
        return view('shop.Produit_single.30pied');
    }
    public function shop_15()
    {
        return view('shop.Produit_single.15pied');
    }

    public function shop_to()
    {
        return view('shop.Produit_single1.standart');
    }
    public function shop_frigorifique()
    {
        return view('shop.produit_single2.standart');
    }
    public function shop_cirtene()
    {
        return view('shop.produit_single3.standart');
    }
    public function shop_fatrack()
    {
        return view('shop.Produit_single4.standart');
    }


    public function Puun_syyt_70_pussi()
    {
        return view('shop1.produit1');
    }
    public function crepito()
    {
        return view('shop1.produit2');
    }
    public function havupuu()
    {
        return view('shop1.produit3');
    }
    public function pussia()
    {
        return view('shop1.produit4');
    } 
    public function Paletti()
    {
        return view('shop1.produit5');
    }
    public function pyökki()
    {
        return view('shop1.produit6');
    }
    public function koko()
    {
        return view('shop1.produit7');
    }
    public function puolilava()
    {
        return view('shop1.produit8');
    }
    public function puolilavas()
    {
        return view('shop1.produit9');
    }
    public function Kuiva()
    {
        return view('shop1.produit10');
    }
    public function pussias()
    {
        return view('shop1.produit11');
    }
    public function pussiass()
    {
        return view('shop1.produit12');
    }
    public function pussiasss()
    {
        return view('shop1.produit13');
    }
    public function pussiassss()
    {
        return view('shop1.produit14');
    }
    public function pussiasssss()
    {
        return view('shop1.produit15');
    }
    public function pussias1()
    {
        return view('shop1.produit18');
    }
    public function pussias2()
    {
        return view('shop1.produit17');
    }
    public function pussias3()
    {
        return view('shop1.produit16');
    }
    public function panier()
    {
        return view('panier');
    }
    public function testimonial()
    {
        return view('Group_Dhole.Testimonial');
    }
    public function Meistä()
    {
        return view('Group_Dhole.About');
    }
    public function ottaa()
    {
        return view('Group_Dhole.contact');
    }
    public function arvio()
    {
        return view('Group_Dhole.devis');
    }
    public function lokit()
    {
        return view('shop1.produit16');
    }

    public function contact(Request $request)
    {
        contact::create([
            'nom'=>$request->nom,
            'sujet'=>$request->sujet,
            'message'=>$request->message,
            'email'=>$request->email,
        ]);

        redirect()->route('contactt')->with('success', 'Pyyntösi on lähetetty onnistuneesti!');

        
    }
    
   
   
   

}

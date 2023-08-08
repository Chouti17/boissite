@php
use App\Models\Panier;
use App\Models\Client;

    if (!isset($_COOKIE['panier']))
        {
        $identifiants=Str::uuid();
        setcookie('panier',$identifiants, time() + (86400 * 3), "/"); //name,value,time,url      
        }else{
            $identifiants=$_COOKIE['panier'];
        }
        
      
      $panier = Panier::where('identifiant', $identifiants)
                   ->where('valider', 0)
                   ->get();

       $client = Client::where('identifiants', $identifiants)
                   ->first();

                 
                    
       
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GROUP DHOLE</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
    
        <!-- Favicon -->
        <link href="/img/favicon.ico" rel="icon">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">
            
    
    </head>
<body>

    <div class="container d-flex " style="width: 100%;display:flex;flex-direction:column;">

        <div class="d-flex " style="width: 100%">
            <div class="col-6 d-flex  align-items-center"><img src="{{ asset('images/logo4.png') }}" alt="" width="100px;"></div>
            <div class="col-6 " style=" text-align:right;">
                <h3 style="font-size: 16px;margin:0;padding:0;">LASKU</h3>
                <p style="font-size: 12px;margin:0;padding:0;">contact@group-dhole.com</p>
                <p style="font-size: 12px;margin:0;padding:0;">123 Street, New York, USA</p>
                <p style="font-size: 12px;margin:0;padding:0;">nmäärä:+44 7441 427902</p>
                <p  style="font-size: 12px;margin:0;padding:0;">sivusto:www.group-dhole.com</p>
            </div>
        </div>
        
        <div class="d-flex py-1" style="width: 100%;margin-top:20px;background-color:rgba(212, 207, 207, 0.798);">
            <div class="col-6 d-flex flex-col " style="display: flex;flex-direction:column;">
                
                <p style="font-size: 12px;margin:0;padding:0;">Lasku n°:{{rand(505000, 255500) }}</p>
                <p style="font-size: 12px;margin:0;padding:0;">Laskutuspäivä:{{ now()->format('d/m/Y') }}</p>
             
             </div>
            <div class="col-6 " style=" text-align:right;">
                @if($donnees)
                <h3 style="font-size:18px" >{{$donnees['somme']}}€</h3>
                @endif
               
                <p style="font-size: 12px;margin:0;padding:0;"">Maksajan summa</p>
               
            </div>
        </div>
        <div class="d-flex " style="width: 100%;margin-top:20px;">
            <div class="col-6 d-flex flex-col " style="display: flex;flex-direction:column;">
                
                <p style="font-size: 16px;margin:0;padding:0;">Laskuttaa</p>
                <p style="font-size: 10px;margin:0;padding:0;">{{$client->nom  }}</p>
                <p style="font-size: 10px;margin:0;padding:0;">{{$client->addresse}}</p>
                <p style="font-size: 10px;margin:0;padding:0;">{{$client->email}}</p>
                <p style="font-size: 10px;margin:0;padding:0;">+{{$client->addresse}}</p>
             
             </div>
            <div class="col-6 " style=" text-align:right;">

                <p style="font-size: 16px;margin:0;padding:0;">Toimitusosoite</p>
                <p style="font-size: 12px;margin:0;padding:0;">{{$client->addresse}}</p>
               
            </div>
        </div>
        <div class="d-flex col-12 " style="width: 100%;margin-top:20px;">
            <table style="width: 100%;">
                
                <thead style="width: 100%" >
                    
                    <tr style="background-color:rgba(212, 207, 207, 0.798); ">
                        <th  style="font-size: 13px; font-weight:300; color:black;">kohde ja kuvaus</th>
                        <th style="font-size: 13px; font-weight:300; color:black;">Vaadittu määrä</th>
                        <th style="font-size: 13px; font-weight:300; color:black;">Yksikköhinta</th>
                        <th  style="font-size: 13px; font-weight:300; color:black;text-align:right;"> määrä(€)</th>
                        
                    </tr>

                     
                </thead>

                
                <tbody >
                    
                    @foreach ($panier as $produit)
                    <tr class="justify-between">
                        <td style="font-size: 13px;">{{ $produit->produit->nom }}</td>
                        <td style="font-size: 13px;">{{ $produit->quantity }}</td>
                        <td style="font-size: 13px;">{{ $produit->produit->prix}}€</td>
                        <td style="text-align:right;font-size: 13px;">{{ $produit->produit->prix*$produit->quantity }}€</td>
                    </tr>
                  
                    @endforeach
                    
                </tbody>
                <tbody >
                    
                   
                    <tr class="justify-between">
                        <td style="font-size: 13px;"> Toimituskulut</td>
                        <td style="font-size: 13px;">  @if($donnees)
                            {{$donnees['sommes']}}
                            @endif</td>
                        <td style="font-size: 13px;">300€</td>
                        <td style="text-align:right;">{{$donnees['sommes'] *300}}€</td>
                    </tr>

                    

                    <tr class="justify-between col-6" style="border:1px solid #DDD9D9;" >
                        
                        <td> </td>
                        <td> </td>
                        <td style="background-color:#DDD9D9;color:black;font-size:13px;">Kaikki yhteensä</td>
                        <td style="text-align:right;background-color:#DDD9D9;color:black;font-weight:bold;font-size:16px">@if($donnees){{$donnees['somme']}}€ @endif</td>
                    </tr>
                  
                    
                    
                </tbody>
                
            </table>
            
        </div>

        <div class="container-fluid d-flex " style="display:flex;flex-direction:row;margin-top:20px;">
            
            <a href="{{route('fin')}}" class="btn btn-primary" style="margin-bottom:20px;">Vahvista laskuni</a>
        </div>
        <div class="d-flex " style="width: 100%;margin-top:20px;">
        <p style="font-size:13px;">
            Tilauksen vahvistus tallettamalla 50% kokonaissummasta. Loput 50% maksetaan toimituksen jälkeen Maksut suoritetaan pankkisiirrolla jäljitettävyyden säilyttämiseksi pankissa
        </p>
        </div>

       <div class="d-flex " style="width: 100%;"> <p class="text-success" style="font-size:13px;">Ota kuvakaappaus laskustasi</p></div>
       

       <div class="d-flex " style="width: 100%;">   <p style="color: black;font-size:13px;">Edustaja ottaa sinuun yhteyttä sähköpostitse osoitteessa contact@group-dhole viimeistelläkseen transaktiosi. Jos sinulla on kysyttävää, älä epäröi ottaa meihin yhteyttä joko sähköpostitse tai chatin kautta. Group-Dhole -tiimi kiittää sinua.</p>
       </div>

      
       
    </div>
    
</body>
</html>
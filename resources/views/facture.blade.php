@php
use App\Models\Panier;

    if (!isset($_COOKIE['panier']))
        {
        $identifiants=Str::uuid();
        setcookie('panier',$identifiants, time() + (86400 * 30), "/"); //name,value,time,url      
        }else{
            $identifiants=$_COOKIE['panier'];
        }
        
      
      $produits = Panier::where('identifiant', $identifiants)
                   ->where('valider', 0)
                   ->get();
       
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
            <div class="col-6 d-flex  align-items-center"><img src="/images/logo4.png" alt="" width="100px;"></div>
            <div class="col-6 " style=" text-align:right;">
                <h3 style="font-size: 16px;margin:0;padding:0;">LASKU</h3>
                <p style="font-size: 12px;margin:0;padding:0;">contact@group-dhole.com</p>
                <p style="font-size: 12px;margin:0;padding:0;">123 Street, New York, USA</p>
                <p style="font-size: 12px;margin:0;padding:0;">nmäärä:+44 7441 427902</p>
                <p  style="font-size: 12px;margin:0;padding:0;">sivusto:www.group-dhole.com</p>
            </div>
        </div>
        
        <div class="d-flex " style="width: 100%;margin-top:20px;background-color:rgba(212, 207, 207, 0.798);">
            <div class="col-6 d-flex flex-col " style="display: flex;flex-direction:column;">
                
                <p style="font-size: 12px;margin:0;padding:0;">Lasku n°:{{rand(505000, 255500) }}</p>
                <p style="font-size: 12px;margin:0;padding:0;">Laskutuspäivä:{{ now()->format('d/m/Y') }}</p>
             
             </div>
            <div class="col-6 " style=" text-align:right;">

                <h3 style="font-size:18px" >€</h3>
                <p style="font-size: 12px;margin:0;padding:0;"">Maksajan summa</p>
               
            </div>
        </div>
        <div class="d-flex " style="width: 100%;margin-top:20px;">
            <div class="col-6 d-flex flex-col " style="display: flex;flex-direction:column;">
                
                <p style="font-size: 16px;margin:0;padding:0;">Laskuttaa</p>
                <p style="font-size: 10px;margin:0;padding:0;">nom & prenom</p>
                <p style="font-size: 10px;margin:0;padding:0;">Facture</p>
                <p style="font-size: 10px;margin:0;padding:0;">email</p>
                <p style="font-size: 10px;margin:0;padding:0;">telehone</p>
             
             </div>
            <div class="col-6 " style=" text-align:right;">

                <p style="font-size: 16px;margin:0;padding:0;">Toimitusosoite</p>
                <p style="font-size: 12px;margin:0;padding:0;">address</p>
               
            </div>
        </div>
        <div class="d-flex col-12 " style="width: 100%;margin-top:20px;background-color:rgba(212, 207, 207, 0.798);">
            <table style="width: 100%">
                <thead style="width: 100%" >
                    <tr style="display: flex;flex-direction:row; justify-content: space-between;">
                        <th>kohde ja kuvaus</th>
                        <th>Vaadittu määrä</th>
                        <th>Yksikköhinta</th>
                        <th> määrä(€)</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach ($produits as $produit)
                        <tr class="justify-between">
                            <td>{{ $produit['produit'] }}</td>
                            <td>{{ $produit['quantite'] }}</td>
                            <td>{{ $produit['prix'] }}</td>
                            <td>{{ $produit['montant'] }}</td>
                        </tr>
                        <div style="width: 100%;border:1px solid #DDD9D9 "></div>
                        @endforeach
                    
                </tbody>
                <tbody>
                    
                    
                    <tr class="justify-between">
                        <td>Tuore toimitus</td>
                        <td>{{ $livraison }}</td>
                        <td>300€</td>
                        <td>{{ $livraison * 300 }}</td>
                    </tr>
                    <div style="width: 100%;border:1px solid #DDD9D9 "></div>
                    
                
            </tbody>
            <tbody>
                    
                    
                <tr class="justify-between">
                    <td>Tuore toimitus</td>
                    <td></td>
                    <td></td>
                    <td>{{ $somme }}</td>
                </tr>
                <div style="width: 100%;border:1px solid #DDD9D9 "></div>
                
            
        </tbody>
            </table>
            
        </div>
        <div class="d-flex " style="width: 100%;margin-top:20px;">
        <p>
            Tilauksen vahvistus tallettamalla 50% kokonaissummasta. Loput 50% maksetaan toimituksen jälkeen Maksut suoritetaan pankkisiirrolla jäljitettävyyden säilyttämiseksi pankissa
        </p>
        </div>
    </div>
    
</body>
</html>
@php
use App\Models\Panier;
use App\Models\Produit;
use App\Models\Client;



$clients = Client::all();

       
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
        <link href="/images/porte-conteneurs.png" rel="icon">
    
    
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

    <section>

        <h1>Liste des demandes </h1>
        <div class="container-fluid col-12 d-flex flex-wrap">


            
            @foreach ($clients as $client)
            <div class="shadow m-4 col-3  ">
          
            @php
  
            $panier=Panier::where('identifiant',$client->identifiants)->where('valider',1)->get();

                
            @endphp

            @foreach($panier as $paniers)

                <ul style="list-style: none">
                    <h5 class="text-primary">Demande</h5>
                    <li>Nom:{{$client->nom}}</li>
                    <li>Prenom: {{$client->prenom}}</li>
                    <li>Email: {{$client->email}}</li>
                    <li>Address: {{$client->addresse}}</li>
                    <li>Date: {{$client->created_at}}</li>
                
                </ul>
                
                <ul>
                    <li> <span class="text-success">Produit:</span> {{$paniers->produit->nom}}</li>
                
                    <li> <span class="text-success">Quantite</span>:{{$paniers->quantity}}</li>

                </ul>
        
            @endforeach

            </div>

            @endforeach

           
            
             
            
        </div>
    </section>
    
</body>
</html>
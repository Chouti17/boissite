@php
use App\Models\Panier;

    if (!isset($_COOKIE['panier']))
        {
        $identifiants=Str::uuid();
        setcookie('panier',$identifiants, time() + (86400 * 3), "/"); //name,value,time,url      
        }else{
            $identifiants=$_COOKIE['panier'];
        }
        
      
      $produits = Panier::where('identifiant', $identifiants)
                   ->where('valider', 0)
                   ->get();
       
@endphp


<!DOCTYPE html>
<html lang="fi">
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


     <!-- Topbar Start -->
     @include('Group_Dhole.header')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark px-4 py-3 py-lg-0 ">
        <a href="/" class="navbar-brand p-0 m-0">
            
            <span class="m-0 d-none d-md-flex d-sm-flex "><img class="w-50" src="/images/logo4.png" alt="" style="100px;" ></span>
            <span class="m-0 d-md-none d-sm-none"><img class="" style="width: 100px;" src="/images/logo1.png" alt="" ></span>
           
        </a>
        <a href="/shop/kori" style="position: relative;" class="d-md-none d-sm-none">
            <div class="rounded-circle d-flex text-center justify-content-center align-items-center" style="background-color:blue;color:white;width:20px;height:20px;position: absolute;top:-10px;left:32px;">{{$produits->count()}}</div>
            <img src="/images/panier.png" alt="" href="/shop/kori">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link " style="font-size: 16px;">Tervetuloa</a>
                <a href="/shop" class="nav-item nav-link " style="font-size: 16px;">konttikauppa</a>
              
                <a href="/shop_bois" class="nav-item nav-link" style="font-size: 16px;">Polttopuukauppa</a>
                <a href="/heistä" class="nav-item nav-link" style="font-size: 16px;">Noin</a>
              
                <a href="/todistus" class="nav-item nav-link" style="font-size: 16px;">Todistus</a>
                <a href="/ottaa_yhteyttä" class="nav-item nav-link" style="font-size: 16px;">yhteyttä </a>
               
            </div>
        
            <butaton type="button" class="btn text-primary ms-3" >

                <a href="/shop/kori" style="position: relative;" class="">
                    <div class="rounded-circle d-flex text-center justify-content-center align-items-center" style="background-color:blue;color:white;width:20px;height:20px;position: absolute;top:-10px;left:32px;">{{$produits->count()}}</div>
                    <img src="/images/panier.png" alt="" href="/shop/kori">
                </a>
                
            </butaton>
            <a href="/arvio" class="btn btn-primary py-2 px-4 ms-3" style="font-size: 16px;">Tarjouspyyntö</a>
        </div>
    </nav>
        <style>
            .bg-headerss
            {
                
                background: url('/images/cc9.jpg') center center  no-repeat;
                background-size: cover;
            }
        </style>
    
        <div class="container-fluid bg-primary py-5 bg-headerss" style="">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h3 class="display-4 text-white animated zoomIn text-uppercase">
                        kori</h3>
                    <a href="" class="h5 text-white">Koti</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">kori</a>
                </div>
            </div>
        </div>
    </div>

    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
      
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                <div>
                  
                </div>
              </div>
      
              @foreach ($produits as $panier)

              <div class="card rounded-3 mb-4">
                <div class="card-body p-4">
                  <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="{{$panier->produit->image}}"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mt d-none d-sm-flex d-md-flex">
                      <p class="lead fw-normal mb-2">{{$panier->produit->nom}}</p>
                     
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mt-2  d-sm-none d-md-none">
                      <p class="lead fw-normal mb-2">{{$panier->produit->nom}}</p>
                      <p><span class="text-muted text-primary d-sm-none d-md-none" style=";">{{$panier->produit->detail}}</span></p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                      <a class="btn btn-link px-2 mx-2"
                        href="/korie/{{$panier->id}}">
                        <i class="fas fa-minus"></i>
                    </a>
      
                      <input id="form1" min="0" name="quantity" value="{{$panier->quantity}}" type="number"
                        class="form-control form-control-sm" />
      
                      <a class="btn btn-link px-2" 
                      href="/koris/{{$panier->id}}">
                        <i class="fas fa-plus"></i>
                    </a>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 d-none d-sm-flex d-md-flex">
                      <h5 class="mb-0">{{$panier->produit->prix}}£</h5>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 my-3 d-sm-none d-md-none ">
                      <h5 class="mb-0">{{$panier->produit->prix}}£</h5>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="/kori/{{$panier->id}}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                    </div>
                  </div>
                </div>
              </div>
                  
              @endforeach
      
              <div class="card mb-4">
               
              <div class="card">
                <div class="card-body">
                  <a type="button" class="btn btn-success btn-block btn-lg" href="/ostaa">Jatka maksamiseen</a>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </section>
    

   

 @include('Group_Dhole.footer')
    
</body>
</html>v
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
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->

@include('Group_Dhole.header')

<!-- Topbar End -->


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-4 py-3 py-lg-0 ">
        <a href="/" class="navbar-brand p-0 m-0">
            
            <span class="m-0 d-none d-md-flex d-sm-flex "><img class="w-50" src="/images/logo4.png" alt="" style="100px;" ></span>
            <span class="m-0 d-md-none d-sm-none"><img class="" style="width: 100px;" src="/images/logo1.png" alt="" ></span>
           
        </a>
        <a href="#searchModal" style="position: relative;" class="d-md-none d-sm-none"  data-bs-toggle="modal" data-bs-target="#searchModal">
            <img src="/images/traduction.png"  style="width: 30px;" href="/shop/kori">
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
                <a href="/" class="nav-item nav-link active" style="font-size: 16px;">Tervetuloa</a>
                <a href="/shop" class="nav-item nav-link " style="font-size: 16px;">konttikauppa</a>
              
                <a href="/shop_bois" class="nav-item nav-link" style="font-size: 16px;">Polttopuukauppa</a>
                <a href="/heistä" class="nav-item nav-link" style="font-size: 16px;">Noin</a>
              
                <a href="/todistus" class="nav-item nav-link" style="font-size: 16px;">Todistus</a>
                <a href="/ottaa_yhteyttä" class="nav-item nav-link" style="font-size: 16px;">yhteyttä </a>
               
            </div>
            <a href="#searchModal" style="position: relative;" class=" ms-3"  data-bs-toggle="modal" data-bs-target="#searchModal">
                <img src="/images/traduction.png"  style="width: 30px;" href="/shop/kori">
            </a>
        
            <butaton type="button" class="btn text-primary ms-3" >

                <a href="/shop/kori" style="position: relative;" class="">
                    <div class="rounded-circle d-flex text-center justify-content-center align-items-center" style="background-color:blue;color:white;width:20px;height:20px;position: absolute;top:-10px;left:32px;">{{$produits->count()}}</div>
                    <img src="/images/panier.png" alt="" href="/shop/kori">
                </a>
                
            </butaton>
            <a href="/arvio" class="btn btn-primary py-2 px-4 ms-3" style="font-size: 16px;">Tarjouspyyntö</a>
        </div>
    </nav>

   

    @include('Group_Dhole.nav')
 
</div>
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
	<script type="text/javascript">
		function googleTranslateElementInit() {
		  new google.translate.TranslateElement({pageLanguage: 'fi'}, 'google_translate_element');
		}
	  </script>
	  <script src="//translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit" type="text/javascript"></script>
	
            
    
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
                <a href="/" class="nav-item nav-link " style="font-size: 16px;">Tervetuloa</a>
                <a href="/shop" class="nav-item nav-link " style="font-size: 16px;">konttikauppa</a>
              
                <a href="/shop_bois" class="nav-item nav-link active" style="font-size: 16px;">Polttopuukauppa</a>
                <a href="/heistä" class="nav-item nav-link " style="font-size: 16px;">Noin</a>
              
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
                    <h1 class="display-4 text-white animated zoomIn text-uppercase">
                        Puubriketti LP Täysi Lava Puubrikettejä</h1>
                    <a href="" class="h5 text-white">Koti</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Puubriketti LP Täysi Lava Puubrikettejä</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
   
    <!-- Full Screen Search End -->

    <script>

        function changeImage1() {
        var image = document.getElementById('myImage');
       
            image.src = '/images/n1.jpg';
        
        }
        function changeImage2() {
        var image = document.getElementById('myImage');
       
            image.src = '/images/n2.jpg';
        
        }
        function changeImage3() {
        var image = document.getElementById('myImage');
        
           
            image.src = '/images/n3.jpg';
        
        }
      
      

        function showInfo() {
            var selectElements = document.getElementById('containers1');
            var selectElement = document.getElementById('selectOption');
            var selectedValue = selectElement.value;
            
            if(selectedValue='Rilaisuus')
            {
              
            selectElements.innerHTML ="<h3>€1990 HT</h3>" ;

            
           }

          if(selectedValue='Yhdeksän')
            {
              
            selectElements.innerHTML ="<h3 >€3000 HT</h3>" ;

            
              }

           
          
        }

    </script>  
 
    <div class="container d-flex flex-row flex-wrap " style="margin-top:100px;">
        <div class="col-md-6"> 
            <div class="d-flex flex-wrap col-4 ">
                <img  id="myImage" src="/images/n1.jpg" style="max-height:250px; ">
            </div>
            <div class="m-4 d-flex flex-row flex-wrap">
               
                <div class="border m-4  " style="width: 100px; height:100px;" onclick="changeImage1()"><img src="/images/n1.jpg" alt="" style="background-size: cover;height:80px;" class="p-3"></div>
                <div class="border m-4  " style="width: 100px; height:100px;" onclick="changeImage2()"><img src="/images/n2.jpg" alt="" style="background-size: cover;height:80px;" class="p-3"></div>
                <div class="border m-4  " style="width: 100px; height:100px;" onclick="changeImage2()"><img src="/images/n3.jpg" alt="" style="background-size: cover;height:80px;" class="p-3"></div>
                
               
               
             
            </div>

        </div>
        <div class="col-md-6 d-flex flex-column ml-2">
            <div class="mb-2 mx-4"><h3 style="color: #F49122; margin-bottom:20px;"> 
                Puubriketti LP Täysi Lava Puubrikettejä</h3></div>
            <div class="d-flex flex-row mb-2 flex-wrap mx-4">
                <h5 class="text-success text-warning">5.0</h5>
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                

                <div class="mx-4"><h5 class="" style="color: #c5bebe">589 <span class=""style="color:black;">Tähtiarviointi</span></h5></div>
                <div class="ml-4"><h5 class="" style="color: #c5bebe">1578 <span class="text-primary">Myyty</span></h5></div>
                


            </div>
            <div class="mb-2 mx-4">  <h3 class="text-primary">621€ HT</h3></div>


            <p class="mx-4">Pakettitarjous ! 96 Paquets 960kg
                Puubriketti LP Täysi Lava, Pakettitarjous ! 96 Pakettia 960kg Lakkapään puubriketti 10 kilon muovipakkauksessa, pakettitarjouksena täysi lave. Puubriketti ei räisky ja se on todella...



                






                <ul>
                    <li>Yhden Brikettiklapipalan Koko:  90 x 63 x 153 mm</li>
                    <li>
                        Yhden Paketin Koko:  10 kg / 12 Palaa (200 x 155 x 380 mm)</li>
                    <li>  Paketti:  KuristeMuovipaketti </li>
                    <li>Valmisaja:  Tapiowood</li>
                    <li>Kosteus : Havupupuivure 0,5%</li>
                    <li>Certification FSC :  Kyllä </li>
                    <li></li>
                </ul>
            </p>


               

            <form action="{{route('Ajoutp')}}" method="post">
                @csrf
                @method('post')

                
              
                
                <select name="id" id="" class="form-control px-4 d-none" style="background-color: white; witdh:100px;">
                          
                    <option value="25"> </option>
                
                   

               
                  </select>
                
                <div class="col-4 mx-4 mt-2">
                    <p class="text-primary text-uppercase">Määriä</p>
                    <input type="number" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                </div>
                <div class="col-4 mx-4 mt-2">
                    <button type="submit" class="p-3 border" style="background-color: #F49122;color:white;" >Hanki tarjoukseni</button>
                </div>

                </form>
             

        </div>
    </div>

    <div class="container mt-5">
        <p class="mx-4 mt-5">
            Pitkien 30 cm lohkojen ansiosta olet varma erittäin
             pitkästä palamisajasta. Antaa paljon lämpöä ja varmistaa korkean hyötysuhteen.
              Ihanteellinen, jos sinulla on suuri takka ja haluat nauttia mukavasta tulesta.
        </p>
    </div>

 @include('Group_Dhole.footer')
    
</body>
</html>
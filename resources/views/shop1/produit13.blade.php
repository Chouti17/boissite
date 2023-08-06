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


     <!-- Topbar Start -->
     @include('Group_Dhole.header')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 ">
            <a href="index.html" class="navbar-brand p-0 m-0">
                
                <span class="m-0 d-none d-md-flex d-sm-flex "><img class="w-50" src="/images/logo1.png" alt="" ></span>
                <span class="m-0 d-md-none d-sm-none"><img class="" style="width: 100px;" src="/images/logo1.png" alt="" ></span>
               
            </a>
            <a href="" style="position: relative;" class="d-md-none d-sm-none">
                <div class="rounded-circle d-flex text-center justify-content-center align-items-center" style="background-color:blue;color:white;width:20px;height:20px;position: absolute;top:-10px;left:32px;">1</div>
                <img src="/images/panier.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link ">Tervetuloa</a>
                    <a href="/shop" class="nav-item nav-link ">konttikauppa</a>
                  
                    <a href="/shop_bois" class="nav-item nav-link active">Polttopuukauppa</a>
                    <a href="/heistä" class="nav-item nav-link">Noin</a>
                  
                    <a href="/todistus" class="nav-item nav-link">Todistus</a>
                    <a href="/ottaa_yhteyttä" class="nav-item nav-link">Ottaa yhteyttä</a>
                </div>
            
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
    
                    <a href="#searchModal" style="position: relative;" class="">
                        <div class="rounded-circle d-flex text-center justify-content-center align-items-center" style="background-color:blue;color:white;width:20px;height:20px;position: absolute;top:-10px;left:32px;">1</div>
                        <img src="/images/panier.png" alt="" href="#searchModal">
                    </a>
                    
                </butaton>
                <a href="/arvio" class="btn btn-primary py-2 px-4 ms-3">Pyydä tarjous</a>
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
                        polttopuut</h3>
                    <a href="" class="h5 text-white">Koti</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">5 pussia sytytystä</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <script>

        function changeImage1() {
        var image = document.getElementById('myImage');
       
            image.src = '/images/produit13bois.jpeg';
        
        }
        function changeImage2() {
        var image = document.getElementById('myImage');
       
            image.src = '/images/n4.jpg';
        
        }
        function changeImage3() {
        var image = document.getElementById('myImage');
        
           
            image.src = '/images/n5.jpg';
        
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
                <img  id="myImage" src="/images/produit13bois.jpeg" style="max-height:250px; ">
            </div>
            <div class="m-4 d-flex flex-row flex-wrap">
               
                <div class="border m-4  " style="width: 100px; height:100px;" onclick="changeImage1()"><img src="/images/produit13bois.jpeg" alt="" style="background-size: cover;height:80px;" class="p-3"></div>
                
               
               
             
            </div>

        </div>
        <div class="col-md-6 d-flex flex-column ml-2">
            <div class="mb-2 mx-4"><h3 style="color: #F49122; margin-bottom:20px;"> 
                5 pussia sytytystä</h3></div>
            <div class="d-flex flex-row mb-2 flex-wrap mx-4">
                <h5 class="text-success text-warning">4.0</h5>
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
              
                

                <div class="mx-4"><h5 class="" style="color: #c5bebe">375 <span class=""style="color:black;">Tähtiarviointi</span></h5></div>
                <div class="ml-4"><h5 class="" style="color: #c5bebe">841 <span class="text-primary">Myyty</span></h5></div>
                


            </div>
            <div class="mb-2 mx-4">  <h3 class="text-primary">20€ HT</h3></div>


            <p class="mx-4">
            Luotko polttopuusi helposti? Tällä sytytyspuupussilla,
             jonka kantavuus on noin 2,5 kg, teet polttopuiden sytytyksen itsellesi erittäin helpoksi. Laitat polttopuiden joukkoon useita sytytyspuita ja tämä varmistaa, että polttopuu syttyy nopeammin ja on helpompi sytyttää.²  Q<²
                </p>


               

            <form action="" method="post">
                @csrf
                @method('post')


                
                 
                

                
          <div class="col-4 mx-4 mt-2">
              <p class="text-primary text-uppercase">Määriä</p>
              <input type="number" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
          </div>

         <div class="col-4 mx-4 mt-2">
          <button type="submit" class="p-3 border" style="background-color: #F49122;color:white;" >Hanki tarjoukseni </button>
         </div>

            </form>
            
             

        </div>
    </div>

   .
.
.
.
.

    <div class="container mt-5">
        <p class="mx-4 mt-5">

        <ul>
            <li> 1. Aseta sytytyspuuta pitkittäin</li>
            <li>2. Aseta sytytyspuuta sen päälle</li>
            <li>3. Laita päälle vielä sytytyspuuta pituussuunnassa</li>
            <li>4. Laita polttopuita tulen ympärille</li>
            <li>5. Sytytä sytytys ja odota</li>
        </ul>
            </p>
           
        
        </div>

 @include('Group_Dhole.footer')
    
</body>
</html>
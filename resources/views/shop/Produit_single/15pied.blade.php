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
                    <a href="/shop" class="nav-item nav-link active ">konttikauppa</a>
                  
                    <a href="/shop_bois" class="nav-item nav-link">Polttopuukauppa</a>
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
                
                background: url('/images/cc2.jpg') center center no-repeat;
                background-size: cover;
            }
        </style>
    
        <div class="container-fluid bg-primary py-5 bg-headerss" style="">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn text-uppercase">tallentaa</h1>
                    <a href="" class="h5 text-white">Koti</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Tallentaa</a>
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
       
            image.src = '/images/151.jpg';
        
        }
        function changeImage2() {
        var image = document.getElementById('myImage');
       
            image.src = '/images/153.jpg';
        
        }
        function changeImage3() {
        var image = document.getElementById('myImage');
       
            image.src = '/images/154.jpg';
        
        }
        function changeImage4() {
        var image = document.getElementById('myImage');
       
            image.src = '/images/155.jpg';
        
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
                <img  id="myImage" src="/images/153.jpg" style="max-height:250px; ">
            </div>
            <div class="m-4 d-flex flex-row flex-wrap">
               
                <div class="border m-4  " style="width: 100px; height:100px;" onclick="changeImage2()"><img src="/images/153.jpg" alt="" style="background-size: cover;height:80px;" class="p-3"></div>
                <div class="border m-4  " style="width: 100px; height:100px;" onclick="changeImage3()"><img src="/images/154.jpg" alt="" style="background-size: cover;height:80px;" class="p-3"></div>
                <div class="border m-4  " style="width: 100px; height:100px;" onclick="changeImage4()"><img src="/images/155.jpg" alt="" style="background-size: cover;height:80px;" class="p-3"></div>
               
                
               
               
             
            </div>

        </div>
        <div class="col-md-6 d-flex flex-column ml-2">
            <div class="mb-2 mx-4"><h3 style="color: #F49122; margin-bottom:20px;">Säilytysastia 15′ Uusi</h3></div>
            <div class="d-flex flex-row mb-2 flex-wrap mx-4">
                <h5 class="text-success text-warning">4.0</h5>
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                <img src="/images/etoile.png" alt="" class="mx-2" style="height:20px;">
                

                <div class="mx-4"><h5 class="" style="color: #c5bebe">420 <span class=""style="color:black;">Tähtiarviointi</span></h5></div>
                <div class="ml-4"><h5 class="" style="color: #c5bebe">804 <span class="text-primary">Myyty</span></h5></div>
                


            </div>
            <div class="mb-2 mx-4">  <h3 class="text-primary">3800€ - 5200€ HT</h3></div>

            <div class="mx-4">
                
                    <ul>
                           <li><span class="text-primary">Yhdeksän: </span>3800€</li>
                           <li><span class="text-primary">Rilaisuus: </span>5200€</li>
                     </ul>     
       
                 
            </div>

           

          
            
           
            
           
            
           
            
            
       

            <p class="mx-4">
             <ul>
                    <li><span class="text-primary">Kokonaismitat: </span> L 220 x S 455 x K 226 cm</li>
                    <li><span class="text-primary">Sisämitat:</span> P211 x S439 x Korkeus 205 cm</li>
                    <li><span class="text-primary">Käyttötilavuus: </span> 18,94 m3</li>
                    <li><span class="text-primary"> Hyödyllinen pinta-ala: </span>9,26 m²</li>
                    <li><span class="text-primary">Rakenne: </span> Aaltopahvilevyt </li>
                    <li><span class="text-primary">Rakenne: </span>Aaltopahvilevyt</li>
                    <li><span class="text-primary">Levyn paksuus: </span> 12/100 </li>
                    <li><span class="text-primary"> Max kuorma:</span> 5 tonnia</li>
               </ul>

            </p>

            <form action="" method="post">
                @csrf
                @method('post')


              
                
                    <div class="col-3 mx-4">
                        <p class="text-primary text-uppercase">Osavaltio</p>
            
                        <select name="" id="" class="form-control px-4" style="background-color: white; witdh:100px;">
                          
                          <option value="Valkoinen"> Yhdeksän</option>
                          <option value="Vihreä">Rilaisuus</option>
                         
    
                     
                        </select>
                    </div>   
                 
                

                
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

 @include('Group_Dhole.footer')
    
</body>
</html>
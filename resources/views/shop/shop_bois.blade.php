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
<html lang="fi">

<head>
    <meta charset="utf-8">
    <title>GROUP-DHOLE</title>
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"> <img src="" alt=""></div>
    </div>
    <!-- Spinner End -->


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
                  
                    <a href="/shop_bois" class="nav-item nav-link  active" style="font-size: 16px;">Polttopuukauppa</a>
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
    
    
    
    
        <div class="container-fluid bg-primary py-5 bg-headers" style="">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn text-uppercase">polttopuut</h1>
                    <a   class="h5 text-white">Koti</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a   class="h5 text-white">Polttopuut</a>
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
    <div class="container-fluid d-flex justify-content-center align-items-center mt-4">
        <h3 style="color: #F49122" class="text-uppercase">tuotteemme</h3>

    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center mt-4 flex-wrap">
       
        <div class="col-md-6 col-lg-4 row mb-2">

            
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div><img src="images/op1.jpeg" style="height:300px;" href="/shop/puun"></div>
                    <div class="product__item__pic set-bg mt-2" ">
                        <ul class="product__item__pic__hover">
                            <li class="sax"><a ><i class="fa fa-heart "></i></a></li>
                            <li><a href="/shop/puun"><i class="fa fa-bars "></i></a></li>
                            <li><a href="/ajout/19"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text text-center">
                        <h6><a  >Puun syyt 70 pussi</a></h6>
                        <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€600</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€525</span></h5>
                    </div>
                </div>
            

        </div>
        <div class="col-md-6 col-lg-4 row mb-2">

            
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div><img src="images/produit2bois.jpeg" style="height:300px;" href="/shop/crepito"></div>
                <div class="product__item__pic set-bg mt-2">
                    <ul class="product__item__pic__hover">
                        <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                        <li><a href="/shop/crepito"><i class="fa fa-bars "></i></a></li>
                        <li><a href="/ajout/20"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text text-center">
                    <h6><a  >TIIVITEETTY CREPITO LOKIT</a></h6>
                    <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€520</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€465</span></h5>
                </div>
            </div>
        

    </div>
    <div class="col-md-6 col-lg-4 row mb-2">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit3bois.jpeg" style="height:300px;" href="/shop/havupuu"></div>
            <div class="product__item__pic set-bg mt-2" >
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/havupuu"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/21"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >Havupuu/Lehtipuu</a></h6>
                <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€275</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€200</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit4bois.jpeg" style="height:300px;"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit2bois.jpeg" href="/shop/88_pussia">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/88_pussia"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/7"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >88 pussia uunikuivattua saarnia</a></h6>
                <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€749</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€625</span></h5>
            </div>
        </div>
    

    </div>

    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit5bois.jpeg" style="height:300px;"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit2bois.jpeg" href="/shop/paletti">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/paletti"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/23"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >Paletti uunikuivattu leppä</a></h6>
                <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€599</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€427.99</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit6bois.jpeg" style="height:300px;" href="/shop/pyökki"></div>
            <div class="product__item__pic set-bg mt-2" >
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/pyökki"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/24"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >Paletti uunikuivattu pyökki 30 cm</a></h6>
                <h5 class="price"><span class="price-sale ml-2 text-success">€499</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/n1.jpg" style="height:300px;"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit2bois.jpeg" href="/shop/koko_lava_koivupuuta">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/koko_lava_koivupuuta"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/25"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center ">
                <h6><a  >Puubriketti LP Täysi Lava Puubrikettejä</a></h6>
                <h5 class="price"></span><span class="price-sale ml-2 text-success">€621</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit8bois.jpeg" style="height:300px;"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit2bois.jpeg" href="/shop/puolilava_uunikuivattua_koivupolttopuuta">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/puolilava_uunikuivattua_koivupolttopuuta"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/26"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >Puolilava uunikuivattua koivupolttopuuta</a></h6>
                <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€399</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€329</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit9bois.jpeg" style="height:300px;" href="/shop/puolilava_uunikuivattua_tammipolttopuuta"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit2bois.jpeg">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/puolilava_uunikuivattua_tammipolttopuuta"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/27"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >Puolilava uunikuivattua tammipolttopuuta</a></h6>
                <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€429</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€359</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit10bois.jpeg" style="height:300px;"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit2bois.jpeg" href="/shop/kuiva">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/kuiva"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/28"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >Kuiva puu valmiina poltettavaksi</a></h6>
                <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€650</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€620</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit12bois.jpeg" style="height:300px;"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit11bois.jpeg" href="/shop/40_pussia">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/40_pussia"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/29"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >40 pussia kuivattua saarnia 8 kg</a></h6>
                <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€400</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€349</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit11bois.jpeg" style="height:300px;"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit2bois.jpeg" href="/shop/40_pussias">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/40_pussias"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/30"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >40 pussia uunikuivattua leppäpuuta</a></h6>
                <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€329</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€319</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit13bois.jpeg" style="height:300px;"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit2bois.jpeg" href="/shop/5_pussia_sytytystä">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/5_pussia_sytytystä"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/31"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >5 pussia sytytystä</a></h6>
                <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€22</span><span class="p-1"></span><span class="price-sale ml-2 text-success">€20</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit14bois.jpeg" style="height:300px;"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit2bois.jpeg">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/lave"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/32"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >RUF-lava 1000 kg</a></h6>
                <h5 class="price"><span class="mr-2 price-dc text-decoration-line-through text-danger">€920</span><span class="p-1"></span><span class="price-sale ml-2 text-success">872€</span></h5>
            </div>
        </div>
    

    </div>
    <div class="col-md-6 col-lg-4 row mb-2 mt-4">

            
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><img src="images/produit15bois.jpeg" style="height:300px;"></div>
            <div class="product__item__pic set-bg mt-2" data-setbg="images/produit2bois.jpeg">
                <ul class="product__item__pic__hover">
                    <li class="sax"><a  ><i class="fa fa-heart "></i></a></li>
                    <li><a href="/shop/nestro_pyökki"><i class="fa fa-bars "></i></a></li>
                    <li><a href="/ajout/33"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text text-center">
                <h6><a  >Nestro pyökki- ja tammibriketit 300 kg</a></h6>
                <h5 class="price"><span class="price-sale ml-2 text-success">€872</span></h5>
            </div>
        </div>
    

    </div>
    

          

    </div>

    

    @include('Group_Dhole.footer')

</body>
</html>
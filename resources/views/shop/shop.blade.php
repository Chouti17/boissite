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
	<script type="text/javascript">
		function googleTranslateElementInit() {
		  new google.translate.TranslateElement({pageLanguage: 'fi'}, 'google_translate_element');
		}
	  </script>
	  <script src="//translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit" type="text/javascript"></script>
	  
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
					<a href="/" class="nav-item nav-link" style="font-size: 16px;">Tervetuloa</a>
					<a href="/shop" class="nav-item nav-link  active " style="font-size: 16px;">konttikauppa</a>
				  
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
	
	
    
        <div class="container-fluid bg-primary py-5 bg-header" style="">
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
	@include('Group_Dhole.nav')

    <!-- Full Screen Search Start -->
    
    <!-- Full Screen Search End -->

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	
            <h2 class="mb-4">Meidän tuotteemme</h2>
            <p>All-in-one-säilytysratkaisusi: Tutustu konttimyyntiimme, jossa käytännöllisyys ja tehokkuus kohtaavat</p>
            <p class="mt-2 text-uppercase" style="color:#F49122;font-weigth:bold;">kontti Dry</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/20/jalkaa" class="img-prod border-bottom"><img class="img-fluid" src="/images/conteneur101.jpg" alt="Colorlib Template">
    						<span class="status" style="background-color:#F49122">-30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">vakiosäiliö (kuiva)</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">€8000.00</span><span class="p-1"></span><span class="price-sale ml-2">€7000</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/20/jalkaa" class="add-to-cart d-flex justify-content-center align-items-center text-center ">
	    								
										<img src="/images/bar.png" alt="">
										
	    							</a>
	    							<a href="/ajout/3" class="buy-now d-flex justify-content-center align-items-center mx-1 AJ1">
	    								
										<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center AJ1 ">
	    							
										<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/10/jalkaa" class="img-prod border-bottom"><img class="img-fluid" src="/images/10dry.jpg" alt="Colorlib Template" style="min-height: 190px;">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">10 Jalkaa</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>€3000</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/10/jalkaa" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/1" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/product" class="img-prod border-bottom"><img class="img-fluid" src="/images/8piedss.jpg" alt="Colorlib Template"style="min-height: 190px;" >
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a >8 Jalkaa</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>€1300</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/8/jalkaa" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/2" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/15/jalkaa" class="img-prod border-bottom"><img class="img-fluid" src="/images/153.jpg" alt="Colorlib Template" style="min-height: 190px;max-height:190px;">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">15 Jalkaa</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>€5200</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/15/jalkaa" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/12" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>


    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/20/jalkaa" class="img-prod border-bottom"><img class="img-fluid" src="/images/20pieds.jpg" alt="Colorlib Template" style="min-height: 250px;max-height:250px;">
    						<span class="status" style="background-color:#F49122">-30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">20 Jalkaa</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">€10000</span><span class="p-1"></span><span class="price-sale">€7000</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/20/jalkaa" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/3" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/30/jalkaa" class="img-prod border-bottom"><img class="img-fluid" src="/images/30pied.jpg" alt="Colorlib Template" style="max-height: 250px;min-height:250px;">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">30 Jalkaa</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>€8500</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/30/jalkaa" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/13" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/40/jalkaa" class="img-prod border-bottom"><img class="img-fluid" src="/images/41pied.jpg" alt="Colorlib Template" style="height: 250px;">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">40 Jalkaa</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>€10000</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/40/jalkaa" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/4" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/40/jalkaa" class="img-prod border-bottom"><img class="img-fluid" src="/images/42pieds.png" alt="Colorlib Template" style="height: 250px;">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">40 Jalkaa</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>€10000</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/40/jalkaa" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/4" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	
            <h2 class="mb-4 " style="color:#F49122;">Kattoluukulla varustettu avoin kattosäiliö</h2>
            <p class="text-start" style="color: black;">Avattavalle säiliölle on tunnusomaista avautuva katto. Tämä kontti on luotu mahdollistamaan tilaa vievien esineiden, joita ei voida purkaa, tai raskaiden tuotteiden lastaamiseen ylhäältä nostureilla. Käytössä se on paljon helpompaa.</p>
          
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-lg-6 ftco-animate">
    				<div class="product">
    					<a href="/shop/avoin_yläsäiliö" class="img-prod border-bottom"><img class="img-fluid" src="/images/opentopcotainer10.png" alt="Colorlib Template">
    						<span class="status" style="background-color:#F49122">-30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">vakiosäiliö</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">€7800.00</span><span class="p-1"></span><span class="price-sale ml-2">€5460</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/avoin_yläsäiliö" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/shop/avoin_yläsäiliö" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 ftco-animate">
    				<div class="product">
                    
    					<a href="/shop/avoin_yläsäiliö" class="img-prod border-bottom"><img class="img-fluid" src="/images/open.png" alt="Colorlib Template" style="min-height: 190px; max-height:520px;">
                            <span class="status" style="background-color:#F49122">-30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">katettu katto</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>€3000</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/avoin_yläsäiliö" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/shop/avoin_yläsäiliö" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			
    	</div>
    </section>

    <div class="container">
        <h3>Avopääkontin sekalaiset varusteet</h3>
        <p></p>

        <ul>
            <li> Ei kovaa kattoa (avokatto)</li>
            <li>Ylempi suojapeitteellä tai irrotettavalla kannella</li>
            <li>Suuret irrotettavat metallikahvat</li>
            <li>Saranoihin asennetut ovet</li>
            <li>Irrotettavat poikkipalkit jokaisen oven yläpuolella</li>
            <li>Muut ominaisuudet, jotka ovat samanlaisia ​​kuin kuivasäiliö</li>
        </ul>

        <p class="mt-2 px-2" style="color: #F49122">Tutustu laajaan valikoimaamme kaikenkokoisia Open Top -kontteja, joissa on mahdollisuus peittää se pressulla tai ei. Saat tarjouksesi 24 tunnin sisällä tilaamalla jo tänään!</p>

        <button class="p-3 m-1" href="/arvio" style="color: white;background-color:#061429;border:none;">Saada tarjous</button>
    </div>
	
    



    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Jääkaappikontti</h5>
                        <h1 class="mb-0">Pidä tuotteesi tuoreina laadukkailla kylmäsäiliöillämme</h1>
                    </div>
                    <p class="mb-4">Kylmäkontti on suunniteltu säätelemään lämpötilaa niin, että lastin laatu säilyy kuljetuksen aikana.

                        Tämäntyyppinen säiliö on yleensä varustettu sähkömoottorilla säätelemään sisälämpötilaa.
                        
                        Kylmä- tai kylmäsäiliötä käytetään erityisesti kuumien maiden läpi kulkevien elintarvikkeiden, pakastetuotteiden ja helposti pilaantuvien elintarvikkeiden kylmäketjun ylläpitoon.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                           
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Ylläpitää tiettyä huonelämpötilaa</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>jatkuva lämmitys esim. +30°C</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Jäähdyttää jatkuvasti -35°C:een</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>tarjoavat isotermisen toiminnon, kuten jäähdyttimen</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                       
                    
                    </div>
                    <a href="/shop/säiliökontti" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Saada tarjous</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img href="/shop/säiliökontti" class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="/images/frigo1.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	
            <h2 class="mb-4" style="color:#F49122;font-weigth:bold;">Säiliökontti</h2>
            
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="" class="img-prod border-bottom"><img class="img-fluid" src="/images/frigo1.jpg" alt="Colorlib Template" style="max-height: 300px;">
    						<span class="status" style="background-color:#F49122">-10%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">vakiosäiliö (kuiva)</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">€8000.00</span><span class="p-1"></span><span class="price-sale ml-2">€7600.95</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/säiliökontti" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/15" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/säiliökontti" class="img-prod border-bottom"><img class="img-fluid" src="/images/frigo2.jpg" alt="Colorlib Template" >
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">10 Jalkaa</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>€5000</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/säiliökontti" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/16" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/säiliökontti" class="img-prod border-bottom"><img class="img-fluid" src="/images/frigo3.jpg" alt="Colorlib Template"  >
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">20 Jalkaa</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>€8000</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/säiliökontti" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/17" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="/images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="/shop/säiliökontti" class="img-prod border-bottom"><img class="img-fluid" src="/images/frigo4.jpg" alt="Colorlib Template" >
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="">40 Jalkaa</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>€14000</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/shop/säiliökontti" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<img src="/images/bar.png" alt="">
	    							</a>
	    							<a href="/ajout/18" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<img src="images/carte-de-shopping.png" alt="">
	    							</a>
	    							<a href="" class="heart d-flex justify-content-center align-items-center ">
	    							<img src="/images/silhouette-en-forme-de-coeur.png" alt="">
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>


    			
    		</div>
    	</div>
    </section>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
          	
				<h2 class="mb-4 " style="color:#F49122;" href="/shop/säiliön_kontti">säiliö-kontti</h2>
				<p class="text-start" style="color: black;">Säiliösäiliötä käytetään kaasujen, nesteiden tai jauhemaisten tuotteiden kuljettamiseen.

					Jotkut tavarat voivat olla ruokaa, toiset vaarallisia, kuten bensiini ja tietyt kaasumaiset tuotteet.</p>
			  
			  </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Säiliön kontti</h5>
                        
                    </div>
                    <p class="mb-4">Kylmäkontti on suunniteltu säätelemään lämpötilaa niin, että lastin laatu säilyy kuljetuksen aikana.

                        Tämäntyyppinen säiliö on yleensä varustettu sähkömoottorilla säätelemään sisälämpötilaa.
                        
                        Kylmä- tai kylmäsäiliötä käytetään erityisesti kuumien maiden läpi kulkevien elintarvikkeiden, pakastetuotteiden ja helposti pilaantuvien elintarvikkeiden kylmäketjun ylläpitoon.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                           
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>ISO 1496 -standardi</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>turvallinen</h5>
                        </div>
                        
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                       
                    
                    </div>
                    <a href="/shop/säiliön_kontti" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Saada tarjous</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img href="/shop/säiliön_kontti"class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="/images/citerne.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
          	
				<h2 class="mb-4 " style="color:#F49122;">Säiliö  flat rack</h2>
				<p class="text-start" style="color: black;">Sille on ominaista taitettavat päät lattiassa. Pohjaa käytetään kuorman sijoittamiseen, sivuseiniä (jäykkiä tai ei) käytetään kuorman kiinnittämiseen sivulaudoilla tai säilytyskuopilla..</p>
			  
			  </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Säiliö  flat rack</h5>
                        
                    </div>
                    <p class="mb-4">Sitä käytetään esimerkiksi ajoneuvojen kuljettamiseen: se on erittäin hyödyllinen minkä tahansa ison kuorman, kuten veneen, traktorin, tai minkä tahansa ylimittaisen kuorman (leveys tai korkeus) kuljettamiseen.

						flat rack kontin lattia on suunniteltu kuljettamaan raskaita kuormia turvallisesti.
						
						Säiliö on taitettava, mikä helpottaa sen tasaista säilytystä tai säilytystä: seinät taittuvat alas lattialle.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                           
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>ISO 1496 -standardi</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>turvallinen</h5>
                        </div>
                        
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                       
                    
                    </div>
                    <a href="/shop/säiliö_flat_rack" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Saada tarjous</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img href="/shop/säiliö_flat_rack"class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="/images/flat.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="container d-flex justify-content-center align-items-center mt-2 mb-2">
		<h1>Miksi me olemme referenssi</h1>
	</div>
	
	
	<section class="ftco-section">
		<div class="container">
			<div class="row no-gutters ftco-services">
	  <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
		<div class="media block-6 services mb-md-0 mb-4">
		  <div class="icon  active d-flex justify-content-center align-items-center mb-2">
			<img src="/images/cargo.png" alt="" style="background: #F49122; height:100px;" class="rounded-circle p-4">
		  </div>
		  <div class="media-body">
			<h3 class="heading">Nopea toimitus</h3>
			<span>ikalähetys</span>
		
		  </div>
		</div>      
	  </div>
	  <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
		<div class="media block-6 services mb-md-0 mb-4">
			<div class="icon  active d-flex justify-content-center align-items-center mb-2">
				<img src="/images/grue-a-conteneurs.png" alt="" style="background: #F49122; height:100px;" class="rounded-circle p-4">
			  </div>
		  <div class="media-body">
			<h3 class="heading">Uusi tuote</h3>
			<span>Tuote hyvin paketti</span>
		  </div>
		</div>    
	  </div>
	  <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
		<div class="media block-6 services mb-md-0 mb-4">
			<div class="icon  active d-flex justify-content-center align-items-center mb-2">
				<img src="images/conteneurs.png" alt="" style="background: #F49122; height:100px;" class="rounded-circle p-4">
			  </div>
		  <div class="media-body">
			<h3 class="heading">Huippulaatua</h3>
			<span>Laadukkaat tuotteet</span>
		  </div>
		</div>      
	  </div>
	  <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
		<div class="media block-6 services mb-md-0 mb-4">
			<div class="icon  active d-flex justify-content-center align-items-center mb-2">
				<img src="/images/livraison-24h-24.png" alt="" style="background: #F49122; height:100px;" class="rounded-circle p-4">
			  </div>
		  <div class="media-body">
			<h3 class="heading">Tuki</h3>
			<span>24/7 Tuki</span>
		  </div>
		</div>      
	  </div>
	</div>
		</div>
	</section> 
	
	@include('Group_Dhole.footer')

</body>

</html>
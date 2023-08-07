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
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    @include('Group_Dhole.entete')

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="min-height: 300px;">
                <img class="w-100 h-100" src="/images/carousel-1.jpg" alt="Image" style="min-height: 300px;" >
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Täydellinen säilytysratkaisu</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Monikäyttöiset ja kestävät säilytysratkaisut</h1>
                        <a href="/ottaa_yhteyttä" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">ota selvää</a>
                        <a href="/arvio" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Pyydä tarjous</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item " style="min-height: 300px;" >
                <img class="w-100 " src="/images/carousel5.jpg" alt="Image" style="min-height: 300px;">
              
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Polttopuu, joka tekee kaiken eron</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Lämmitä takkasi kuivilla, polttovalmiilla polttopuillamme</h1>
                        <a href="/ottaa_yhteyttä" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">ota selvää</a>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Pyydä tarjous</a>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev d-none d-md-flex d-sm-flex" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none d-md-flex d-sm-flex" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
      
    </div>
</div>
<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0 d-none d-md-flex d-sm-flex">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Tyytyväisiä asiakkaita</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">8234555</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                       <img src="/images/porte-conteneurs.png" alt="">
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">kontti myyty</h5>
                        <h1 class="mb-0" data-toggle="counter-up">10852666</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <img src="/images/charpente.png" alt="">
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">tonnia puuta,myyty</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts Start -->
<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Group Dhole</h5>
                    <h3 class="mb-0">Olemme erikoistuneet konttien ja polttopuiden valmistukseen, myyntiin ja vuokraamiseen maailmanlaajuisesti.</h1>
                </div>
                <p class="mb-4">Sitoutumisemme laatuun, luotettavuuteen ja poikkeukselliseen asiakaspalveluun tekee meistä luotettavan kumppanin vastaamaan konttien 
                    ja lämmityspuun tarpeisiinne, missä ikinä olettekin maailmassa.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Ostot nopeasti, pikatoimitus</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Tiimi on erittäin pätevä</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Tuki</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Hinta kilpailukykyinen</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Soita kysyäksesi mitä tahansa</h5>
                        <h4 class="text-primary mb-0">+44 7441 427902</h4>
                    </div>
                </div>
                <a href="/arvio" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Pyydä tarjous</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="/images/conf3.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@include('Group_Dhole.AjoutPpanier')

<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">myydyin kontti</h5>
            <h3 class="mb-0">Säiliöt kestävät, joustavat ja valmiit täyttämään vaatimukset, vain Group Dhole</h3>
        </div>
        <!-- Categories Section Begin -->
    
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                        <img class="img-fluid w-100 mb-4" src="images/conteneur2.jpeg" alt="">
                        <div class="team-social">
                          <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href="/ajout/1" >Lisää ostoskoriin</a>
                          
                        </div>
                       
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">SÄILIÖ 10 JALKAA korkea kuutio</h4>
                        <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                          <div class="col-6 py-1 text-right border-right">
                            <strong> N° Malli</strong>
                          </div>
                          <div class="col-6 py-1">OFF10 </div>
                        </div>
                        <div class="row border-bottom">
                          <div class="col-6 py-1 text-right border-right">
                            <strong>Bruttopaino</strong>
                          </div>
                          <div class="col-6 py-1">10 000 kg</div>
                        </div>
                        <div class="row border-bottom">
                          <div class="col-6 py-1 text-right border-right">
                            <strong>Elinikä</strong>
                          </div>
                          <div class="col-6 py-1">15 vuotta vanha</div>
                        </div>
                        <div class="row">
                          <div class="col-6 py-1 text-right border-right">
                            <strong>Määrä</strong>
                          </div>
                          <div class="col-6 py-1">3000 €</div>
                        </div>
                        <a href="/shop/10/jalkaa" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
         
                      </div>
                </div>
            </div>
            <div class="col-lg-4 " data-wow-delay="">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                        <img class="img-fluid w-100 mb-5" src="/images/conteneur 8 pied.jpg" alt="">
                        <div class="team-social">
                          <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href="/ajout/2">Lisää ostoskoriin</a>
                          
                        </div>
                      
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">SÄILIÖ 8 JALKAA </h4>
                        <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                    <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong> N° Malli</strong>
                        </div>
                        <div class="col-6 py-1">OBF12 </div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Bruttopaino</strong>
                        </div>
                        <div class="col-6 py-1">10 000 kg</div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Elinikä</strong>
                        </div>
                        <div class="col-6 py-1">15 vuotta vanha</div>
                      </div>
                    
                     <div class="row">
                          <div class="col-6 py-1 text-right border-right">
                            <strong>Määrä</strong>
                          </div>
                          <div class="col-6 py-1">1300 €</div>
                    </div>
                    <a  class="btn rounded px-4 mx-auto mb-4 mt-4" href="/shop/product" style="background-color: #F49122;color:white;">ota selvää</a>
                    </div> 
                    
         
                    
                </div>
            </div>

            <div class="col-lg-4" data-wow-delay="">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                        <img class="img-fluid w-100" src="/images/20.jpg" alt="">
                        <div class="team-social">

                         
                            <div class="d-none">
                              <input type="text" name="image" value="20.jpg">
                              <input type="text" name="nom" value="SÄILIÖ 20 JALKAA">
                              <input type="text" name="details" value="Ulkomitat:20'L x 8'L x 9'6'K">
                              <input type="text" name="prix" value="3000">
                            </div>
                            
                            <a class="btn rounded px-4 mx-auto mb-4 mt-4" type="submit" href="/ajout/3" style="background-color: #F49122;color:white;" >Lisää ostoskoriin</a>
                         
                          
                          
                        </div>
                      
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">SÄILIÖ 20 JALKAA </h4>
                        <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                    <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong> Ulkomitat</strong>
                        </div>
                        <div class="col-6 py-1">20'L x 8'L x 9'6"K</div>
                      </div>
                      
                    
                     <div class="row">
                          <div class="col-6 py-1 text-right border-right">
                            <strong>Määrä</strong>
                          </div>
                          <div class="col-6 py-1">7000  €</div>
                    </div>
                    <a href="/shop/20/jalkaa" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
                    </div> 
                    
         
                    
                </div>
            </div>

            <div class="col-lg-4 " data-wow-delay="">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                        <img class="img-fluid w-100" src="/images/41.jpg" alt="">
                        <div class="team-social">
                          <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href="/ajout/4">Lisää ostoskoriin</a>
                          
                        </div>
                      
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">SÄILIÖ 40 JALKAA korkea kuutio 4 ovea sivuilla </h4>
                        <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                    <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong> Ulkomitat</strong>
                        </div>
                        <div class="col-6 py-1">40’L x 8’l x 9’6”H</div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Sisämitat</strong>
                        </div>
                        <div class="col-6 py-1">39’6″L x 7’8”l x 8’10”H</div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Oven aukko </strong>
                        </div>
                        <div class="col-6 py-1">92”L x 98”H</div>
                      </div>
                    
                     <div class="row">
                          <div class="col-6 py-1 text-right border-right">
                            <strong>Määrä</strong>
                          </div>
                          <div class="col-6 py-1">10000 €</div>
                    </div>
                    <a href="/shop/40/jalkaa" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
                    </div> 
                    
         
                    
                </div>
            </div>

            <div class="col-lg-4 " data-wow-delay="">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                        <img class="img-fluid w-100" src="/images/frigo.jpg" alt="">
                        <div class="team-social">
                          <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href="/ajout/5">Lisää ostoskoriin</a>
                          
                        </div>
                      
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">SÄILIÖ 40 JALKA korkea jäähdytetty kuutio</h4>
                        <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                    <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong> Ulkomitat</strong>
                        </div>
                        <div class="col-6 py-1">20'L x 8'L x 9'6"K</div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Sisämitat</strong>
                        </div>
                        <div class="col-6 py-1">19'2"P x 7'8"L x 8'10"K</div>
                      </div>
                      
                    
                     <div class="row">
                          <div class="col-6 py-1 text-right border-right">
                            <strong>Määrä</strong>
                          </div>
                          <div class="col-6 py-1">14000  €</div>
                    </div>
                    <a href="/shop/säiliökontti" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
                    </div> 
                    
         
                    
                </div>
            </div>
            
            <div class="col-lg-4 " data-wow-delay="0.9s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                        <img class="img-fluid w-100" src="/images/40a.jpg" alt="">
                        <div class="team-social">
                          <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href=/ajout/4"">Lisää ostoskoriin</a>
                          
                        </div>
                      
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Toimisto ja varasto - 40 metriä </h4>
                        <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                    <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong> PITUUS</strong>
                        </div>
                        <div class="col-6 py-1">40’</div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>LEVEYS</strong>
                        </div>
                        <div class="col-6 py-1">8′</div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>SISÄKORKEUS </strong>
                        </div>
                        <div class="col-6 py-1">7′10″</div>
                      </div>
                    
                     <div class="row">
                          <div class="col-6 py-1 text-right border-right">
                            <strong>Määrä</strong>
                          </div>
                          <div class="col-6 py-1">10000 €</div>
                    </div>
                    <a href="/shop/40/jalkaa" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
                    </div> 
                    
         
                    
                </div>
                </div>
            </div>
            
           
        </div>
    </div>
</div>
<div class="container-fluid  d-flex justify-content-center align-items-centerr">

  <a href="/shop" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">Jatka myymäläämme</a>

</div>


<!-- Team Start -->
<div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-3">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
          <h5 class="fw-bold text-primary text-uppercase">kysytyin</h5>
          <h3 class="mb-0">Valitse korkealuokkainen polttopuuvalikoimamme verkossa myytäväksi ja hyödynnä kotiinkuljetus</h3>
      </div>
      <!-- Categories Section Begin -->
  
      <div class="row g-5">
          <div class="col-lg-4  " data-wow-delay="">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                      <img class="img-fluid w-100 mb-4" src="images/bois6.jpg" alt="" style="height: 300px;">
                      <div class="team-social">
                        <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href="/ajout/6">Lisää ostoskoriin</a>
                        
                      </div>
                     
                  </div>
                  <div class="text-center py-4">
                      <h4 class="text-primary">Crepito Premium -rakeet</h4>
                      <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                  </div>
                  <div class="card-footer bg-transparent py-4 px-5">
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong> Alkuperä</strong>
                        </div>
                        <div class="col-6 py-1">100 % neitseellistä puuta </div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Mitat</strong>
                        </div>
                        <div class="col-6 py-1"> 3,15 mm < Pituus < 40 mm</div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Määrä</strong>
                        </div>
                        <div class="col-6 py-1">15 kg per pussi</div>
                      </div>
                     
                      <div class="row">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Määrä</strong>
                        </div>
                        <div class="col-6 py-1"><span class="text-success">525 €</span> <span class="text-decoration-line-through text-danger">827 €</span></div>
                      </div>
                      <a href="/shop/puun" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
       
                    </div>
              </div>
          </div>
          <div class="col-lg-4" data-wow-delay="">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                      <img class="img-fluid w-100 mb-5" src="/images/produit4bois.jpeg" alt="" style="height: 300px;">
                      <div class="team-social">
                        <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href="/ajout/7">Lisää ostoskoriin</a>
                        
                      </div>
                    
                  </div>
                  <div class="text-center py-4">
                      <h4 class="text-primary">88 pussia uunikuivattua saarnia </h4>
                      <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                  </div>
                  <div class="card-footer bg-transparent py-4 px-5">
                  <div class="row border-bottom">
                      <div class="col-6 py-1 text-right border-right">
                        <strong>Alkuperä: </strong>
                      </div>
                      <div class="col-6 py-1">100% Garrigue Gardoise puuta</div>
                    </div>
                    <div class="row border-bottom">
                      <div class="col-6 py-1 text-right border-right">
                        <strong> Pituus </strong>
                      </div>
                      <div class="col-6 py-1">25-35 cm</div>
                    </div>
                    <div class="row border-bottom">
                      <div class="col-6 py-1 text-right border-right">
                        <strong> Määrä</strong>
                      </div>
                      <div class="col-6 py-1"> 1,20 m3 (1,80 kuutiometriä)</div>
                    </div>
                 
                  
                   <div class="row">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Määrä</strong>
                        </div>
                        <div class="col-6 py-1"><span class="text-success">625 €</span> <span class="text-decoration-line-through text-danger">754 €</span></div>
                  </div>
                  <a href="/shop/88_pussia" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
                  </div> 
                  
       
                  
              </div>
          </div>

          <div class="col-lg-4" data-wow-delay="">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                      <img class="img-fluid w-100" src="/images/produit6bois.jpeg" alt="">
                      <div class="team-social">
                        <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href="/ajout/8">Lisää ostoskoriin</a>
                        
                      </div>
                    
                  </div>
                  <div class="text-center py-4">
                      <h4 class="text-primary">Paletti uunikuivattu pyökki 30 cm</h4>
                      <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                  </div>
                  <div class="card-footer bg-transparent py-4 px-5">
                  <div class="row border-bottom">
                      <div class="col-6 py-1 text-right border-right">
                        <strong>Sekapuu  </strong>
                      </div>
                      <div class="col-6 py-1">2 M3</div>
                  </div>
                  <div class="row border-bottom">
                    <div class="col-6 py-1 text-right border-right">
                      <strong> Pituus </strong>
                    </div>
                    <div class="col-6 py-1">25-35 cm</div>
                  </div>
                    
                    
                  
                   <div class="row">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Määrä</strong>
                        </div>
                        <div class="col-6 py-1"><span>499 €</span> <span class="text-decoration-line-through text-danger">622 €</span></div>
                  </div>
                  <a href="/shop/pyökki" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
                  </div> 
                  
       
                  
              </div>
          </div>

          <div class="col-lg-4 " data-wow-delay="">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                      <img class="img-fluid w-100" src="/images/bois2.jpg" alt="">
                      <div class="team-social">
                        <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href="/ajout/9">Lisää ostoskoriin</a>
                        
                      </div>
                    
                  </div>
                  <div class="text-center py-4">
                      <h4 class="text-primary">valkoinen tammi ja pyökki</h4>
                      <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                  </div>
                  <div class="card-footer bg-transparent py-4 px-5">
                  <div class="row border-bottom">
                      <div class="col-6 py-1 text-right border-right">
                        <strong> Pituus</strong>
                      
                      </div>
                      <div class="col-6 py-1">25 cm</div>
                    </div>
                    <div class="row border-bottom">
                      <div class="col-6 py-1 text-right border-right">
                        <strong>Myyntiyksikkö</strong>
                      </div>
                      <div class="col-6 py-1">2 lavaa</div>
                    </div>
                    <div class="row border-bottom">
                      <div class="col-6 py-1 text-right border-right">
                        <strong>Määrä </strong>
                      </div>
                      <div class="col-6 py-1">4 kuutiometriä (2,40 m3)</div>
                    </div>
                  
                   <div class="row">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Määrä</strong>
                        </div>
                        <div class="col-6 py-1"><span>147 €</span> <span class="text-decoration-line-through text-danger">245 €</span></div>
                  </div>
                  <a href="/shop/tammi" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
                  </div> 
                  
       
                  
              </div>
          </div>

          <div class="col-lg-4 " data-wow-delay="">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                      <img class="img-fluid w-100" src="/images/bois3.jpg" alt="">
                      <div class="team-social">
                        <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href="/ajout/10">Lisää ostoskoriin</a>
                        
                      </div>
                    
                  </div>
                  <div class="text-center py-4">
                      <h4 class="text-primary">PELLETIT PUUSTA
                       </h4>
                      <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                  </div>
                  <div class="card-footer bg-transparent py-4 px-5">
                  <div class="row border-bottom">
                      <div class="col-6 py-1 text-right border-right">
                        <strong>Lavalla </strong>
                      </div>
                      <div class="col-6 py-1">65 pussia, 15 kg</div>
                    </div>
                    <div class="row border-bottom">
                      <div class="col-6 py-1 text-right border-right">
                        <strong>Puulaji</strong>
                      </div>
                      <div class="col-6 py-1">100 % kovapuu (tammi, sarveispyökki tai pyökki)</div>
                    </div>
                    
                  
                   <div class="row">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Määrä</strong>
                        </div>
                        <div class="col-6 py-1"><span>315 €</span> <span class="text-decoration-line-through text-danger">375 €</span></div>
                  </div>
                  <a href="/shop/puusta" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
                  </div> 
                  
       
                  
              </div>
          </div>
          
          <div class="col-lg-4  " data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden " style="background-color: #EAE9EE;">
                      <img class="img-fluid w-100" src="/images/bois4.jpg" alt="">
                      <div class="team-social">
                        <a class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;" href="/ajout/11">Lisää ostoskoriin</a>
                        
                      </div>
                  </div>
                  <div class="text-center py-4">
                    <h4 class="text-primary">Premium Crépito -lokit
                     </h4>
                    <p class="text-uppercase m-0">Tuotteen Kuvaus</p>
                </div>
                <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                    <div class="col-6 py-1 text-right border-right">
                      <strong>Laatu  </strong>
                    </div>
                    <div class="col-6 py-1">Ryhmä H1 G1</div>
                  </div>
                  <div class="row border-bottom">
                    <div class="col-6 py-1 text-right border-right">
                      <strong> Pituus: 40 cm</strong>
                    </div>
                    <div class="col-6 py-1">40 cm</div>
                  </div>
                  
                
                 <div class="row">
                      <div class="col-6 py-1 text-right border-right">
                        <strong>Määrä</strong>
                      </div>
                      <div class="col-6 py-1"><span>315 €</span> <span class="text-decoration-line-through text-danger">375 €</span></div>
                </div>
                
                  <a href="/shop/lokit" class="btn rounded px-4 mx-auto mb-4 mt-4" style="background-color: #F49122;color:white;">ota selvää</a>
                  </div> 
                  
       
                  
              </div>
              </div>
          </div>
          
         
      </div>
  </div>
</div>




<div class="container-fluid d-flex justify-content-center align-items-center text-center text-uppercase d-sm-none d-md-none">
   <div class="border-bottom" style="width: 20px;heigth:5px;background-color:#F49122;"></div>
    <h2 class="" style="color: #F49122">Kontti, polttopuut asiantuntija se on</h2>
</div>
<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0 d-md-none d-sm-none">
  <div class="container py-5 pt-lg-0">
      <div class="row gx-0">
          <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
              <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                  <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                      <i class="fa fa-users text-primary"></i>
                  </div>
                  <div class="ps-4">
                      <h5 class="text-white mb-0">Tyytyväisiä asiakkaita</h5>
                      <h1 class="text-white mb-0" data-toggle="counter-up">8234555</h1>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
              <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                  <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                     <img src="/images/porte-conteneurs.png" alt="">
                  </div>
                  <div class="ps-4">
                      <h5 class="text-primary mb-0">kontti myyty</h5>
                      <h1 class="mb-0" data-toggle="counter-up">10852666</h1>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
              <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                  <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                      <img src="/images/charpente.png" alt="">
                  </div>
                  <div class="ps-4">
                      <h5 class="text-white mb-0">tonnia puuta,myyty</h5>
                      <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<style>
  .kk1
  {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 70vh;
    background: #0000;
  }
  .box
  {
    height: 200px;
    width: 200px;
    transform-style: preserve-3d;
    animation: animate 20s infinite;
  }
  @keyframes animate
  {
    0%
    {
      transform:  perspective(1000px) rotateY(0deg);
    }

    100%
    {
      transform:  perspective(1000px) rotateY(360deg);
    }
  }
  .box span
  {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    transform-origin: center;
    transform-style: preserve-3d;
    transform: rotateY(calc(var(--i) * 45deg)) translateZ(400px);
    -webkit-box-reflect: :below 0px linear-gradient(transparent,transparent,#0004);
  }
  .box span img 
  {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>
<div class="container-fluid  d-flex justify-content-center align-items-center text-center text-uppercase mb-2 mt-2">
  <div > <h2 class="" style="color: #F49122">Saavutuksemme</h2></div>
 
  
</div>

<div class="kk1 d-none d-md-flex d-sm-flex">
  <div class="box">
    <span style="--i:1"><img src="/images/ann1.jpg" alt=""></span>
    <span style="--i:2"><img src="/images/an2.jpg" alt=""></span>
    <span style="--i:3"><img src="/images/an3.jpg" alt=""></span>
    <span style="--i:4"><img src="/images/an4.jpg" alt=""></span>
    <span style="--i:5"><img src="/images/an6.jpg" alt=""></span>
    <span style="--i:6"><img src="/images/an9.jpg" alt=""></span>
    <span style="--i:7"><img src="/images/an7.jpg" alt=""></span>
    <span style="--i:8"><img src="/images/an8.jpg" alt=""></span>
    
  </div>
</div>
<style>
  .kk2
  {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 50vh;
    background: #0000;
  }
  .box1
  {
    height: 200px;
    width: 200px;
    transform-style: preserve-3d;
    animation: animates 20s infinite;
  }
  @keyframes animates
  {
    0%
    {
      transform:  perspective(1000px) rotateY(0deg);
    }

    100%
    {
      transform:  perspective(1000px) rotateY(360deg);
    }
  }
  .box1 span
  {
    position: absolute;
    top:0;
    left: 0;
    width: 60%;
    height: 60%;
    transform-origin: center;
    transform-style: preserve-3d;
    transform: rotateY(calc(var(--i) * 45deg)) translateZ(200px);
    -webkit-box-reflect: :below 0px linear-gradient(transparent,transparent,#0004);
  }
  .box1 span img 
  {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>

<div class="kk2  d-md-none d-sm-none">
  <div class="box1">
    <span style="--i:1"><img src="/images/ann1.jpg" alt=""></span>
    <span style="--i:2"><img src="/images/an2.jpg" alt=""></span>
    <span style="--i:3"><img src="/images/an3.jpg" alt=""></span>
    <span style="--i:4"><img src="/images/an4.jpg" alt=""></span>
    <span style="--i:5"><img src="/images/an6.jpg" alt=""></span>
    <span style="--i:6"><img src="/images/an9.jpg" alt=""></span>
    <span style="--i:7"><img src="/images/an7.jpg" alt=""></span>
    <span style="--i:8"><img src="/images/an8.jpg" alt=""></span>
    
  </div>
</div>
</div>
<!-- Facts Start -->

<div class="container-fluid  d-flex justify-content-center align-items-center text-center text-uppercase mb-2 mt-2">
  <div > <h2 class="" style="color: #000">Meidän kumppanimme</h2></div>

  
 
  
</div>
<div class="container">
  <div class="d-flex flex-wrap">

    <div>
      <h3>Työskentelemme parhaiden kumppaneiden kanssa</h3>
      <p class="">
        Teollisuushuippukokouksen liittolaisena
        Group Dhole on sitoutunut tarjoamaan sinulle parasta.
        tavoitteesi kestää
        Juurista ja kukoistaa enemmän kuin koskaan ennen.
        Kiitos avantgarde-asiantuntemuksemme ja omistautumisemme,
        olemme valmiita auttamaan sinua rohkeimpien projektiesi toteuttamisessa.
        Rakennamme yhdessä menestystäsi ja vaalimme kukoistavaa tulevaisuutta.

      </p>
    </div>
    <div class="d-flex flex-row flex-wrap align-items-center justify-content-center">
      
      <div class="mt-2 mb-2" ><img src="images/logo25.png" alt="" class="img-fluid" style="height:100px;"></div>
      
      <div class="mt-2 mb-2 ml-2 mr-2" ><img src="images/logo7.png"  alt=""  class="img-fluid" style="heigth:100px;"></div>
      <div class="mt-2 mb-2" ><img src="images/logo8.png" alt="" class="img-fluid" style="height:100px;"></div>
      <div class="mt-2 mb-2" ><img src="images/logo9.png" alt="" class="img-fluid" style="height:80px;"></div>
      <div class="mt-2 mb-2" ><img src="images/logo10.png" alt="" class="img-fluid" style="height:80px;"></div>
    
    </div>

  </div>
</div>
</div>
</div>


   
    @include('Group_Dhole.footer')
 
</body>
</html>
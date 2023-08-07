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
        <div class="spinner"></div>
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
                  
                    <a href="/shop_bois" class="nav-item nav-link" style="font-size: 16px;">Polttopuukauppa</a>
                    <a href="/heistä" class="nav-item nav-link active" style="font-size: 16px;">Noin</a>
                  
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

        .bg-header4
        {
            background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(../images/xc1.jpg) center center no-repeat;
            background-size: cover;
        }

        </style>

        <div class="container-fluid bg-primary py-5 bg-header4" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Meistä</h1>
                    <a href="" class="h5 text-white">KOTI</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Noin</a>
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


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Meistä</h5>
                        <h1 class="mb-0">Paras kontti- ja polttopuun hankintaratkaisu 10 vuoden kokemuksella</h1>
                    </div>
                    <p class="mb-4">
                        Alusta alkaen sitoutumisemme huippuosaamiseen ja luottamukseen on ollut prioriteettimme. Pyrimme joka päivä vastaamaan tarpeisiisi ja ylittämään odotuksesi.

Uskomme läpinäkyvyyteen ja avoimeen viestintään asiakkaidemme kanssa. Tyytyväisyytesi on suurin palkintomme.
                    </p>
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
                    <a href="/ottaa_yhteyttä" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">ota meihin yhteyttä</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="images/conf4.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <div class="container justify-content-center  ">
        <h5>
            Group-Dhole on vuosikymmenen ajan sitoutunut tarjoamaan asiakkaillemme poikkeuksellisen palvelukokemuksen, nopean toimituksen ja vertaansa vailla olevan asiakastuen. Sitoutumisemme asiakkaiden luottamukseen ja tyytyväisyyteen on ollut menestyksemme ja jatkuvan kasvumme kulmakivi. Sallikaa meidän esitellä teille matkamme näiden 10 vuoden aikana, jota leimaavat kiinteät arvot ja horjumaton omistautuminen.
            <ul>
                <li> <span class="text-primary">Nopea ja luotettava toimitus:</span>
                    Group-Dhole on ansainnut vertaansa vailla olevan maineen sitoutumisestaan ​​nopeaan ja luotettavaan toimitukseen. Olemme perustaneet vakiintuneen logistiikkaverkoston ja strategisia kumppanuuksia varmistaaksemme, että tuotteesi saapuvat kotiovellesi ajoissa tinkimättä toimitettujen tuotteiden laadusta ja eheydestä.

                </li>
                <li> <span class="text-primary"> Poikkeuksellinen asiakaspalvelu: </span>
                    Asiakaspalvelun ammattilaisten tiimimme on käytettävissäsi auttamaan sinua ja vastaamaan kysymyksiisi 24/7. Tarvitsetpa apua ennen ostoa, sen aikana tai sen jälkeen, olemme valmiina tukemaan sinua kaikissa vaiheissa. Tyytyväisyytesi on meille tärkeintä.
  
                </li>
                <li> <span class="text-primary">   Vaivaton hyvitys- ja palautuskäytäntö:  </span>
                    Group-Dholessa uskomme läpinäkyvyyteen ja yksinkertaisuuteen. Jos sinulla on ongelmia tilauksen kanssa, vaivaton hyvitys- ja palautuskäytäntömme takaavat huolettoman ostokokemuksen. Pyrimme käsittelemään kaikki hyvitys- tai vaihtotapaukset nopeasti ja tehokkaasti ehtojemme mukaisesti.

                </li>
                <li> <span class="text-primary"> Poikkeuksellinen asiakaspalvelu: </span>
                    Jatkuva innovaatio: Droup-Dhole on vuosien mittaan ylläpitänyt innovaatiohenkeä ja mukautumista asiakkaidemme muuttuviin tarpeisiin. Pyrimme jatkuvasti parantamaan palveluitamme, ottamaan käyttöön uusia teknologioita ja toimittamaan tuotteitamme markkinoille.
   
                </li>
                <li> <span class="text-primary">  Vankka maine:  </span>
                    Maineemme luottamuksesta ja rehellisyydestä on ansainnut meille toistuvien asiakkaidemme uskollisuuden. Olemme ylpeitä asiakkaidemme saamasta arvostuksesta ja olemme sitoutuneet ylläpitämään tätä moitteetonta mainetta.

                </li>
                <li> <span class="text-primary"> Sitoutuminen asiakastyytyväisyyteen: </span>
                    Menestyksemme näiden 10 vuoden aikana on täysin asiakkaidemme ansiota, jotka ovat luottaneet meihin. Olemme päättäneet ylittää heidän odotuksensa ja tarjota erinomaista palvelua ja tuotteita tulevina vuosina.
   
                </li>

                
                        
          </ul>

          <div class="mt-2">
            
          <p>

            Yhteenvetona voidaan todeta, että Group-Dhole on rakentanut maineensa luotettavana brändinä 10 vuoden kokemuksella nopeasta toimituksesta, esimerkillisestä asiakaspalvelusta ja vaivattomasta hyvityskäytännöstä. Kiitämme teitä jatkuvasta tuestanne ja odotamme voivamme palvella teitä samalla sitoutuneella
             ja intohimolla tulevina vuosina. Luota Group-Dholeen, koska olemme täällä sinua varten aina!

          </p>
          </div>

        </h5>
    </div>


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="">
                <h5 class="fw-bold text-primary text-uppercase">RYHMÄN JÄSENET</h5>
                <p class="mb-0">
                    Tiimimme on sitoutunut rakkaudella, intohimolla ja omistautumisella teidän puolellenne, rakkaat asiakkaat. Jokaista jäsentä ohjaa aito intohimo toimintaamme kohtaan, ja päätavoitteemme on tarjota sinulle poikkeuksellista palvelua ja unohtumaton asiakaskokemus.

Uskomme vahvasti sitoutumisen arvoon asiakkaillemme. Pyrimme joka päivä rakentamaan kanssasi vahvoja suhteita, ymmärtämään tarpeitasi ja ylittämään odotuksesi. Tyytyväisyytesi on suurin palkintomme, ja teemme kaikkemme tarjotaksemme sinulle henkilökohtaista ja huomaavaista palvelua.

Uskomme, että työhön panemamme rakkaus ja intohimo paistaa läpi jokaisessa vuorovaikutuksessa kanssasi. Omistautumisemme tyytyväisyytesi saa meidät jatkuvasti parantamaan ja tarjoamaan ylivoimaisia ​​tuotteita ja palveluita.

Voit luottaa siihen, että tiimimme on vierelläsi joka vaiheessa kanssamme. Luottamuksesi on arvokasta, ja meillä on kunnia, että voimme palvella sinua rakkaudella, intohimolla ja omistautumalla.

<span class="text-primary">Group-Dhole</span> -tiimi
                </p>
            </div>
                
            
        </div>
    </div>
    <!-- Team End -->

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
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

    <style>
       .bg-header3 {
    background: url('../images/cc12.jpg') center center no-repeat;
    background-size: cover;
} 
    </style>

 
    <div class="container-fluid bg-primary py-5 bg-header3" style="">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center text-white">
                <p style="font-size: 20px;">Group-Dhole, luotettava lähde laadukkaille konteille ja lämmityspuulle.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4 d-flex justify-content-center ">
       
        <h5> on luottamuksen ja ammattitaidon ruumiillistuma. Sitoutumisemme laatuun ja asiakastyytyväisyyteen on horjumatonta. Pidämme kunnia-asiana tarjota huippulaatuisia tuotteita ja palveluita sovittuja määräaikoja noudattaen. Tarjoamamme tiimi on aina valmis vastaamaan erityistarpeisiisi ja toivottamaan sinut tervetulleeksi
        Droup-Dhole on vuosikymmenen ajan sitoutunut tarjoamaan asiakkaillemme poikkeuksellisen palvelukokemuksen, nopean toimituksen ja vertaansa vailla olevan asiakastuen. Sitoutumisemme asiakkaiden luottamukseen ja tyytyväisyyteen on ollut menestyksemme ja jatkuvan kasvumme kulmakivi.
        </h5>
    </div>
    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
          <div class="text-center pb-2">
            <p class="section-title px-5">
              <h1 class="px-2">Asiakkaamme</h1>
            </p>
            <h3 class="mb-4">Onnellisia, he suosittelivat meitä ja päättivät todistaa, GROUP-DHOLE kiittää heitä jälleen..</h3>
          </div>
          <div class="row">
            <div class="col-lg-4 mb-5">
              <div class="card border-0 bg-light shadow-sm pb-2">
                <div style="max-"><img class="card-img-top mb-2" src="images/v4.jpg" alt="" style="height:650px;"  /></div>
                <div class="card-body text-center">
                  <h4 class="card-title">Osta 40 jalan kontti </h4>
                  <p class="card-text">
                    Olin vaikuttunut GROUP-DHOLE:n palvelun laadusta. Palvelu oli nopeaa ja ystävällistä ja toimitus toimitettiin luvatussa ajassa. Suosittelen lämpimästi heidän palveluaan!
                     
                  </p>
                </div>
                <div class="card-footer bg-transparent py-4 px-5">
                  <div class="row border-bottom">
                    <div class="col-6 py-1 text-right border-right">
                      <strong>Arvon herra</strong>
                    </div>
                    <div class="col-6 py-1">Benjamin Anderson</div>
                  </div>
                  <div class="row border-bottom">
                    <div class="col-6 py-1 text-right border-right">
                      <strong>Ostot</strong>
                    </div>
                    <div class="col-6 py-1">40 jalan kontti</div>
                  </div>
                  <div class="row border-bottom">
                    <div class="col-6 py-1 text-right border-right">
                      <strong>Määräaika</strong>
                    </div>
                    <div class="col-6 py-1">5 päivää</div>
                  </div>
                 
                </div>
                <a href="" class="btn rounded px-4 mx-auto mb-4" style="background-color: #F49122;color:white;">Participer</a>
              </div>
            </div>
            <div class="col-lg-4 mb-5">
              <div class="card border-0 bg-light shadow-sm pb-2">
                <img class="card-img-top mb-2" src="images/v1.jpg" alt="" />
                <div class="card-body text-center">
                  <h4 class="card-title">Osta 20 jalan kontti</h4>
                  <p class="card-text">
                    GROUP-DHOLE yllätti minut iloisesti nopealla palvelullaan ja huomaavaisella palvelullaan. Toimitus tuli ajallaan ja tuotteet olivat laadukkaita. Suosittelen tätä yritystä lämpimästi
                  </p>
                </div>
                <div class="card-footer bg-transparent py-4 px-5">
                  <div class="row border-bottom">
                    <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Arvon herra</strong>
                        </div>
                        <div class="col-6 py-1">Yrjö Korhonen</div>
                       </div>
                       <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Ostot</strong>
                        </div>
                        <div class="col-6 py-1">20 jalan kontti * 34 </div>
                       </div>
                       <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Määräaika</strong>
                        </div>
                        <div class="col-6 py-1">15 päivää</div>
                        </div>
                  </div>
                  </div>
                
               
                <a href="" class="btn rounded px-4 mx-auto mb-4" style="background-color: #F49122;color:white;">Je faire ma demande</a>
            </div>
             
            </div>
            <div class="col-lg-4 mb-5">
              <div class="card border-0 bg-light shadow-sm pb-2">
                <div class=" d-flex rounded-circle " style="height:600px;">
                    <img class="card-img-top mb-2" src="images/v2.jpg" alt="" />
                </div>
                <div class="card-body text-center">
                  <h4 class="card-title">Osta muunnossäiliö</h4>
                  <p class="card-text">

                    Olin iloinen GROUP-DHOLE:n toimistoon varustetun kontin ostosta. Heidän ammattitaitoinen tiiminsä teki huomattavaa työtä ja lopputulos ylitti odotukseni.
                     
                  </p>
                </div>
                <div class="card-footer bg-transparent py-4 px-5">
                  <div class="row border-bottom">

                    <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Rouva</strong>
                        </div>
                        <div class="col-6 py-1">Venla  Koskinen</div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Ostot</strong>
                        </div>
                        <div class="col-6 py-1">kalustettu toimisto </div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Määräaika</strong>
                        </div>
                        <div class="col-6 py-1">7 päivää</div>
                      </div>


                   </div>
                </div>
                <a href="" class="btn rounded  px-4 mx-auto mb-4" style="background-color: #F49122;color:white;">Je faire ma demande</a>
              </div>
            </div>
          </div>
        </div>
     </div>
     <div class="container-fluid  justify-content-center align-items-center">
        <h5>
            Olemme luotettavia, ja kehotamme sinua tekemään tilauksesi tai kertomaan meille erilaisista ehdotuksistasi.

Meille luottamus on kaiken toimintamme ytimessä. Sitoutumisemme laadukkaaseen palveluun, luotettavaan toimitukseen ja poikkeukselliseen asiakastukeen on horjumaton. Teemme parhaamme tarjotaksemme sinulle saumattoman ostokokemuksen ja vastataksemme tarpeisiisi parhaalla mahdollisella tavalla.

Tilauksesi käsitellään erittäin huolellisesti ja tiimimme on aina valmis auttamaan sinua tarvittaessa. Uskomme läpinäkyvyyteen ja avoimeen viestintään asiakkaidemme kanssa, koska tyytyväisyytesi on meille tärkeintä.

Lisäksi arvostamme suuresti ehdotuksiasi ja palautettasi. Mielipiteesi on meille arvokas, koska sen avulla voimme jatkuvasti kehittyä. Olemme avoimia ideoillesi ja kommenteillesi, koska ne auttavat meitä muokkaamaan tuotteitamme ja palvelujamme mieltymystesi ja tarpeidesi mukaan.

Joten voit vapaasti tehdä tilauksesi luottavaisin mielin ja kertoa meille ehdotuksesi. Olemme täällä tarjotaksemme sinulle laadukkaan kokemuksen ja täyttääksemme kaikki odotuksesi. Kiitos luottamuksestasi ja jatkuvasta tuestanne. Odotamme innolla palvelemaan sinua ja tyydyttämään sinua täysin!
        </h5>
     </div>
     




    @include('Group_Dhole.footer')
    
</body>
</html>
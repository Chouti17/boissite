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
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-20 flex-column ">
               
                <div class="container mt-5">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                   
                                    <h2 class="m-t-20">Lasku</h2>
                                    <p>TIEDOTUSHENKILÖSTÖ</p>
                                    
                                    <form method="post" action="{{route('achats')}}">
                                        @csrf
                                        @method('post')
                                        <div class="form-group mt-2 mt-2">
                                            <label class="font-weight-semibold" for="nimi">Nimi</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" name="nom" class="form-control" 
                                                    placeholder="Nimi">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="font-weight-semibold" for="nimi">Etunimi</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" name="prenom" class="form-control" 
                                                    placeholder="Käyttäjätunnus">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="font-weight-semibold" for="email">Email</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" name="email" class="form-control" id="email"
                                                    placeholder="Käyttäjätunnus">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="font-weight-semibold" for="email">Puhelin</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="telephone" name="telephone" class="form-control" id="email"
                                                    placeholder="Käyttäjätunnus">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="font-weight-semibold" for="email">Toimitusosoite</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="addresse" name="addresse" class="form-control" id="email"
                                                    placeholder="Käyttäjätunnus">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2 flex flex-col">
                                            <label class="font-weight-semibold form-label"
                                                for="civilite">Civility</label>
                                            <select class="form-select border-2 border-indigo-200 rounded-lg py-2 "
                                                required name="civilite" id="civilite"
                                                aria-label="Default select example" >

                                                <option value="Masculin">Uros</option>
                                                <option value="Féminin">Naisellinen</option>
                                            </select>
                                            

                                        </div>
                                        <div class="form-group mt-2 flex flex-col">
                                            <label for="pays"
                                                class="form-label font-weight-semibold ">PAYS</label>
                                            <select class="form-select border-2 border-indigo-200 rounded-lg py-2"
                                                required id="pays" name="pays"
                                                aria-label="Default select example" value={{ old('pays') }}>

                                                <option value="France">France </option>

                                               ption value="Algerie">Algerie </option>
                                                <option value="Allemagne">Allemagne </option>
                                                <option value="Andorre">Andorre </option>
                                                <option value="Angola">Angola </option>
                                               ion value="Belgique">Belgique </option>
                                                <option value="Belize">Belize </option>
                                               option value="Burundi">Burundi </option>

                                              tion value="Finlande">Finlande </option>
                                                <option value="France">France </option>

                                               e="Grece">Grece </option>
                                                <option value="Grenade">Grenade </option>
                                                <option value="Groenland">Groenland </option>
                                                <option value="Guadeloupe">Guadeloupe </option>
                                                <option value="Guam">Guam </option>
                                               on value="Hongrie">Hongrie </option>

                                               ion value="Koweit">Koweit </option>

                                               ion value="Lituanie">Lituanie </option>
                                                <option value="Luxembourg">Luxembourg </option>
                                                <option value="Lybie">Lybie </option>

                                                <option value="Macao">Macao </option>
                                                <option value="Macedoine">Macedoine </option>
                                                <option value="Madagascar">Madagascar </option>
                                             on value="Mongolie">Mongolie </option>
                                                <option value="Montserrat">Montserrat </option>
                                                <option value="Mozambique">Mozambique </option>

                                             
                                                <option value="Pakistan">Pakistan </option>
                                                <option value="Palau">Palau </option>
                                                <option value="Palestine">Palestine </option>
                                                <option value="Panama">Panama </option>
                                                <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee
                                                </option>
                                                <option value="Paraguay">Paraguay </option>
                                                <option value="Pays_Bas">Pays_Bas </option>
                                                <option value="Perou">Perou </option>
                                                <option value="Philippines">Philippines </option>
                                                <option value="Pologne">Pologne </option>
                                                <option value="Polynesie">Polynesie </option>
                                                <option value="Porto_Rico">Porto_Rico </option>
                                                <option value="Portugal">Portugal </option>

                                                <option value="Qatar">Qatar </option>

                                                <option value="Republique_Dominicaine">Republique_Dominicaine
                                                </option>
                                                <option value="Republique_Tcheque">Republique_Tcheque </option>
                                                <option value="Reunion">Reunion </option>
                                                <option value="Roumanie">Roumanie </option>
                                                <option value="Royaume_Uni">Royaume_Uni </option>
                                                <option value="Russie">Russie </option>
                                               tion value="Samoa_Occidentales">Samoa_Occidentales</option>
                                             ion value="Soudan">Soudan </option>
                                                <option value="Sri_Lanka">Sri_Lanka </option>
                                                <option value="Suede">Suede </option>
                                                <option value="Suisse">Suisse </option>
                                                <option value="Surinam">Surinam </option>
                                            ion value="Timor_Oriental">Timor_Oriental </option>
                                                <option value="Togo">Togo </option>
                                                <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                           
                                            </select>
                                            
                                        </div>

                                       
                                        <div class="form-group mt-2 mt-2">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                
                                                <button type="submit" class="btn btn-primary">maksu</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-6 d-none d-md-block">
                            <img class="img-fluid" src="assets/images/others/login-2.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
</body>

</html>

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
                                   
                                    <h2 class="m-t-20">Admin</h2>
                                    <p>Connexion</p>
                                    
                                    <form method="post" action="{{route('achatss')}}">
                                        @csrf
                                        @method('post')
                                        <div class="form-group mt-2 mt-2">
                                            <label class="font-weight-semibold" for="nimi">Email</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" name="nom" class="form-control" 
                                                    placeholder="email">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="font-weight-semibold" for="nimi">pass</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" name="pass" class="form-control" 
                                                    placeholder="pass">
                                            </div>
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

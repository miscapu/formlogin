<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form</title>
    <!--CSS principal-->
    <link rel="stylesheet" href="style.css" crossorigin="anonymous">
    <!--End CSS Principal-->
    <!--CSS Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--End CSS Bootstrap-->
    <!--JS Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--End JS Bootstrap-->
</head>

<body>

<!--Login Form HTML -->
<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Login Now</h2>
                <form class="login-form">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                        <input type="text" class="form-control" placeholder="">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                        <input type="password" class="form-control" placeholder="">
                    </div>


                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            <small>Remember Me</small>
                        </label>
                        <button type="submit" class="btn btn-login float-right">Submit</button>
                    </div>

                </form>
                <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Grafreez.com</a></div>
            </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="ImagensProjeto/1-5472x3648px.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>Miguel Santisteban</h2>
                                    <p>Programador Innovador</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="ImagensProjeto/2-5472x3648px.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>Miguel Santisteban</h2>
                                    <p>Divertido y con ganas de Conocer Más!</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="ImagensProjeto/3-%205472x3648px.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>Miguel Santisteban</h2>
                                    <p>Colaborador Entusiasta con mucho ánimo de ayudar en muchos Proyectos!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>
<!--End Login Form HTML-->

</body>
</html>

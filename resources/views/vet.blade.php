<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Publicidad</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

 
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}"><span class="flaticon-pawprint-1 mr-2"></span>Adopets</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
    </button>
	<div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item "><a href="{{ route('index') }}" class="nav-link">Home</a></li>
        <li class="nav-item "><a href="{{ route('about') }}" class="nav-link">Preguntas Frecuentes</a></li>
        <li class="nav-item active"><a href="{{ route('vet') }}" class="nav-link">Publicidad</a></li>
        <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Servicios</a></li>
        <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link">Mascotas</a></li>
        <li class="nav-item "><a href="{{ route('blog') }}" class="nav-link">Adopciones Exitosas</a></li>
        <li class="nav-item "><a href="{{ route('contact') }}" class="nav-link">Contactanos</a></li></li>
		@auth
    <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">admin</a></li>
@endauth

@guest
    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
    @if (Route::has('register'))
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registrate</a></li>
    @endif
@endguest


    </ul>
</div>

</div>
</nav>
<!-- END nav -->

<!-- resources/views/vet.blade.php -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2">
                    <span class="mr-2"><a href="{{ route('index') }}">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Publicidad <i class="ion-ios-arrow-forward"></i></span>
                </p>
                <h1 class="mb-0 bread">Apartado de Publicidad</h1>
				<a href="{{ route('publicidad.create') }}" class="btn btn-primary">Crear Publicidad</a>
            </div>
        </div>
    </div>
</section>



<!-- Mostrar lista de publicidades -->


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($publicidad as $pub)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url('{{ asset('storage/' . $pub->imagen) }}');"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>{{ $pub->nombre }}</h3>
                            <span class="position mb-2">{{ $pub->descripcion }}</span>
                            <div class="faded">
                                <p>Teléfono: {{ $pub->telefono }}</p>
                               
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate">
                                        <a href="#" class="d-flex align-items-center justify-content-center">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="ftco-animate">
                                        <a href="#" class="d-flex align-items-center justify-content-center">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li class="ftco-animate">
                                        <a href="#" class="d-flex align-items-center justify-content-center">
                                            <span class="fa fa-google"></span>
                                        </a>
                                    </li>
                                    <li class="ftco-animate">
                                        <a href="#" class="d-flex align-items-center justify-content-center">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Mostrar lista de publicidades -->
					
    

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


    
  </body>
</html>
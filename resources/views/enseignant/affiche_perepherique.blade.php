
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Isi Kef</title>
    <link href="logoisikef.jpg" rel="icon">
    <link href="logoisikef.jpg" rel="apple-touch-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   <!-- feedback -->
    <script src="{{ asset('vendor/kustomer/js/kustomer.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2 bg-dark" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong class="text-white">Phone:</strong> <a href="tel://#">(+216) 78 201 056 </a></span>
        
            </p>
          </div>
         
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{route('declaration')}}" class="text-black h2 mb-0">Isi Kef<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li>
                </li>
                <li class="has-children">
                  <a  class="nav-link">Laboratoires</a>
                  <ul class="dropdown">
                    @foreach($labo as $l )
                    <li><a href="{{route('labo', $l->id)}}">{{$l->nom_labo}}</a></li>
                @endforeach
                  </ul>
                </li>
                <li >

<a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
           Message
            <span class="badge badge-danger rounded-circle noti-icon-badge">{{$notif}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

<!-- item-->
<div class="dropdown-item noti-title">
<h5 class="m-0">
<span class="float-right">

</span>Notifications
</h5>
</div>

<div class="slimscroll noti-scroll">

<!-- item-->
@foreach ($tt as $aa)
<a href="#" class="dropdown-item notify-item">
<div class="notify-icon">
<p class="notify-details">le technicien  {{$aa->technicien}} a corriger {{$aa->type}} <br> dans {{$aa->nom_labo}}   en  {{$aa->poste->nom_poste}} qui est déclarer par {{$aa->Nom_enseignant}} </p>


<p class="text-muted mb-0 user-msg">
<strong>Date de réparation: {{$aa->updated_at}} </strong>
</p>
</a>

@endforeach


</div>

<!-- All-->


</div>

</li>
                <li>
                <div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
  {{ Auth::user()->name }}
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
  <li><a class="dropdown-item" href="{{route('compte')}}" role="button">Modifier profile</a></li>
    <li><a class="dropdown-item" href="{{route('chnager_mdp')}}" role="button">Changer mot de passe</a></li>

    <li><a class="dropdown-item"   onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" href="{{route('logout')}}" role="button">deconnecter</a></li>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
  </ul>
</div>
</li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>


    <div class="site-blocks-cover overlay" style="background-image: url(images/laboisi.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Bienvenue à <span class="typed-words"></span></h1>
    
              </div>
        


</div>

          </div>
        </div>
      </div>
    </div>  
 <!-- date now  -->
<?php
$mytime = Carbon\Carbon::now();
date_modify($mytime, '+1 hour');
?>

    

    <section class="site-section" id="work-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            
        @if (session('modifiee'))
        <div class="alert alert-success">
        {{session('modifiee')}}

        </div>
        @endif
            <h2 class="text-black h1 site-section-heading text-center">{{$ppp->nom_poste}}</h2>
<center><h6 class="text-danger" >NB: Cliquer sur le button actif pour declarer la panne</h6></center>
       </div>
       
      

        </div>
      </div>
    
      <div class="container-fluid">
      @include('kustomer::kustomer')

        <div class="row">
        @foreach($ppp->perepherique as $bl)
       

          <div class="col-md-6 col-lg-4">
        
            <a  class="media-1">
         
              <img src="{{asset('storage/'.$bl->image)}}"   width="230px" height="230px" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2 >{{$bl->type}}</h2>
                <br>
                @if ($bl->etat == 'actif')
                <span class="category">
    
                <form action="{{route('panne')}}" method="post" >
<input type="hidden" name="_token" value="{{ Session::token() }}">
@foreach($labo as $l )
               
@if ($l->id == $bl->poste->laboratoire_id )
  


<input type="hidden" name="nom_labo" value="{{$l->nom_labo}}">
@endif
@endforeach
 <input type="hidden" name="technicien" value="">
 <input type="hidden" name="id" value="{{ $bl->id }}">
 <input type="hidden" name="etat" value="panne">
 <input type="hidden" name="Nom_enseignant" value="{{ Auth::user()->name }}">
 <input type="hidden" name="date" value="{{ $mytime->toDateTimeString() }}">

@if ($bl->technicien == "" )
<button type="submit" class="btn btn-success pull-right">{{$bl->etat}} </button>
@else 
<button type="submit" class="btn btn-success pull-right">{{$bl->etat}} en {{$bl->updated_at}} par {{$bl->technicien}}</button>
@endif
</form>
            </span>
            @else
            <span class="category">
    
    <button type="button" class="btn btn-danger">panne</button>
</span>
@endif
              </div>
            </a>
          </div>
          @endforeach
          
       
         
        </div>
      </div>

    </section>

    <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["ISI Kef"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  


  </body>
</html>
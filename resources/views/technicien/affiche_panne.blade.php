
    <head>
        <meta charset="utf-8" />
        <title>Technicien</title>
        <link href="{{ asset('storage/'.Auth::user()->image )}}" rel="icon">
    <link href="{{ asset('storage/'.Auth::user()->image )}}" rel="apple-touch-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="d-none d-sm-block">
                <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
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
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon">
                                    <p class="notify-details">L'enseignant {{$aa->Nom_enseignant}} a declarer une panne <br> dans {{$aa->nom_labo}} en {{$aa->poste->nom_poste}}: {{$aa->type}}  </p>

                                    
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Date déclaration panne: {{$aa->date_panne}}</small>
                                    </p>
                                </a>
                                

@endforeach
                        
                            </div>

                            <!-- All-->
                            <a href="{{route('affiche_panne')}}" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>
            @include('ingenieur.info_profile.index')

                               
                          
                    

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                   
                   
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>        
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="{{ asset('storage/'.Auth::user()->image )}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg">
                        <div class="dropdown">
                            <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                           
                           
                        </div >
                        <p class="text-muted">{{ Auth::user()->role }}</p>
                        
                    </div>

                    <!--- Sidemenu -->
                  
                    <div id="sidebar-menu">

<ul class="metismenu" id="side-menu">

    
 
    <li   >
        <a href="{{route('ingenieur')}}">
        <i class="fas fa-home"></i>
                    <span> Acceuil </span>
        </a>
    </li>
  
    <li>
        <a href="{{route('affiche_panne')}}">
            <i class="fas fa-list-alt "></i>
            <span> Listes des pannes </span>
        </a>
    </li>
    <li>
        <a href="{{route('commentaire')}}">
            <i class="fas fa-list-alt "></i>
            <span> Avis </span>
        </a>
    </li>
    
</ul>

</div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                <?php
$mytime = Carbon\Carbon::now();
date_modify($mytime, '+1 hour');
?>
                    <!-- Start Content-->
                    <div class="container-fluid">
                  
                <h2>Liste des pannes</h2>
                      
                        @if (session('modifiee'))
        <div class="alert alert-success">
        {{session('modifiee')}}

        </div>
        @endif
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Type</th>
      <th scope="col">Etat</th>
      <th scope="col">Nom enseignant</th>
      <th scope="col">Date panne</th>
      <th scope="col">Nom laboratoire</th>
      <th scope="col">Nom poste </th>
      <th scope="col">action </th>

    </tr>
  </thead>
  <tbody>
  @foreach ($bb as $l)
              <tr>
                  <td> {{$l->id}}</td>
                  <td> {{$l->type}}</td>
                  <td> {{$l->etat}}</td>
                  <td> {{$l->Nom_enseignant}}</td>
                  <td> {{$l->date_panne}}</td>
                  <td> {{$l->nom_labo}}</td>
                  <td> {{$l->poste->nom_poste}}</td>
             
                  <td>

                  <form action="{{route('corrige')}}" method="post"   onclick="return confirm('Etes-vous sur ?');">
<input type="hidden" name="_token" value="{{ Session::token() }}">
<input type="hidden" name="id" value="{{ $l->id }}">
              
<input type="hidden" name="etat_hist" value="panne">

<input type="hidden" name="type_hist" value="{{$l->type}}">
<input type="hidden" name="nom_post_hist" value="{{$l->poste->nom_poste}}">
<input type="hidden" name="nom_labo_hist" value="{{$l->nom_labo}}">
<input type="hidden" name="date_panne_hist" value="{{$l->date_panne}}">
<input type="hidden" name="date_reparation" value="{{ $mytime->toDateTimeString() }}">
<input type="hidden" name="nom_enseignant_hist" value="{{$l->Nom_enseignant}}">
<input type="hidden" name="date_reparation" value="{{ $mytime->toDateTimeString()}}">
<input type="hidden" name="etat" value="actif">
<input type="hidden" name="date" value="{{ $mytime->toDateTimeString() }}">
<input type="hidden" name="nom_technicien" value="{{ Auth::user()->name }}">
<input type="hidden" name="Nom_technicien_hist" value="{{ Auth::user()->name }}">



<button type="submit"  style="color:green" class="fas fa-tools"></button>

</form>
                  
           




                  </td>
              </tr>

            
              @endforeach
              <ul class="list-unstyled topnav-menu  float-right mb-0">
                      
</ul>
<br>

  </tbody>
</table>

<div class="text-centre">
                {!!$bb->links()!!}

                </div>
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
               
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            
                            
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
    


        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>
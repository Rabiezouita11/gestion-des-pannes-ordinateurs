
    <head>
        <meta charset="utf-8" />
        <title>Ingénieur</title>
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
                    @include('ingenieur.menu.menu')

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

                    <!-- Start Content-->
                    <div class="container-fluid">
                  
                <h2>Historiques</h2>
              
                        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Type</th>
      <th scope="col">Etat</th>
      <th scope="col">Nom laboratoire</th>
      <th scope="col">Nom poste</th>
      <th scope="col">Date de la panne</th>
      <th scope="col">Date de la réparation</th>
      <th scope="col">Nom enseignant</th>
      <th scope="col">Nom technicien</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($hist as $l)
              <tr>
                  <td> {{$l->id}}</td>
                  <td> {{$l->type}}</td>
                  <td> {{$l->etat}}</td>
                  <td> {{$l->nom_labo}}</td>
                  <td> {{$l->nom_post}}</td>
                  <td> {{$l->date_panne}}</td>
                  <td> {{$l->date_reparation}}  </td>
                  <td> {{$l->nom_enseignant}}</td>
                  <td>{{$l->Nom_technicien}} </td>
                 

             
              </tr>

            
              @endforeach
              <ul class="list-unstyled topnav-menu  float-right mb-0">
                      
</ul>
<br>

  </tbody>
</table>

<div class="text-centre">
                {!!$hist->links()!!}

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
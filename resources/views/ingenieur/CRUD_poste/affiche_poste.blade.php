
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
                        <img src="{{ asset('storage/'.Auth::user()->image )}}" alt="user-img" title="{{ Auth::user()->name }}" class="rounded-circle img-thumbnail avatar-lg">
                        <div class="dropdown">
                            <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                           
                           
                        </div >
                        <p class="text-muted">{{ Auth::user()->role }}</p>
                        
                    </div>

                    <!--- Sidemenu -->
                    @include('ingenieur.menu.menu')

                 

                    <div class="clearfix"></div>

                </div>


            </div>
            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                  
                <h2>Liste des postes</h2>
                <center> <h3>  {{$cat->nom_labo}} </h3> </center>
                      
                @if (session('supp'))
        <div class="alert alert-danger">
        {{session('supp')}}

        </div>
        @endif    
                
                
                
                
                @if (session('success'))
        <div class="alert alert-danger">
        {{session('success')}}

        </div>
        @endif
        
        @if (session('ajoute'))
        <div class="alert alert-info">
        {{session('ajoute')}}

        </div>
        @endif

        @if (session('ajoutee'))
        <div class="alert alert-success">
        {{session('ajoutee')}}

        </div>
        @endif
        
                        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom poste</th>
      <th scope="col">Nom modéle</th>
     
    
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>

  @foreach($cat->post as $bl)
              <tr>
                  <td> {{$bl->id}}</td>
                  <td> {{$bl->nom_poste}}</td>
                  <td> {{$bl->model}}</td>
             
                  
                 
                
                  
                  <td>
                  <a href="{{ route('modif_poste', ['id' => $bl->id]) }}" style="color:green" title="Modifier" class="fas fa-edit"></a>
                  &nbsp;&nbsp;
                  
                <a  href="{{route('Supprimerposte', $bl->id)}}" style="color:red" title="Supprimer" class="far fa-trash-alt"  onclick="return confirm('Etes-vous sur ?');"></a>
                &nbsp;&nbsp;
                <a  href="{{route('peripherique', $bl->id)}}" style="color:bleu" title="Afficher les peripheriques"  class="fas fa-eye"></a>

                  </td>
                 

              </tr>

              @endforeach

              <?php
$var=$cat->id;
               ?>
              <a class="btn btn-primary" href="{{route('affiche_ajout_poste',$var)}}" role="button">Ajouter </a>
              <ul class="list-unstyled topnav-menu  float-right mb-0">
           
                      
</ul>
<br>

  </tbody>
</table>


                

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>
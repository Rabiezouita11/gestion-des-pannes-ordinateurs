<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('ingenieur')}}">Acceuil</a></li>
              <li class="breadcrumb-item"><a href="{{route('modifiercompte',['id'=>Auth::user()->id])}}">Modifier profil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('storage/'.Auth::user()->image )}}" alt="User"  width="350" >
                    <div class="mt-3">
                      <h4> {{ Auth::user()->name }}</h4>
                  
                    </div>
                  </div>
                </div>
              </div>
         
            </div>
            
        
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                @if (session('vert'))
        <div class="alert alert-success">
        {{session('vert')}}

        </div>
        @endif
        <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->id }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->email }}
                    </div>
                  </div>
                  
                  
                 
                  
                  <div class="row">
         
                </div>
              </div>
             
              
              </div>
            </div>
          </div>
        </div>
    </div>
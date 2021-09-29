
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('storage/'.Auth::user()->image )}}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                            {{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Bienvenue {{ Auth::user()->role }} !</h6>
                            </div>

                            <!-- item-->
                            <a href="{{route('compte')}}" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Mon compte</span>
                            </a>

                            <a href="{{route('chnager_mdp')}}" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Changer mot de passe</span>
                            </a>
                            <!-- item-->
                            <a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Déconnecter</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
                        
        

</div>

</li>

 
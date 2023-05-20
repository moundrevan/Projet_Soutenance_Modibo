// admin

@if(auth()->user()->is_admin == 1)
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('login') }}" class="brand-link">
            <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">APPENIABT</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('assets/dist/img/user7-128x128.jpg') }}" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('profile.index') }}"
                        class="d-block">{{ auth()->user()->prenom . '' . auth()->user()->nom }}</a>
                    {{-- <a href="#" class="d-block">Modibo</a> --}}

                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tableau de bord
                            </p>
                        </a>
                    </li>

                    {{-- @can('admin') --}}
                    <li class="nav-header">ADMINISTRATION</li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <i class=" nav-icon fas fa-user-shield"></i>
                            <p>
                                Habilitations
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="{{ route('users.index') }}" class="nav-link">
                                    <i class=" nav-icon fas fa-users-cog"></i>
                                    <p>Utilisateurs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-fingerprint"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('permissions.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-fingerprint"></i>
                                    <p>permissions</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">SCOLARITES</li>
                    <li class="nav-item">
                        <a href="{{ route('departements.index') }}" class="nav-link ">
                            <i class="nav-icon fas fas fa-home"></i>
                            <p>
                                Départements
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('classes.index') }}" class="nav-link ">
                            <i class="nav-icon fas fas fa-edit"></i>
                            <p>
                                Classes
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('promotions.index') }}" class="nav-link ">
                            <i class="nav-icon fas fas fa-table"></i>
                            <p>
                                Promotions
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cycles.index') }}" class="nav-link ">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Cycles
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('specialites.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Spécialités
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">FORMATIONS</li>
                    <li class="nav-item">
                        <a href="{{ route('modules.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Modules
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('matieres.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-list-ul"></i>
                            <p>Matières</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cours.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-exchange-alt"></i>
                            <p>
                                Cours
                            </p>
                        </a>
                    </li>

                    {{-- @endcan

            {{-- @can('etudiant') --}}
                    <li class="nav-header">EVALUATIONS</li>
                    <li class="nav-item">
                        <a href="{{ route('notes.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-coins"></i>
                            <p>
                                Notes
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rattrapages.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-coins"></i>
                            <p>
                                Rattrapages
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('releves.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Rélévés
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="nav-icon fas fa-list-ul"></i>
                            <p>
                                Réclamations
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">PARAMETRES</li>
                    <li class="nav-item">
                        <a href="https://www.eni-abt.ml/" class="nav-link" target="_blank">
                            <i class="nav-icon fas fa-info-circle"></i>
                            <p>
                                A propos
                            </p>
                        </a>
                    </li>
                    {{-- @endcan --}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                DECONNEXION
                            </p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endif

// prof

@if(auth()->user()->is_prof == 1)
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('login') }}" class="brand-link">
            <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">APPENIABT</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('assets/dist/img/user7-128x128.jpg') }}" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('profile.index') }}"
                        class="d-block">{{ auth()->user()->prenom . '' . auth()->user()->nom }}</a>
                    {{-- <a href="#" class="d-block">Modibo</a> --}}

                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tableau de bord
                            </p>
                        </a>
                    </li>
                    
                    <li class="nav-header">SCOLARITES</li>
                    <li class="nav-item">
                        <a href="{{ route('departements.index') }}" class="nav-link ">
                            <i class="nav-icon fas fas fa-home"></i>
                            <p>
                                Départements
                            </p>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="{{ route('classes.index') }}" class="nav-link ">
                            <i class="nav-icon fas fas fa-edit"></i>
                            <p>
                                Classes
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('promotions.index') }}" class="nav-link ">
                            <i class="nav-icon fas fas fa-table"></i>
                            <p>
                                Promotions
                            </p>
                        </a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a href="{{ route('cycles.index') }}" class="nav-link ">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Cycles
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('specialites.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Spécialités
                            </p>
                        </a>
                    </li> -->
                    <li class="nav-header">FORMATIONS</li>
                    <li class="nav-item">
                        <a href="{{ route('modules.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Modules
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('matieres.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-list-ul"></i>
                            <p>Matières</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cours.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-exchange-alt"></i>
                            <p>
                                Cours
                            </p>
                        </a>
                    </li>


                    <!-- <li class="nav-header">EVALUATIONS</li>
                    <li class="nav-item">
                        <a href="{{ route('notes.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-coins"></i>
                            <p>
                                Notes
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rattrapages.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-coins"></i>
                            <p>
                                Rattrapages
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('releves.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Rélévés
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="nav-icon fas fa-list-ul"></i>
                            <p>
                                Réclamations
                            </p>
                        </a>
                    </li> -->
                    <li class="nav-header">PARAMETRES</li>
                    <li class="nav-item">
                        <a href="https://www.eni-abt.ml/" class="nav-link" target="_blank">
                            <i class="nav-icon fas fa-info-circle"></i>
                            <p>
                                A propos
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                DECONNEXION
                            </p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endif

// etudiant

@if(auth()->user()->is_etudiant == 1)
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('login') }}" class="brand-link">
            <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">APPENIABT</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('assets/dist/img/user7-128x128.jpg') }}" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('profile.index') }}"
                        class="d-block">{{ auth()->user()->prenom . '' . auth()->user()->nom }}</a>
                    {{-- <a href="#" class="d-block">Modibo</a> --}}

                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tableau de bord
                            </p>
                        </a>
                    </li>

                    <!-- <li class="nav-header">SCOLARITES</li>
                    <li class="nav-item">
                        <a href="{{ route('departements.index') }}" class="nav-link ">
                            <i class="nav-icon fas fas fa-home"></i>
                            <p>
                                Départements
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('classes.index') }}" class="nav-link ">
                            <i class="nav-icon fas fas fa-edit"></i>
                            <p>
                                Classes
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('promotions.index') }}" class="nav-link ">
                            <i class="nav-icon fas fas fa-table"></i>
                            <p>
                                Promotions
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cycles.index') }}" class="nav-link ">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Cycles
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('specialites.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Spécialités
                            </p>
                        </a>
                    </li> -->
                    <li class="nav-header">FORMATIONS</li>
                    <li class="nav-item">
                        <a href="{{ route('modules.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Modules
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('matieres.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-list-ul"></i>
                            <p>Matières</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cours.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-exchange-alt"></i>
                            <p>
                                Cours
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">EVALUATIONS</li>
                    <li class="nav-item">
                        <a href="{{ route('notes.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-coins"></i>
                            <p>
                                Notes
                            </p>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="{{ route('rattrapages.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-coins"></i>
                            <p>
                                Rattrapages
                            </p>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="{{ route('releves.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Rélévés
                            </p>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="nav-icon fas fa-list-ul"></i>
                            <p>
                                Réclamations
                            </p>
                        </a>
                    </li> -->
                    <li class="nav-header">PARAMETRES</li>
                    <li class="nav-item">
                        <a href="https://www.eni-abt.ml/" class="nav-link" target="_blank">
                            <i class="nav-icon fas fa-info-circle"></i>
                            <p>
                                A propos
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                DECONNEXION
                            </p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endif


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="bg-dark">
        <div class="card-body bg-dark box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/dist/img/user7-128x128.jpg') }}"
                    alt="User profile picture">
            </div>

            <h3 class="profile-username text-center ellipsis"
                style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Modibo SAMAKE</h3>

            <p class="van text-muted text-center">Admin</p>

            <ul class="list-group bg-dark mb-3">
                <li class="list-group-item">
                    <a href="{{ route('profile.index') }}" class="d-flex align-items-center"><i
                            class="fa fa-user pr-2"></i><b>Mon profile</b> </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('change-password') }}" class="d-flex align-items-center "><i
                            class="fa fa-lock pr-2"></i><b>Mot de passe</b> </a>
                </li>
            </ul>

            <a class="btn btn-primary btn-block" href=""
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off pr-2"></i> Déconnexion
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</aside>
<!-- /.Control Sidebar -->

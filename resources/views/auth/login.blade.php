<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APPENI| Authentification</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box" style="width: 35%;">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="row-md-12 bg-info">
                <div class="card-header text-center">
                    {{-- <div class="col-md-4 h6">Ecole Nationale D'Ingénieurs Abderhamane Baba TOURE <br>(ENI -
                        ABT)</div> --}}
                    <div class="mb-0">
                        <div class="text-center">
                            <img class="img-fluid img-circle" src="{{ asset('assets/dist/img/e3.png') }}"
                                alt="User profile picture">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                {{-- <h3 class="card-header text-center"> <span class="fas fa-lock"></span> AUTHENTIFICATION</h3><br><br> --}}
                <div>
                    <div class="card-body box-profile">
                        <div class="text-center">
                            {{-- <img style="width: 200px;" class="profile-user-img img-fluid img-circle" src="{{ asset('assets/dist/img/user7-128x128.jpg') }}" alt="{{ $user->nom . ' Photo' }}"> --}}
                            <img style="width: 100px;" class="profile-user-img img-fluid img-circle"
                                src="{{ asset('assets/dist/img/auth.png') }}">

                        </div>

                        {{-- <h3 class="profile-username text-center" style="text-transform: uppercase">
                            {{ $user->prenom . '' . $user->nom }} </h3> --}}
                        {{-- <p class="text-muted text-center">{{ auth()->user()->role }}</p>  --}}
                        {{-- <p class="text-muted text-center">{{ $user->email }}</p>
                        <p class="text-muted text-center">{{ $user->telephone }}</p> --}}

                    </div>
                </div>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" placeholder="samake@gmail.com"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" placeholder="********"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <div class="icheck-primary">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                Se souvenir de moi
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info col-md-12">Connexion</button><br><br>
                        </div>
                    </div>
                    <!-- /.col -->

                </form>
                <div class="row">
                    {{-- <p class="mb-1">
                        <a href="{{ route('profile.editPassword') }}">Mot de passe oublié</a>
                    </p> --}}
                    <div class="col-md-6">
                        <a href="{{ url('change-password') }}">Mot de passe oublié</a>
                    </div>
                    <div class="col-md-6 float-right">
                        <a href="{{ route('register') }}" class="float-right">Nouveau Compte</a>
                    </div>
                    {{-- <p class="mb-0">
                        <a href="{{ route('register') }}" class="text-center">S'inscrire</a>
                    </p> --}}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
</body>

</html>

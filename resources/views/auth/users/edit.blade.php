@extends('layouts.master')
@section('title', 'Modification Utilisateur')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modification d'Utilisateur</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4>Modification Utilisateur</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('users.update', $user) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Matricule</label>
                                                    <input type="text" name="matricule" id="matricule"
                                                        class="form-control @error('matricule') is-invalid @enderror"
                                                        value="{{ $user->matricule }}" required placeholder="Matricule">
                                                    @error('matricule')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Prenom</label>
                                                    <input type="text" name="prenom" id="prenom"
                                                        class="form-control @error('prenom') is-invalid @enderror"
                                                        value="{{ $user->prenom }}" required placeholder="Prenom">
                                                    @error('prenom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nom</label>
                                                    <input type="text" name="nom" id="nom"
                                                        class="form-control @error('nom') is-invalid @enderror"
                                                        value="{{ $user->nom }}" required placeholder="Nom">
                                                    @error('nom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Sexe</label>
                                                    <input type="text" name="sexe" id="sexe"
                                                        class="form-control @error('sexe') is-invalid @enderror"
                                                        value="{{ $user->sexe }}" required placeholder="Sexe">
                                                    @error('sexe')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Date de Naissance</label>
                                                    <input type="text" name="dateNaissance" id="dateNaissance"
                                                        class="form-control @error('dateNaissance') is-invalid @enderror"
                                                        value="{{ $user->dateNaissance }}" required
                                                        placeholder="Date de Naissance">
                                                    @error('dateNaissance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Lieu de Naissance</label>
                                                    <input type="text" name="lieuNaissance" id="lieuNaissance"
                                                        class="form-control @error('lieuNaissance') is-invalid @enderror"
                                                        value="{{ $user->lieuNaissance }}" required
                                                        placeholder="Lieu de Naissance">
                                                    @error('lieuNaissance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Adresse Email</label>
                                                    <input type="email" name="email" id="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        value="{{ $user->email }}" placeholder="Adresse E-mail">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="telephone">Telephone</label>
                                                    <input type="text" name="telephone" id="telephone"
                                                        class="form-control @error('telephone') is-invalid @enderror"
                                                        placeholder="Telephone" value="{{ $user->telephone }}" required>
                                                    @error('telephone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fas fa-user-edit"> </i>Modifier</button>
                                                <a href="{{ route('users.index', $user) }}" class="btn btn-danger">
                                                    <i class="fas fa-times-circle"> </i>Annuler</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
@endsection

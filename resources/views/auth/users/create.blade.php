@extends('layouts.master')
@section('title', 'Ajout nouveau Utilisateur')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="text-center">Nouveau Utilisateur</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Ajout d'un nouveau utilisateur</h3>
                                </div>
                                <div class="card-body">
                                    <div class="mt-4">
                                        @if (\Session::has('success'))
                                            <div class="alert alert-success">
                                                <ul>
                                                    <li>{!! \Session::get('success') !!}</li>
                                                </ul>
                                            </div>
                                        @endif
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{ route('users.store') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Prénom:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-user"></i></span>
                                                        </div>
                                                        <input id="prenom" type="text"
                                                            placeholder="Entrez votre Prénom"
                                                            class="form-control @error('prenom') is-invalid @enderror"
                                                            name="prenom" value="{{ old('prenom') }}" required
                                                            autocomplete="prenom" autofocus>

                                                    </div>
                                                    @error('prenom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Nom:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-user"></i></span>
                                                        </div>
                                                        <input id="nom" type="text"
                                                            placeholder="Entrez votre nom de Famille"
                                                            class="form-control @error('nom') is-invalid @enderror"
                                                            name="nom" value="{{ old('nom') }}" required
                                                            autocomplete="nom" autofocus>
                                                    </div>
                                                    @error('nom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Matricule:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-laptop"></i></span>
                                                        </div>
                                                        <input id="matricule" type="text"
                                                            placeholder="Entrez votre numéro Matricule"
                                                            class="form-control @error('matricule') is-invalid @enderror"
                                                            name="matricule" value="{{ old('matricule') }}" required
                                                            autocomplete="matricule" autofocus>
                                                    </div>
                                                    @error('matricule')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Sexe:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-people-arrows"></i></span>
                                                        </div>
                                                        {{-- <input type="text" name="sexe" class="form-control"
                                                        placeholder="Entrez votre Sexe"> --}}
                                                        <select id="sexe" type="text" placeholder="Sexe"
                                                            class="form-control select2bs4 @error('sexe') is-invalid @enderror"
                                                            name="sexe" value="{{ old('sexe') }}" required
                                                            autocomplete="sexe" autofocus>
                                                            <option selected="selected">Choisissez votre sexe</option>
                                                            <option value="M">Homme</option>
                                                            <option value="F">Femme</option>
                                                        </select>
                                                        @error('sexe')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Type:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-people-arrows"></i></span>
                                                        </div>
                                                        <select id="type" type="text" placeholder="type"
                                                            class="form-control select2bs4 @error('type') is-invalid @enderror"
                                                            name="type" value="{{ old('type') }}" required
                                                            autocomplete="sexe" autofocus>
                                                            <option selected="selected">Choisissez type d'tulisateur</option>
                                                            <option value="prof">Prof</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="etudiant">Etudiant</option>
                                                        </select>
                                                        @error('sexe')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Date de Naissance:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input id="dateNaissance" type="date"
                                                            placeholder="Date de Naissance"
                                                            class="form-control @error('dateNaissance') is-invalid @enderror"
                                                            name="dateNaissance" value="{{ old('dateNaissance') }}"
                                                            required autocomplete="dateNaissance" autofocus>
                                                    </div>
                                                    @error('dateNaissance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Lieu de Naissance:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-home"></i></span>
                                                        </div>
                                                        <input id="lieuNaissance" type="text"
                                                            placeholder="Entrez votre Lieu de Naissance"
                                                            class="form-control @error('lieuNaissance') is-invalid @enderror"
                                                            name="lieuNaissance" value="{{ old('lieuNaissance') }}"
                                                            required autocomplete="lieuNaissance" autofocus>
                                                    </div>
                                                    @error('lieuNaissance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Numéro de téléphone:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-phone"></i></span>
                                                        </div>
                                                        <input id="telephone" type="text"
                                                            class="form-control @error('telephone') is-invalid @enderror"
                                                            data-inputmask="'alias': 'ip'" data-mask name="telephone"
                                                            value="{{ old('telephone') }}" required
                                                            autocomplete="telephone" autofocus>
                                                    </div>
                                                    @error('telephone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input id="email" type="email"
                                                            placeholder="samake@gmail.com"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email" autofocus>
                                                    </div>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Mot de passe:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-lock"></i></span>
                                                        </div>
                                                        <input id="password" type="password"
                                                            placeholder="Entrez votre mot de passe"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="current-password">
                                                    </div>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Confirmé le mot de passe:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-lock"></i></span>
                                                        </div>
                                                        <input id="password-confirm" type="password"
                                                            placeholder="Confirmé le mot de passe" class="form-control"
                                                            name="password_confirmation" required
                                                            autocomplete="new-password">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-info col-md-12 text-center mb-3">Enregistrer</button>
                                            <!-- /.form -->
                                        </form>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col (left) -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
@endsection

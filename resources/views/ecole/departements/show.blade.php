@extends('layouts.master')
@section('title', 'Département')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail du département</h1>
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
                    <div class="col-md-3">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('assets/dist/img/avatar5.png') }}" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Chef du Département</h3>

                                <p class="text-muted text-center">Dr. Dioba SACKO <br>Tel:76 54 23 10</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Etudiants:</b> <a class="float-right">300</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Professeurs:</b> <a class="float-right">20</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Cycles:</b> <a class="float-right">02</a>
                                    </li>
                                </ul>

                                {{-- <a href="{{ route('departements.edit', $departement) }}"
                                    class="btn btn-primary btn-block"><i class="fa fa-user-edit"></i>
                                    <b>Modifier</b></a> --}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4>Detail Département</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div>
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">Nom</label>
                                                        <input type="text" name="nom" id="nom"
                                                            class="form-control @error('nom') is-invalid @enderror"
                                                            value="{{ $departement->nom }}" required placeholder="Nom">
                                                        @error('nom')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Adresse Email</label>
                                                        <input type="email" name="email" id="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            value="{{ $departement->email }}" placeholder="E-mail Address">
                                                        @error('siteemail')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="telephone">Telephone</label>
                                                        <input type="text" name="telephone" id="telephone"
                                                            class="form-control @error('telephone') is-invalid @enderror"
                                                            placeholder="Telephone" value="{{ $departement->telephone }}"
                                                            required>
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
                                                    {{-- <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Update Profile</button> --}}
                                                    <a href="{{ route('departements.edit', $departement) }}"
                                                        class="btn btn-info"> <i class="fa fa-user-edit"></i> Modifier</a>
                                                </div>

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

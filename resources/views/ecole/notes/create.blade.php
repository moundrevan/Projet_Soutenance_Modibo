@extends('layouts.master')
@section('title', 'Ajout Nouvelle Note')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="text-center">Nouvelle Note</h1>
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
                                    <h3 class="card-title">Ajout d'une Nouvelle Note</h3>
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
                                        <form action="{{ route('notes.store') }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('post') }}

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label" for="user_id">Etudiant:</label>
                                                    <div class="input-group">
                                                        <select name="user_id"
                                                            class="form-control form-control-alternative {{ $errors->has('user_id') ? 'is-invalid' : '' }}">
                                                            <option disabled selected>--- Choisissez un etudiant ---
                                                            </option>
                                                            @foreach ($users as $user)
                                                                <option value="{{ $user->id }}">{{ $user->prenom }}
                                                                    {{ $user->nom }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('user_id')
                                                            <span class="help-block invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label" for="matiere_id">UE:</label>
                                                    <div class="input-group">
                                                        <select name="matiere_id"
                                                            class="form-control form-control-alternative {{ $errors->has('matiere_id') ? 'is-invalid' : '' }}">
                                                            <option disabled selected>--- Choisissez une matière ---
                                                            </option>
                                                            @foreach ($matieres as $matiere)
                                                                <option value="{{ $matiere->id }}">{{ $matiere->nom }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('matiere_id')
                                                            <span
                                                                class="help-block invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Controle Continu:</label>
                                                    <div class="input-group">
                                                        <input id="devoir" type="text" placeholder="15"
                                                            class="form-control @error('devoir') is-invalid @enderror"
                                                            name="devoir" value="{{ old('devoir') }}" required
                                                            autocomplete="devoir" autofocus>
                                                    </div>
                                                    @error('devoir')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Examen:</label>
                                                    <div class="input-group">
                                                        <input id="examen" type="text" placeholder="18"
                                                            class="form-control @error('examen') is-invalid @enderror"
                                                            name="examen" value="{{ old('examen') }}" required
                                                            autocomplete="examen" autofocus>
                                                    </div>
                                                    @error('examen')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                    <!-- /.form -->
                                    </form><br>
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

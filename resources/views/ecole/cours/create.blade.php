@extends('layouts.master')
@section('title', 'Ajout nouveau Emplois du Temps')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="text-center">Nouveau Emplois du Temps</h1>
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
                                    <h3 class="card-title">Ajout d'un nouveau Emplois du Temps</h3>
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
                                        <form action="{{ route('cours.store') }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('post') }}
                                            <div class="form-group col-md-12">
                                                <label>Type Cours:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-people-arrows"></i></span>
                                                    </div>
                                                    {{-- <input type="text" name="sexe" class="form-control"
                                                    placeholder="Entrez votre Sexe"> --}}
                                                    <select id="typeCours" type="text" placeholder="Type Cours"
                                                        class="form-control select2bs4 @error('typeCours') is-invalid @enderror"
                                                        name="typeCours" value="{{ old('sexe') }}" required
                                                        autocomplete="typeCours" autofocus>
                                                        <option selected="selected">--- Choisissez un cours ---</option>
                                                        <option value="CM">Cours Magistraux</option>
                                                        <option value="TP">Travaux Pratiques</option>
                                                        <option value="TD">Travaux Dirigés</option>
                                                    </select>
                                                    @error('typeCours')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Heure Début:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                    </div>
                                                    <input id="heureDebut" type="text" placeholder="07h:00:00"
                                                        class="form-control @error('heureDebut') is-invalid @enderror"
                                                        name="heureDebut" value="{{ old('heureDebut') }}" required
                                                        autocomplete="heureDebut" autofocus>
                                                </div>
                                                @error('heureDebut')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Heure Fin:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                    </div>
                                                    <input id="heureFin" type="text" placeholder="10h:00:00"
                                                        class="form-control @error('heureFin') is-invalid @enderror"
                                                        name="heureFin" value="{{ old('heureFin') }}" required
                                                        autocomplete="heureFin" autofocus>
                                                </div>
                                                @error('heureFin')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Date:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                    </div>
                                                    <input id="date" type="text" placeholder="2022-10-15"
                                                        class="form-control @error('date') is-invalid @enderror"
                                                        name="date" value="{{ old('date') }}" required
                                                        autocomplete="date" autofocus>
                                                </div>
                                                @error('date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="form-control-label" for="classe_id">Classe:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                                                    </div>
                                                    <select name="classe_id"
                                                        class="form-control form-control-alternative {{ $errors->has('classe_id') ? 'is-invalid' : '' }}">
                                                        <option disabled selected>--- Choisissez une classe ---</option>
                                                        @foreach ($classes as $classe)
                                                            <option value="{{ $classe->id }}">{{ $classe->nom }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('classe_id')
                                                        <span class="help-block invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="form-control-label" for="matiere_id">Matière:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                                                    </div>
                                                    <select name="matiere_id"
                                                        class="form-control form-control-alternative {{ $errors->has('matiere_id') ? 'is-invalid' : '' }}">
                                                        <option disabled selected>--- Choisissez une matière ---</option>
                                                        @foreach ($matieres as $matiere)
                                                            <option value="{{ $matiere->id }}">{{ $matiere->nom }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('matiere_id')
                                                        <span class="help-block invalid-feedback">{{ $message }}</span>
                                                    @enderror
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

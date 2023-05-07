@extends('layouts.master')
@section('title', 'Emplois du Temps')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail de l'Emplois du Temps</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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
                                <h4>Detail Emplois du Temps</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div>
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Type Cours</label>
                                                        <input type="text" name="typeCours" id="typeCours"
                                                            class="form-control @error('typeCours') is-invalid @enderror"
                                                            value="{{ $cour->typeCours }}" required
                                                            placeholder="Type Cours">
                                                        @error('typeCours')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Heure Début</label>
                                                        <input type="text" name="heureDebut" id="heureDebut"
                                                            class="form-control @error('heureDebut') is-invalid @enderror"
                                                            value="{{ $cour->heureDebut }}" required
                                                            placeholder="Heure du début">
                                                        @error('heureDebut')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Heure Fin</label>
                                                        <input type="text" name="heureFin" id="heureFin"
                                                            class="form-control @error('heureFin') is-invalid @enderror"
                                                            value="{{ $cour->heureFin }}" required
                                                            placeholder="Heure de fin">
                                                        @error('heureFin')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Date</label>
                                                        <input type="text" name="date" id="date"
                                                            class="form-control @error('date') is-invalid @enderror"
                                                            value="{{ $cour->date }}" required placeholder="Date">
                                                        @error('date')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Classe</label>
                                                        <input type="text" name="nom" id="nom"
                                                            class="form-control @error('nom') is-invalid @enderror"
                                                            value="{{ $cour->classe->nom }}" required placeholder="Nom">
                                                        @error('nom')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Matière</label>
                                                        <input type="text" name="nom" id="nom"
                                                            class="form-control @error('nom') is-invalid @enderror"
                                                            value="{{ $cour->matiere->nom }}" required placeholder="Nom">
                                                        @error('nom')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group button">
                                                    {{-- <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Update Profile</button> --}}
                                                    <a href="{{ route('cours.edit', $cour) }}" class="btn btn-info">
                                                        <i class="fa fa-user-edit"></i> Modifier</a>
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

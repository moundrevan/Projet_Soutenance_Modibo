@extends('layouts.master')
@section('title', 'Modification Matière')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modification de la matière</h1>
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
                                <h4>Modification Matière</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div>
                                        <form action="{{ route('cours.update', $cour) }}" method="post"
                                            class="form-horizontal">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="form-control-label" for="typeCours">Type Cours:</label>
                                                    <div class="input-group">
                                                        <select name="typeCours"
                                                            class="form-control form-control-alternative {{ $errors->has('typeCours') ? 'is-invalid' : '' }}">
                                                            <option disabled selected>--- Choisissez un cours ---</option>
                                                            <option value="CM">Cours Magistraux</option>
                                                            <option value="TP">Travaux Pratiques</option>
                                                            <option value="TD">Travaux Dirigés</option>
                                                        </select>
                                                        @error('typeCours')
                                                            <span class="help-block invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-control-label" for="classe_id">Classe:</label>
                                                    <div class="input-group">
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
                                                <div class="col-md-12">
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
                                                <div class="col-md-12">
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
                                                <div class="col-md-12">
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
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fas fa-user-edit"> </i>Modifier</button>
                                                    <a href="{{ route('cours.index', $cour) }}" class="btn btn-danger">
                                                        <i class="fas fa-times-circle"> </i>Annuler</a>
                                                </div>
                                            </div>
                                            {{-- <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Update Profile</button>
                                                    <a href="{{ route('departements.edit', $departement) }}"
                                                        class="btn btn-info"> <i class="fa fa-user-edit"></i> Modifier</a>
                                                </div>

                                            </div> --}}
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

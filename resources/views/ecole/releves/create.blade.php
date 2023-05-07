@extends('layouts.master')
@section('title', 'Ajout nouveau Relevé')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="text-center">Nouveau Relevé</h1>
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
                                    <h3 class="card-title">Ajout d'un nouveau Relevé</h3>
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
                                        <form action="{{ route('releves.store') }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('post') }}

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label" for="classe_id">Classe:</label>
                                                    <div class="input-group">
                                                        <select name="classe_id"
                                                            class="form-control form-control-alternative {{ $errors->has('classe_id') ? 'is-invalid' : '' }}">
                                                            <option disabled selected>--- Choisissez une classe ---
                                                            </option>
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
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Semestre:</label>
                                                    <div class="input-group">
                                                        <select id="semestre" type="text" placeholder="semestre"
                                                            class="form-control select2bs4 @error('semestre') is-invalid @enderror"
                                                            name="semestre" value="{{ old('semestre') }}" required
                                                            autocomplete="semestre" autofocus>
                                                            <option selected="selected">--- Choisissez un Semestre ---
                                                            </option>
                                                            <option value="S1">SEMESTRE I</option>
                                                            <option value="S2">SEMESTRE II</option>
                                                            <option value="S3">SEMESTRE III</option>
                                                            <option value="S4">SEMESTRE IV</option>
                                                            <option value="S5">SEMESTRE V</option>
                                                            <option value="S6">SEMESTRE VI</option>
                                                        </select>
                                                        @error('semestre')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Crédit:</label>
                                                    <div class="input-group">
                                                        <select id="credit" type="text" placeholder="credit"
                                                            class="form-control select2bs4 @error('credit') is-invalid @enderror"
                                                            name="credit" value="{{ old('credit') }}" required
                                                            autocomplete="credit" autofocus>
                                                            <option selected="selected">--- Choisissez le crédit ---
                                                            </option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                        @error('credit')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="form-control-label"
                                                        for="specialite_id">Spécialité:</label>
                                                    <div class="input-group">
                                                        <select name="specialite_id"
                                                            class="form-control form-control-alternative {{ $errors->has('specialite_id') ? 'is-invalid' : '' }}">
                                                            <option disabled selected>--- Choisissez une spécialité ---
                                                            </option>
                                                            @foreach ($specialites as $specialite)
                                                                <option value="{{ $specialite->id }}">
                                                                    {{ $specialite->nom }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('specialite_id')
                                                            <span
                                                                class="help-block invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-control-label"
                                                        for="promotion_id">Promotion:</label>
                                                    <div class="input-group">
                                                        <select name="promotion_id"
                                                            class="form-control form-control-alternative {{ $errors->has('promotion_id') ? 'is-invalid' : '' }}">
                                                            <option disabled selected>--- Choisissez une promotion ---
                                                            </option>
                                                            @foreach ($promotions as $promotion)
                                                                <option value="{{ $promotion->id }}">
                                                                    {{ $promotion->libelle }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('promotion_id')
                                                            <span
                                                                class="help-block invalid-feedback">{{ $message }}</span>
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

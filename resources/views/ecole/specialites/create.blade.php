@extends('layouts.master')
@section('title', 'Ajout nouvelle Spécialité')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="text-center">Nouvelle Spécialité</h1>
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
                                    <h3 class="card-title">Ajout d'une nouvelle Spécialité</h3>
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
                                        <form action="{{ route('specialites.store') }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('post') }}
                                            <div class="form-group col-md-12">
                                                <label>Nom de la Spécialité:</label>
                                                <div class="input-group">
                                                    <input id="nom" type="text"
                                                        placeholder="Entrez le nom de la spécialité"
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
                                            <div class="form-group col-md-12">
                                                <label>Description:</label>
                                                <div class="input-group">
                                                    <input id="description" type="text"
                                                        placeholder="Entrez la description de la spécialité"
                                                        class="form-control @error('description') is-invalid @enderror"
                                                        name="description" value="{{ old('description') }}" required
                                                        autocomplete="description" autofocus>
                                                </div>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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

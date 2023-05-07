@extends('layouts.master')
@section('title', 'Ajout nouveau Module')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="text-center">Nouveau Module</h1>
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
                                    <h3 class="card-title">Ajout d'un nouveau module</h3>
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
                                        <form action="{{ route('modules.store') }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('post') }}
                                            <div class="form-group col-md-12">
                                                <label>Code:</label>
                                                <div class="input-group">
                                                    <input id="code" type="text"
                                                        placeholder="Entrez le code du module"
                                                        class="form-control @error('code') is-invalid @enderror"
                                                        name="code" value="{{ old('code') }}" required
                                                        autocomplete="code" autofocus>
                                                </div>
                                                @error('code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Nom du Module:</label>
                                                <div class="input-group">
                                                    <input id="nom" type="text"
                                                        placeholder="Entrez le nom du module"
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
                                                        placeholder="Entrez la description du module"
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
                                            <div class="form-group col-md-12">
                                                <label>Coefficient:</label>
                                                <div class="input-group">
                                                    <input id="coefficient" type="text"
                                                        placeholder="Entrez le coefficient du module"
                                                        class="form-control @error('coefficient') is-invalid @enderror"
                                                        name="coefficient" value="{{ old('coefficient') }}" required
                                                        autocomplete="coefficient" autofocus>
                                                </div>
                                                @error('coefficient')
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

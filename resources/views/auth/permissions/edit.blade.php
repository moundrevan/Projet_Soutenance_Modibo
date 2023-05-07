@extends('layouts.master')
@section('title', 'Modification Permission')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modification de la Permission</h1>
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
                                <h4>Permission</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div>
                                        <form action="{{ route('permissions.update', $permission) }}" method="post"
                                            class="form-horizontal">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">Nom</label>
                                                        <input type="text" name="libelle" id="libelle"
                                                            class="form-control @error('libelle') is-invalid @enderror"
                                                            value="{{ $permission->name }}" required placeholder="nom">
                                                        @error('libelle')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">Daete Création</label>
                                                        <input type="text" name="created_at" id="created_at"
                                                            class="form-control @error('created_at') is-invalid @enderror"
                                                            value="{{ $permission->created_at }}" required
                                                            placeholder="created_at">
                                                        @error('created_at')
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
                                                    <a href="{{ route('permissions.index', $permission) }}"
                                                        class="btn btn-danger">
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

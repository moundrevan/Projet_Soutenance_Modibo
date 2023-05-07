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
                                        <form action="{{ route('matieres.update', $matiere) }}" method="post"
                                            class="form-horizontal">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="form-control-label" for="module_id">Module:</label>
                                                    <div class="input-group">
                                                        <select name="module_id"
                                                            class="form-control form-control-alternative {{ $errors->has('module_id') ? 'is-invalid' : '' }}">
                                                            <option disabled selected>--- Choisissez un module ---</option>
                                                            @foreach ($modules as $module)
                                                                <option value="{{ $module->id }}">{{ $module->nom }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('module_id')
                                                            <span class="help-block invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">Nom</label>
                                                        <input type="text" name="nom" id="nom"
                                                            class="form-control @error('nom') is-invalid @enderror"
                                                            value="{{ $matiere->nom }}" required placeholder="Nom">
                                                        @error('nom')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">Description</label>
                                                        <input type="text" name="description" id="description"
                                                            class="form-control @error('description') is-invalid @enderror"
                                                            value="{{ $matiere->description }}" required
                                                            placeholder="Description">
                                                        @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">Coefficient</label>
                                                        <input type="text" name="coefficient" id="coefficient"
                                                            class="form-control @error('coefficient') is-invalid @enderror"
                                                            value="{{ $matiere->coefficient }}" required
                                                            placeholder="Coefficient">
                                                        @error('coefficient')
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
                                                    <a href="{{ route('matieres.index', $matiere) }}"
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

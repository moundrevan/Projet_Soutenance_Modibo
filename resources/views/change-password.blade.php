@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Changement du mot de passe</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Modifiermotdepasse</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <hr>
        <section class="content">
            <div class="container-fluid">
                <div class="py-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">

                                @if (session('message'))
                                    <h5 class="alert alert-success mb-2">{{ session('message') }}</h5>
                                @endif

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <div class="card shadow">
                                    <div class="card-header bg-primary">
                                        <h4 class="mb-0 text-white">Changement du mot de passe</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('change-password') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Mot de Passe Actuel</label>
                                                <input type="password" name="current_password" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label>Nouveau Mot de Passe</label>
                                                <input type="password" name="password" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label>Confirmé le nouveau mot de passe</label>
                                                <input type="password" name="password_confirmation" class="form-control" />
                                            </div>
                                            <div class="mb-3 text-end">
                                                <hr>
                                                <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </div>

@endsection

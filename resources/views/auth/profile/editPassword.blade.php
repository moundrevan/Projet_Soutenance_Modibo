{{-- @extends('layouts.master')

@section('title', $user->firstname . ' ' . $user->lastname . ' - Modifier Profil')
@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="display-2 text-white">{{ $user->prenom }} {{ $user->nom }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Mon compte</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.updatePassword') }}" method="POST">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="oldPassword">Votre ancien mot de
                                                passe</label>
                                            <input type="password" id="oldPassword"
                                                class="form-control form-control-alternative" name="oldPassword">
                                            @error('oldPassword')
                                                <span class="text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="newPassword">Votre nouveau mot de
                                                passe</label>
                                            <input type="password" id="newPassword"
                                                class="form-control form-control-alternative" name="newPassword">
                                            @error('newPassword')
                                                <span class="text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="newPassword_confirmation">Confirmer votre
                                                nouveau mot de passe</label>
                                            <input type="password" id="newPassword_confirmation"
                                                class="form-control form-control-alternative"
                                                name="newPassword_confirmation">
                                            @error('newPassword_confirmation')
                                                <span class="text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-xl btn-primary" value="Modifier">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection --}}

@extends('layouts.master')
@section('title', 'Liste Roles')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ROLES</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Table Roles</h3>

                                <div class="card-tools">
                                    <a href="{{ route('roles.create') }}" class="btn btn-primary"> <i
                                            class="fas fa-plus-circle"></i> Créer un
                                        role</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Role</th>
                                            <th>Permission</th>
                                            <th>Date Posted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($roles as $role )
                                            <tr>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    @foreach ($role->permissions as $permission)
                                                        <button class="btn btn-warning" role="button"><i
                                                                class="fas fa-shield-alt"></i>
                                                            {{ $permission->name }}</button>
                                                    @endforeach
                                                </td>
                                                <td><span class="tag tag-success">{{ $role->created_at }}</span></td>
                                                {{--  <td>
                                                    <a href="{{ route('role.show', $role->id ) }}" class="btn btn-info">Change Permission</a>
                                                    <a href="{{ route('role.destroy',$role->id ) }}" class="btn btn-danger">Delete</a>
                                                </td>  --}}
                                            </tr>
                                        @empty
                                            <tr>
                                                <td><i class="fas fa-folder-open"></i> No Record found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
@endsection

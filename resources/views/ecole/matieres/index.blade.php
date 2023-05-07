@extends('layouts.master')
@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('title', 'Liste Matières')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>MATIERES</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Matières</li>
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
                                <h2 class="card-title py-1"><b>Liste des Matières</b></h2>
                                <a href="{{ route('matieres.create') }}" class="btn btn-success float-right"><i
                                        class="fas fa-plus-circle"></i>
                                    Nouvelle</a>
                                {{-- <div class="btn btn-info float-right">Nouveau</div> --}}
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Code UE</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Coefficient</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($matieres as $matiere)
                                            <tr>
                                                <td class="text-center">{{ $matiere->id }}</td>
                                                <td class="text-center">{{ $matiere->module->code }}</td>
                                                <td class="text-center">{{ $matiere->nom }}</td>
                                                <td class="text-center">{{ $matiere->description }}</td>
                                                <td class="text-center">{{ $matiere->coefficient }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('matieres.show', $matiere) }}"
                                                        class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('matieres.edit', $matiere) }}"
                                                        class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('matieres.destroy', $matiere) }}"
                                                        style="display: inline;" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    {{-- <a href="{{ route('classes.destroy', $departement->id) }}"
                                                        class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a> --}}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>Aucun reusltat trouvé</tr>
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Code UE</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Coefficient</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
@endsection
@section('script')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="../../dist/js/demo.js"></script> --}}
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection

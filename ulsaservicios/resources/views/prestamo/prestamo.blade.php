@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="mb-2 row">
                    <div class="col-sm-6">
                        <h1>Prestamos salon Biblioteca</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Prestamos salon Biblioteca</li>
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
                                <h3 class="card-title">Registro de los prestamos del salon de biblioteca😘</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Matrícula</th>
                                            <th>Oficina</th>
                                            <th>Fecha Prestamo</th>
                                            <th>fecha prestamo fin</th>
                                            <th>estatus prestamo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($prestamoq as $prestamos)
                                            <tr>
                                                <td>{{ $prestamos->idprestamos }}</td>
                                                <td>{{ $prestamos->matricula_id }}</td>
                                                <td>{{ $prestamos->oficina_id }}</td>
                                                <td>{{ $prestamos->fecha_prestamo }}</td>
                                                <td>{{ $prestamos->fecha_prestamo_fin }}</td>
                                                <td>{{ $prestamos->estatus_prestamo_id }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

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

@endsection

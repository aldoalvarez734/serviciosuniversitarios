@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Libro</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="order-2 col-12 col-md-12 col-lg-8 order-md-1">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="text-center info-box-text text-muted">Estado</span>
                                        <span class="mb-0 text-center info-box-number text-muted">Disponible</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="text-center info-box-text text-muted">Total veces solicitado</span>
                                        <span class="mb-0 text-center info-box-number text-muted">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="text-center info-box-text text-muted">Categoria</span>
                                        <span class="mb-0 text-center info-box-number text-muted">Diccionarios y
                                            Enciclopedias<span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 col-12 col-md-offset-4 col-lg-4 order-md-2">

                            <h3 class="text-primary">Enciclopedia</h3>
                            <p class="text-muted">Uno de los fines esenciales de la educación es la integración del ser
                                humano en la sociedad, mediante el conocimiento de las pautas culturales que le son propias
                                y esta obra brinda cada una de ellas de una manera sencilla y muy práctica.</p>
                            <br>
                            <div class="text-muted">
                                <p class="text-sm">Autor
                                    <b class="d-block">Autores varios</b>
                                </p>
                                <p class="text-sm">Editorial
                                    <b class="d-block">Lexus</b>
                                </p>
                            </div>
                        </div>

                        <h5 class="mt-5 text-muted">Detalles:</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a class="btn-link text-secondary"> 2015</a>
                            </li>
                            <li>
                                <a class="btn-link text-secondary"> 1° Edicion</a>
                            </li>

                        </ul>
                        <div class="mt-5 mb-3 text-center">
                            <a href="#" class="btn btn-sm btn-primary">Solicitar</a>
                            <a href="/renovacionlibro" class="btn btn-sm btn-warning">Renovar </a>
                        </div>
                    </div>

                    <div class="order-1 col-12 col-md-12 col-lg-4 order-md-2">
                        <img src="../../dist/img/enciclopedia.jpg">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection

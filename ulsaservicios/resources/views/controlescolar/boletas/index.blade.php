@extends('layouts.app')

@section('content')
 <div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Solicitud de Calificaciones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Control Escolar</a></li>
              <li class="breadcrumb-item active">Solicitar calificaciones de {{ Auth::user()->name }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

<div >

<div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Elige un tipo de servicio</h3>
              <br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-danger">
                <h4>Boleta</h4>

                <p>Boleta con tus calificaciones semestrales.</p>
               
                <div class="form-group">
                <label>Selecciona el semestre</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                  </select>
                </div>

                <button type="button" class="btn btn-block btn-danger">Solicitar</button>
              </div>
              <div class="callout callout-info">
                <h4>Historial académico</h4>

                <p>Historial con todas las calificaciones a lo largo de tu carrera.</p>
                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">Solicitar</button>

              </div>

            
              
              
            </div>
            <!-- /.box-body -->
          </div>
</div>
    

    </section>
  
</div>

@endsection
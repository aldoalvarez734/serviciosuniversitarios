@extends('layouts.app')

@section('content')
 <div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Libros Leídos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Mis libros</a></li>
              <li class="breadcrumb-item active">Leídos de {{ Auth::user()->name }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Libros Leídos de {{ Auth::user()->name }}</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Título
                      </th>
                      <th style="width: 30%">
                          Campus
                      </th>
                      <th>
                          Devuelto
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 2%">
                      </th>
                  </tr>
              </thead>

              <tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          <a>
                              Enciclopedia 
                          </a>
                          <br/>
                          <small>
                              Solicitado 01.01.2019
                          </small>
                      </td>
                      <td> 1
                         
                      </td>
                      <td> 15. 01. 2019
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success" >Devuelto</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="/libros">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>

                   <div class="card-body p-0">
          <table class="table table-striped projects">
             
              
              <tbody>
                  <tr>
                      <td>
                          2
                      </td>
                      <td style="width: 20%">
                          <a>
                              Don Quijote de la Mancha
                          </a>
                          <br/>
                          <small>
                              Solicitado 11.01.2019
                          </small>
                      </td>
                      <td style="width: 30%"> 1  

                      </td>
                      <td  style="width: 8%" class="text-center"> pendiente
                      </td>
                      <th style="width: 2%">
                      </th>

                      <td class="project-state" >
                          <span class="badge badge-success" >Prestado</span>

                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>

                  



            



              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
  
</div>

@endsection
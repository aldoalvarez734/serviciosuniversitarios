@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          
            <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">NUEVO CAMPUS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/guardarcampus" method="POST" >
                 @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="labelcampus">Nombre del campus</label>
                    <input type="text" class="form-control" id="campus" name="campus" placeholder="Escribe un campus">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<style type="text/css">
  #RenBeca{
      margin-left: auto;
  margin-right: auto;
  }
  #descripcion{
    font-size: 12px;
    text-align: justify;
  }
  #textoo{
    justify-content: center;
    width: 500px;
  }
  #boton-enviar{
    justify-content: center;
    margin-left: auto;
  margin-right: auto;
  }

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TUS TRÁMITES</div>
                <div class="container">
               <a href="/nuevo/historial_tramites" class="btn btn-success">+</a>
              </div>

                <div class="card-body" id="RenBeca">
                  <H1>
                      HISTORIAL DE TRÁMITES
                  </H1>
                  <br>
                  <div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
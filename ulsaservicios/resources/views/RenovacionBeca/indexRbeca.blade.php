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
                <div class="card-header">TRÁMITE DE RENOVACIÓN DE BECA</div>
                <div class="container">
               <a href="/nuevo/Tramite_Renovacion_de_beca" class="btn btn-success">+</a>
              </div>

                <div class="card-body" id="RenBeca">
                  <H1>
                      TRÁMITE DE RENOVACIÓN DE BECA
                  </H1>
                  <br>
                  <div>
                   <p>Escribe tu matrícula:</p>
                    <input type="text" id="alumno" name="alumno" maxlength="8" placeholder="Ej: 20140200">
                    <br>
                    <br>
                    <p>Adjunta tu <i>Evaliación del Servicio Becario</i></p>
                       <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
                          <input type="file" name="imagen" />
                      </form>
                    <br>
                    <p>Adjunta una fotografía de tu <i>Pago de Reinscripción</i></p>
                       <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
                          <input type="file" name="imagen" />
                      </form>
                      <br>
                      <p>¿Solicitará Prórroga?</p>
                      <div id="textoo">
                      <p id="descripcion"><i>La prórroga es un documento que le concede al alumno un periodo de tiempo para realizar el pago de la reinscripción o de un adeudo en una fecha posterior a la que se ha fijado.  Si el alumno es incapaz de realizar dicho pago para la realización de la renovación de la Beca, favor de pasar a Dirección Académica con el Director Administrativo a cargo y solicitar por prórroga. Adjuntar fotografía de autorización. </i></p>
                      <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
                        <div>
                          <input type="file" name="imagen" />
                      </form>
                      <br>
                      <br>
                      <div id="boton-enviar">
                  <form  role="form" action="/guardar/Tramite_Renovacion_de_beca" method="POST" >
                 @csrf
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
              <i class="fa  fa-book"></i>

              <h3 class="box-title">Libros de la biblioteca</h3>
              <br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="card-group" height="150">
              <div class="card" >
              <img class="card-img-top" width="150" src="http://localhost:8000/dist/img/enciclopedia.jpg" alt="Card image cap">
              
              <div class="card-body">
                <h5 class="card-title" href="/libro">Enciclopedia</h5>
              
                <p class="card-text">Uno de los fines esenciales de la educación es la integración del ser humano en la sociedad.</p>
                <a href="/libros" class="stretched-link"></a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card" >
            <img class="card-img-top" width="150" src="https://lh3.googleusercontent.com/proxy/03vnYrP_jdssY8kW6U0Sy9n-OSgKTHqIRmOmzqSql4gsP_m2p5rs-RlngV-YJySeS-MY0I7BaDR66cHKxQ2J9IARLS_pdQIvexn-14jwrQZL" alt="Card image cap">

            <div class="card-body">
              <h5 class="card-title" href="/libro">Moby Dick</h5>

              <p class="card-text">Moby Dick​ es una novela del escritor Herman Melville publicada en 1851.</p>
              <a href="/libros" class="stretched-link"></a>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
            <div class="card" >
            <img class="card-img-top" width="150" src="https://upload.wikimedia.org/wikipedia/commons/3/37/El-perfume.jpg" alt="Card image cap">

            <div class="card-body">
              <h5 class="card-title" href="/libro">El perfume: historia de un asesino</h5>

              <p class="card-text">Es la primera novela del escritor alemán Patrick Süskind, publicada en 1985 bajo el título original Das Parfüm.</p>
              <a href="/libros" class="stretched-link"></a>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>

            <div class="card-group">
              <div class="card" >
              <img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_625201-MLA26970230864_032018-O.jpg_" alt="Card image cap">
              
              <div class="card-body">
                <h5 class="card-title" href="/libro">El Principito</h5>
              
                <p class="card-text">Uno de los fines esenciales de la educación es la integración del ser humano en la sociedad.</p>
                <a href="/libros" class="stretched-link"></a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card" >
            <img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/81ffybroivL.jpg" alt="Card image cap">

            <div class="card-body">
              <h5 class="card-title" href="/libro">Llano en Llamas</h5>

              <p class="card-text">El llano en llamas​ es el título de una recopilación de cuentos del escritor mexicano Juan Rulfo. Fue la primera publicación del escritor en 1953.</p>
              <a href="/libros" class="stretched-link"></a>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
            <div class="card" >
            <img class="card-img-top" src="https://images.cdn2.buscalibre.com/fit-in/360x360/a2/9e/a29ebbd39810f964999f2a9f5f773af8.jpg" alt="Card image cap">

            <div class="card-body">
              <h5 class="card-title" href="/libro">Harry Potter</h5>

              <p class="card-text">Harry Potter y la piedra filosofal, es el primer libro de la serie literaria Harry Potter, escrito por la autora británica J. K. Rowling en 1997</p>
              <a href="/libros" class="stretched-link"></a>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>



</div>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
</div>
    

    </section>
  
</div>

    <!-- /.content -->
 

 
@endsection
@extends('layouts.master')

@section('content')

<style>
.responsiveContent {
  position: relative;
  height: 0;
  overflow: hidden;
  padding-bottom: 56.2%;
  margin-bottom: 20px;
}
.responsiveContent iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

</style>

<div class="container">
    <br><br>
    <div class="row">

        <div class="col-md-7">
            <img src="{{ asset('imagenes/agalardonHuellas.png') }}" alt="Bienvenidos">
            <div class="responsiveContent">
                <iframe src="https://www.youtube.com/embed/AuvzaUG-IA4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>    
        </div>

        <div class="col-md-5">
           <div style="text-align:center">
            <img src="{{ asset('imagenes/Recurso-20.png') }}" alt="Hola">
           </div> 
                <h2 style="color:#26204E; font-weight:bold; text-align:center">{{ auth()->user()->name}} </h2>
            <div class="container">
                <nav class="navbar" style="background-color:#26204E; padding:2%">
                    <span class="navbar-brand" id="nombreUsuario" style="color:white;font-weight:bold;">Chat en Vivo</span>
                    <div id="botones">
                
                     </div>
                </nav>
            </div>
                
            <main id="contenidoProtegido" class="mt-3" style="height:45vh; overflow-y:scroll;">
            
           
            </main>

            <form class="form-control" id="formulario">
                <input type="text" class="form-control" placeholder="Enviar mensaje" id="inputchat">
                <div class="input-group-append">
                    <button class="btn btn-success" id="botonenviar" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection

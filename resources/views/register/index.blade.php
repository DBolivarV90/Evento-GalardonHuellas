@extends('layouts.master')

@section('content')

<style>

.formulario{
 
 background-color: #56497A; opacity: 0.7;
 

}

.register-button{
background-color: #26204E;
color: white;

}
.formulario::placeholder{

    color:white;
}

.cronometro{

    
    height: auto;
    margin-top: 4%;
    color: white;
    font-size: 1.8em!important;
    font-weight: bold;
}
.cuenta-regresiva{

    border: solid;
    margin-top: 15px;
    padding: 2% 5% 2% 5%;;
    text-align: center;
}
@media only screen and (max-width: 1024px) {
.form-principal
{
    margin-top:30px!important;
}
.imagen-carruselprincipal{

    width: 100%!important;
    height: auto!important;
}
.register-word{
    text-align: center!important;
    width:70%!important;
    margin: 0;

}
.register-logos{

    width: 80%!important;
    margin:0;

}
.banner-ingresa-evento{
    width: 120% !important;
    margin-left: -34px!important;

}

}
</style>

<div class="container">
<div class="row">
   
   <div class="row cronometro">
        <div class="col-md-12" style="text-align:center;">
            <a href="https://evento.galardonhuellas.com/login"><img src="{{ asset('imagenes/abannerLanding.png') }}" alt="Ingresa-Evento" width="100%" class="banner-ingresa-evento"></a>
        </div>
    </div>


    <div class="row" style="margin-top: 4%; padding: 0;">
        

        <div class="col-md-5 col-12 form-principal" style="padding: 0% 5% 0 5%;">
            <div class="row">
                <div class="col-md-5 register-word"><img src="{{ asset('imagenes/Recurso-14-e1624555088157.png') }}" alt="registrate" width="110%" style="margin-top: 24px;"></div>
                <div class="col-md-7 register-logos" style="text-align: left"><img src="{{ asset('imagenes/Huellas-LogoFormularioSuperior.png') }}" alt="registrate" width="110%" height="auto" style="margin-left: -10px;"></div>
            </div>
        <form action="{{route('register.store')}}" method="POST">
                            <div class="row">
                                <div class="col-12" style="margin-bottom:10px">
                                <input type="text" name="name" class="form-control formulario" placeholder="Nombre" required>
                                
                                </div>
                                <div class="col-12" style="margin-bottom:10px">
                                <input type="text" name="last_name" class="form-control formulario" placeholder="Apellido" required>
                                
                                </div>

                                <div class="col-12" style="margin-bottom:10px">
                                <input type="text" name="address" class="form-control formulario" placeholder="Direccion" required>
                                </div>

                                <div class="col-12" style="margin-bottom:10px">
                                <input type="text" name="company" class="form-control formulario" placeholder="Empresa" required>
                                </div>


                                <div class="col-12" style="margin-bottom:10px">
                                <input type="email" name="email" class="form-control formulario" placeholder="Correo electronico" required>
                                </div>

                                <div class="col-12" style="margin-bottom:10px">
                                <input type="text" name="number_phone" class="form-control formulario" placeholder="telefono celular" required>
                                </div>

                                <div class="col-12" style="margin-bottom:10px">
                                <input type="text" name="twitter" class="form-control formulario" placeholder="Twitter">
                                </div>

                                <div class="col-12" style="margin-bottom:10px" >
                                <label><input type="checkbox" id="cbox1" value="first_checkbox" style="#56497A; opacity: 0.7;" required> Acepto Términos y condiciones </label><br>
                                </div>
                               <div class="col-12"><h2>{{ $message }}</h2></div>  

                                <div class="col-12" style="margin-bottom:10px">
                                @csrf
                                <button type="submit" class="btn btn-primary register-button" >Registrar</button>
                            </div>
                        </div>
                    </form>
        </div>
        <div class="col-md-7 col-12" style="padding: 0% 5% 0 5%; margin-top:10px">
        <!--Empieza el codigo del Carousel-->
                    <br><br><br>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                            <img src="{{ asset('imagenes/Landing-Panel.jpg') }}" class="d-block w-100 imagen-carruselprincipal" alt="first-image" width="534" height="300px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/ACM_GH_Landing-02.jpg') }}" class="d-block w-100 imagen-carruselprincipal" alt="first-image" width="auto" height="300px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/ACM_GH_Landing-03.jpg') }}" class="d-block w-100 imagen-carruselprincipal" alt="second-image" width="auto" height="300px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/ACM_GH_Landing-04.jpg') }}" class="d-block w-100 imagen-carruselprincipal" alt="thrid-image" width="auto" height="300px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/ACM_memoLanding_Mesa_de_trabajo_1.jpg') }}" class="d-block w-100 imagen-carruselprincipal" alt="thrid-image" width="auto" height="300px">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


        <!--Termina el codigo del carousel-->
        </div>
    </div>

</div>
<br><br>

    <hr style=" background-color:#26204E; opacity:1"size=4 >
    
</div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
      document.addEventListener('DOMContentLoaded', () => { 

        //===
        // VARIABLES
        //===
        const DATE_TARGET = new Date('07/30/2021 8:00 AM');
        // DOM for render
        const SPAN_DAYS = document.querySelector('span#days');
        const SPAN_HOURS = document.querySelector('span#hours');
        const SPAN_MINUTES = document.querySelector('span#minutes');
        const SPAN_SECONDS = document.querySelector('span#seconds');
        // Milliseconds for the calculations
        const MILLISECONDS_OF_A_SECOND = 1000;
        const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
        const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
        const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

        //===
        // FUNCTIONS
        //===

        /**
        * Method that updates the countdown and the sample
        */
        function updateCountdown() {
            // Calcs
            const NOW = new Date()
            const DURATION = DATE_TARGET - NOW;
            const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
            const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
            const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
            const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
            // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

            // Render
            SPAN_DAYS.textContent = REMAINING_DAYS;
            SPAN_HOURS.textContent = REMAINING_HOURS;
            SPAN_MINUTES.textContent = REMAINING_MINUTES;
            SPAN_SECONDS.textContent = REMAINING_SECONDS;
        }

        //===
        // INIT
        //===
        updateCountdown();
        // Refresh every second
        setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
    });
    </script>
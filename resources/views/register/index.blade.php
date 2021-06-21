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
.carousel-control-prev{
    background-color: #26204E;
    border-radius: 150px;
    height: 40px;
    width: 40px;

}
.carousel-control-next{
    background-color: #26204E;
    border-radius: 150px;
    height: 40px;
    width: 40px;
    display: flex;
    
}
.cronometro{

    background-color: #4ecc8a;
    height: auto;
    margin-top: 4%;
}
@media only screen and (max-width: 1024px) {
.form-principal
{
    margin-top:30px!important;
}
}
</style>

<div class="container">
<div class="row">
   
   <div class="row cronometro">
        <div class="col-md-7 col-12" style="text-align:center;">
            <img src="https://www.galardonhuellas.com/wp-content/uploads/2021/06/Recurso-13-e1624211927373.png" alt="etiqueta-cronometro" width="75%" height="auto">
        </div>
        <div class="col-md-5 col-12">
           
            <div id="timer">Hello</div>
            <button id="start">Start</button>

        </div>
    </div>


    <div class="row" style="margin-top: 4%; padding: 0;">
        <div class="col-md-7 col-12" style="padding: 0; margin-top:10px">
        <!--Empieza el codigo del Carousel-->
                    <br><br><br>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                            <img src="https://www.galardonhuellas.com/wp-content/uploads/2021/04/KVhHorizontal.png" class="d-block w-100" alt="first-image" width="auto" height="300px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.galardonhuellas.com/wp-content/uploads/2021/04/Emprendedora.png" class="d-block w-100" alt="second-image" width="auto" height="300px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.galardonhuellas.com/wp-content/uploads/2021/04/embajadoradeEmpresasMineras-1.png" class="d-block w-100" alt="thrid-image" width="auto" height="300px">
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

        <div class="col-md-5 col-12 form-principal" style="padding: 0% 5% 0 5%;">
        <img src="https://www.galardonhuellas.com/wp-content/uploads/2021/06/Recurso-14.png" alt="registrate">
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
                                <input type="text" name="twitter" class="form-control formulario" placeholder="Twitter" required>
                                </div>

                                <div class="col-12" style="margin-bottom:10px">
                                <label><input type="checkbox" id="cbox1" value="first_checkbox" style="#56497A; opacity: 0.7;"> Acepto Términos y condiciones </label><br>
                                </div>
                            

                                <div class="col-12" style="margin-bottom:10px">
                                @csrf
                                <button type="submit" class="btn btn-primary register-button" >Registrar</button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>

</div>
<br><br>
    
    <hr style=" background-color:#26204E; opacity:1"size=4 >
    
</div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function incTimer() {
        var currentMinutes = Math.floor(totalSecs / 60);
        var currentSeconds = totalSecs % 60;
        if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
        if(currentMinutes <= 9) currentMinutes = "0" + currentMinutes;
        totalSecs++;
        $("#timer").text(currentMinutes + ":" + currentSeconds);
        setTimeout('incTimer()', 1000);
    }

    totalSecs = 0;

    $(document).ready(function() {
        $("#start").click(function() {
            incTimer();
        });
    });
</script>
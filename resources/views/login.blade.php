@extends('plantilla')

@section('title', 'Iniciar sesion - ChocoDelii')

@section('content')
   
    <br><br>
        <div class="row">
            <div class="col m2 l3 s0 "></div>
            <form action="{{ route('inicia.sesion') }}" method="POST" class="col l6 m8 s12">

            @csrf 
                <div class="row card-panel">

                    <center><b>Iniciar sesion</b></center>
                    <div class="input-field col s12">
                        <input id="correo" name="correo" type="email" value="{{ old('correo') }}" requiered autofocus class="validate  brown lighten-5" 
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ingresa un formato de correo electronico valido">
                        <label for="correo">Correo electronico:</label>
                        <small style="color: red;">@error('correo') {{ $message }} @enderror</small> 

                    </div>

                    <div class="input-field col s11">
                        <input id="contrasena" name="contrasena" value="{{ old('contrasena') }}" required type="password" class="validate  brown lighten-5" >
                        <label for="contrasena">Contraseña:</label>
                    </div>
                    <div class="col s1">
                        <button style="background-color: #fff; border:#fff; cursor:pointer;" type="button" onclick="mostrarContrasena()">
                            <i class="material-icons ">remove_red_eye</i></button>
                    </div>
                    <div class="col s12"><small style="color: red;">@error('contrasena') {{ $message }} @enderror</small> </div>

                    <center><input class="btn  brown darken-2" type="submit" value="Iniciar sesion"></input></center>

                    <br>

                    <center> ¿No tienes una cuenta?  <a class="" href="{{ route('user.registro') }}">Registrarse aqui</a></center>

                </div>

                

            </form>
        </div>

    

        <br><br>
    <script>
        function mostrarContrasena(){
            var tipo = document.getElementById("contrasena");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
    </script>
@endsection

@extends('plantilla')

@section('title', 'Registrarse - ChocoDeli')

@section('content')
    

    <div class="row ">
    
        <form action="{{ route('validar.registro') }}" id="" method="POST" class="col s12">

            @csrf 
            <div class="row card-panel">

                <center><b>Registrarse</b></center>
                <div class="input-field col s12">
                    <input id="nombre" type="text" value="{{ old('nombre') }}" name="nombre" class="validate" required title="Solo se pueden colocar letras">
                    <label for="nombre">Nombre:</label>
                    <small style="color: red;">@error('nombre') {{ $message }} @enderror</small> 
                </div>

                <div class="input-field col s12">
                    <input id="correo" name="correo" type="email" value="{{ old('correo') }}" class="validate" required
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ingresa un correo electronico valido">
                    <label for="correo">Correo electronico:</label>
                    <small style="color: red;">@error('correo') {{ $message }} @enderror</small> 
                </div>

                <div class="input-field col  s11">
                    <input id="contrasena" name="contrasena" value="{{ old('contrasena') }}" type="password" class="validate" required
                        pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,}$" title="La contraseña debe contener al menos una letra mayuscula, 
                        una letra miniscula, un numero, un caracter especial y una longitud de al menos 8 caracteres">
                    <label for="contrasena">Contraseña:</label>
                    <small style="color: red;">@error('contrasena') {{ $message }} @enderror</small> 
                </div>
                <div class="col m1 l1 s1">
                    <button style="background-color: #fff; border:#fff; cursor:pointer;" type="button" onclick="mostrarContrasena()"><i class="material-icons ">remove_red_eye</i></button>
                </div>




                <center><button class="btn waves-effect waves-light" type="submit" onclick="" value="">Registrarse
                    <i class="material-icons left">
                        person_add
                    </i>
                </button></center>

                <br>

                <center>¿Ya tienes una cuenta? <a class="" href="{{ route('user.login') }}">Inicia sesion aqui</a></center>

            </div>

            

        </form>
    </div>

    


    <script>

        function mostrarContrasena(){
            var tipo = document.getElementById("contrasena");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
        function mostrarContrasena2(){
            var tipo = document.getElementById("contra");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }

    </script>
@endsection

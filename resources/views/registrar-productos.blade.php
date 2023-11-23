@extends('plantilla')

@section('title', 'Agregar Productos - ChocoDeli')

@section('content')
    <div class="row">
            <form action="{{ route('productos.store') }}" enctype="multipart/form-data" method="POST" class="col s12">

            @csrf 
                <div class="row card-panel">

                    <center><b>Agregar un producto</b></center>
                    <strong style="color: red;">@error('g-recaptcha-response') {{ $message }} @enderror</strong>
                    <div class="input-field col s12">
                        <input id="nombre" type="text" value="{{ old('nombre') }}" name="nombre" class="validate" required
                        minlength="5" maxlength="255" title="El nombre debe tener al menos una longitud de 5 letras y maximo 255">
                        <label for="nombre">Nombre:</label>
                        <strong style="color: red;">@error('nombre') {{ $message }} @enderror</strong> 
                    </div>
                    
                    <div class="input-field col s12">
                        <input id="descripcion" type="text" value="{{ old('descripcion') }}" name="descripcion" class="validate" required
                        minlength="10" maxlength="255" title="La descripcion debe tener al menos una longitud de 10 letras y maximo 255">
                        <label for="descripcion">Descripcion:</label>
                        <strong style="color: red;">@error('descripcion') {{ $message }} @enderror</strong> 
                    </div>

                    <div class="input-field col s12">
                        <input id="precio" name="precio" type="number" value="{{ old('precio') }}" class="validate" 
                        pattern="^(?:[1-9]|[1-9][0-9]|100)$" required>
                        <label for="precio">Precio:</label>
                        <strong style="color: red;">@error('precio') {{ $message }} @enderror</strong> 
                    </div>

                    <div class="input-field col s12">
                        <input id="ingredientes" type="text" value="{{ old('ingredientes') }}" name="ingredientes" class="validate" required
                        minlength="10" maxlength="255" title="Los ingredientes debe tener al menos una longitud de 10 letras y maximo 255">
                        <label for="ingredientes">Ingredientes:</label>
                        <strong style="color: red;">@error('ingredientes') {{ $message }} @enderror</strong> 
                    </div>

                    <div class="file-field input-field col s12">
                        <div class="btn brown-effect brown darken-4">
                            <span>Imagen</span>
                            <input type="file" required name="imagen" id="imagen" onchange="vistaPreliminar(event)" accept=".jpeg,.jpg,.png">
                        </div>
                        <div class="file-path-wrapper">
                            <input required class="file-path validate" type="text">
                        </div>
                        <strong style="color: red;">@error('imagen') {{ $message }} @enderror</strong> 
                    </div>

                    <div style="display: none" id="div-imagen" class="col s12">
                        <center><img src="" width="300px" height="225px" alt="" id="img-foto"></center>
                    </div>


                    <center><button class="btn brown-effect brown darken-4" type="submit" value="">Agregar
                        <i class="material-icons left">
                            create
                        </i>
                    </button></center>

            
                </div>

        </form>
    </div>
    
@endsection

@section('scripts')

    <script>
        let vistaPreliminar = (event)=>{
            let leer_img = new FileReader();
            let id_img = document.getElementById('img-foto');
            document.getElementById('div-imagen').style.display = 'block';
            leer_img.onload = ()=>{
                if(leer_img.readyState==2){
                    id_img.src = leer_img.result;
                }
            }
            leer_img.readAsDataURL(event.target.files[0])
        }
    </script>
@endsection
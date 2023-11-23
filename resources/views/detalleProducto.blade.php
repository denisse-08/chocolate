@extends('plantilla')

@section('title', 'Productos - ChocoDeli')

@section('content')

    <div class="row ">
        <form action="" method="get" class="col l6 m6 s12">
        </form>

        <div class="col m0 l1 s0 "></div>
        
        <form action="{{ route('busqueda.simple') }}" method="get" class="col l5 m6 s12">
            <div class="row ">
                <div class="input-field col s11">
                    <input id="nombre" name="nombre" type="text" class="validate" required>
                    <label for="nombre">Buscar Producto:</label>
                </div>
                <div class="col s1">
                    <button style="background-color: #fff; border:#fff; cursor:pointer;" type="submit" value=""><i class="material-icons medium">search</i></button>
                </div>
            </div>
        </form>
    </div>
        
    <div id="productos" class="row">
        <div class="col s12">
            <div class="row z-depth-2 section contProductos">
                <div class="col s12 m4 l3">
                    <img class="responsive-img" src="{{ asset($producto->imagen) }}">
                </div>
                <div class="col s12 m8 l9">
                    <h4 class="black-text">{{$producto->nombre}}</h4>
                    <p>{{$producto->descripcion}}</p>
                    <h5>$ {{$producto->precio}}</h5>
                    <h6>Color: {{$producto->color}}</h6>
                    <h6>Stok: {{$producto->stok}} disponibles</h6>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="row">
        <center><h4>Reseñas de este producto</h4></center>
        @guest
            <center> Para poder escribir una reseña <a class="" href="{{ route('user.login') }}">Inicia sesion</a></center>
        @endguest
        @auth
        <div class="col s12">
            <div class="row ">      
                <form action="{{ route('calificar') }}" id="" method="POST" class="col s12">
                    @csrf 
                    <div class="row card-panel">
                        <center><b>Escribe una reseña</b></center>
                        <input type="hidden" name="producto" value="{{$producto->id}}">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" value="{{ old('titulo') }}" name="titulo" class="validate" required>
                            <label for="titulo">Titulo:</label>
                            <small style="color: red;">@error('titulo') {{ $message }} @enderror</small> 
                        </div>
                        <div class="input-field col s12">
                            <input id="descripcion" type="text" value="{{ old('descripcion') }}" name="descripcion" class="validate" required>
                            <label for="descripcion">Experiencia:</label>
                            <small style="color: red;">@error('descripcion') {{ $message }} @enderror</small> 
                        </div>

                        <div class="input-field col s12 ">
                            <select id="calificacion" name="calificacion">
                                <option value="1">1 estrellas</option>
                                <option value="2">2 estrellas</option>
                                <option value="3">3 estrellas</option>
                                <option value="4">4 estrellas</option>
                                <option value="5">5 estrellas</option>
                            </select>
                            <label>Calificacion</label>
                        </div>

                        <center><button class="btn waves-effect waves-light" type="submit" onclick="" value="">Comentar
                            <i class="material-icons left">
                            forum
                            </i>
                        </button></center>
                    </div>
                </form>
            </div>
        </div>
        @endauth
        <div class="col s12">
            @if (count($comentarios) == 0)
                <h5>No se encontraron reseñas</h5>
            @else
                @foreach ($comentarios as $comentario)
                    <div class="row z-depth-2 section">
                        <div class="col s12 m4 l3">
                            <img class="responsive-img" src="{{ asset('img/hombre.png') }}">
                        </div>
                        <div class="col s12 m8 l9">
                            <h4 class="black-text">{{$comentario->titulo}}</h4>
                            <p>{{$comentario->comentario}}</p>
                            <h6>Cliente: {{$comentario->name}}</h6>
                            <h6>Calificacion: {{$comentario->estrellas}} estrellas</h6>
                            <h6>{{$comentario->created_at}}</h6>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>


@endsection

@section('scripts')
    @if (session('info'))
        <script>
            M.toast({
                html: '{{ session("info")}} ',
                classes: 'black',
                displayLength: 3000,
            })
        </script>
    @endif
@endsection
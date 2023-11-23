@extends('plantilla')

@section('title', 'ChocoDeli')

@section('content')

    <div class="container">
    <h2>Quiénes Somos</h2>
    
    <p><strong>Nuestra Historia</strong><br>
    Bienvenidos a la Chocolatería de la Huasteca, un lugar donde el arte y la tradición se fusionan para ofrecerte una experiencia única en cada bocado. Fundada en el corazón de la exuberante región de la Huasteca, nuestra chocolatería tiene sus raíces en una pasión compartida por el cacao de alta calidad y el deseo de compartir la riqueza cultural de México a través del chocolate.</p>

    <p><strong>Nuestra Pasión</strong><br>
    En la Chocolatería de la Huasteca, nuestro compromiso con la excelencia se refleja en cada etapa de nuestro proceso de elaboración. Desde la selección de los granos de cacao más finos hasta la cuidadosa elaboración artesanal de nuestros productos, nos esforzamos por ofrecer un chocolate que no solo deleita el paladar, sino que también cuenta una historia: la historia de la tierra, la historia de nuestra gente y la historia de una tradición centenaria.

</p>

    <p><strong>Nuestra Misión</strong><br>
    Nos enorgullece trabajar en estrecha colaboración con agricultores locales, respetando y valorando sus conocimientos ancestrales sobre el cultivo del cacao. Buscamos promover prácticas sostenibles que beneficien a las comunidades locales y al medio ambiente, asegurando la preservación de esta invaluable herencia para las generaciones futuras.


</p>

    <p><strong>Nuestros Productos</strong><br>
Desde exquisitas tabletas de chocolate con sabores auténticos de la región hasta indulgentes bebidas de cacao, cada uno de nuestros productos es cuidadosamente elaborado para ofrecerte una experiencia sensorial inigualable. Nos enorgullecemos de ofrecer variedades que van desde el intenso chocolate negro hasta el suave y reconfortante chocolate con leche, todo ello creado con los mejores ingredientes.    
</p>

    <p><strong>Únete a Nosotros</strong><br>
Nos encanta compartir nuestra pasión por el chocolate y la cultura de la Huasteca. Únete a nosotros en este viaje delicioso y emocionante a través del mundo del cacao, donde cada visita a nuestra chocolatería es una invitación a sumergirse en la magia de los sabores y aromas únicos que solo la Chocolatería de la Huasteca puede ofrecer.
</p>

    <p><em>¡Gracias por ser parte de nuestra historia!</em></p>
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
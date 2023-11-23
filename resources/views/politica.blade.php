@extends('plantilla')

@section('title', 'ChocoDeli')

@section('content')

    <header>
        <h1>Política de Privacidad</h1>
    </header>

    <section>
        <h2>Información que recopilamos</h2>
        <p>En nuestra tienda de chocolates, recopilamos la siguiente información:</p>
        <ul>
            <li>Información personal como nombre, dirección y dirección de correo electrónico cuando realizas una compra.</li>
            <li>Información de pago al realizar transacciones en nuestra tienda.</li>
            <li>Información demográfica que nos proporcionas voluntariamente, como preferencias de productos.</li>
        </ul>
    </section>

    <section>
        <h2>Cómo utilizamos la información</h2>
        <p>Utilizamos la información recopilada para:</p>
        <ul>
            <li>Procesar y completar tus pedidos de chocolates.</li>
            <li>Enviar actualizaciones sobre ofertas, nuevos productos o eventos especiales si te has suscrito a nuestro boletín.</li>
            <li>Mejorar nuestros productos y servicios mediante análisis de datos y retroalimentación del cliente.</li>
        </ul>
    </section>

    <section>
        <h2>Compartir información con terceros</h2>
        <p>No compartimos tu información personal con terceros sin tu consentimiento, excepto cuando sea necesario para procesar tu pedido o cumplir con requisitos legales.</p>
    </section>

    <section>
        <h2>Cómo protegemos tu información</h2>
        <p>Implementamos medidas de seguridad para proteger tu información contra accesos no autorizados y aseguramos que nuestros socios cumplan con estándares de seguridad similares.</p>
    </section>

    <section>
        <h2>Tus derechos</h2>
        <p>Tienes el derecho de acceder, corregir o eliminar tu información personal. Si deseas ejercer alguno de estos derechos, por favor contáctanos.</p>
    </section>

    <footer>
        <p>Esta política de privacidad está sujeta a cambios. La última actualización se realizó en [fecha].</p>
    </footer>

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
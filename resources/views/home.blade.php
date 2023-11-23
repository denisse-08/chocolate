@extends('plantilla')

@section('title', 'ChocoDeli')

@section('content')

    <div class="row">
        <div class="col s12">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('slider/slider01.JPG') }}"> 
                    </li>
                    <li>
                        <img src="{{ asset('slider/slider02.png') }}"> 
                    </li>
                    <li>
                        <img src="{{ asset('slider/slider02.webp') }}"> 
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.slider');
            var instances = M.Slider.init(elems,{
                duration: 600,
                interval: 3000,
                height: 600
            });
        });
    </script>

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
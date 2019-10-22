@extends('layouts.app')

@section('titulo')
    {{$presentacion->obra->nombre}} 
@endsection

@section('recursos')
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('js/teatro.js') }}" defer></script>
@endsection

@section('contenido')
<section class=" pt100 pb50">
        <div class="container">
            <div class="row mb-3">
                <div class="col-3">
                    <img src="{{asset('storage/'.$presentacion->poster)}}" alt="" class="img-thumbnail">
                </div>
                <div class=" col-lg-8 ml-2">
                    <div class="mb-2 sp-title"> 
                        <h1> <span>{{$presentacion->obra->nombre}}</span></h1>
                    </div>
                    <div>
                            <a class="enlace" href="/teatro/{{$presentacion->teatro->id}}"> <h6>{{$presentacion->teatro->nombre}}</h6></a>
                    </div>
                    <div>
                        <h6>Desde {{date('d-M-y', strtotime($presentacion->fecha_inicio))}} hasta {{date('d-M-y', strtotime($presentacion->fecha_fin))}}</h6>
                    </div>
                    @if($presentacion->obra->sinopsis)
                        <div>
                            <blockquote>
                                <p><strong> Sinopsis: </strong> {{$presentacion->obra->sinopsis}}</p>
                            </blockquote>
                            
                        </div>
                    @endif
                    @if($presentacion->reparto)
                        <div>
                            <p><strong>Reparto: </strong>{{$presentacion->reparto}}<p> 
                        </div>
                    @endif
                </div>
            </div>
        </div>
@if(strlen($presentacion->imagenes) > 2)
    <hr>
        <div class="mt-3 container">
                <div> 
                    <h3 class="sub-line">Galería</h3>
                </div>
                <div>
                    <div class=" row col-12 owl-carousel owl-theme">
                        @foreach(json_decode($presentacion->imagenes) as $url_imagen)
                        <div>
                            <img src="{{Voyager::image($url_imagen)}}" alt="" class="galeria" >
                        </div>
                        @endforeach
                    </div>   
                </div>
            </div>
</section>
@endif

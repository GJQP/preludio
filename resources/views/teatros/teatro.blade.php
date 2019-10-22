@extends('layouts.app')

@section('titulo')
    {{$teatro->nombre}}
@endsection

@section('recursos')
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('js/teatro.js') }}" defer></script>
@endsection

@section('contenido')
<section class="intro-section pt100 pb-4">
		<div class="container">
			<div class="row mb-3">
				<div class="col-lg-4 pt-4">
                    <img src="{{asset('storage/'.json_decode($teatro->imagenes)[0])}}" alt="">
                </div>
                <div class="col-lg-7 mr-3 ml-3">
                    <div class="sp-title mb-2">
                        <h2><span>{{$teatro->nombre}}</span></h2>
                    </div>
                    <div>
                        <p><strong>Teléfono: </strong>{{$teatro->telefono}}</p>
                    </div>
                    <div>
                        <blockquote>
                            <p>{{$teatro->direccion}}</p>
                        </blockquote>
                    </div>
                    @if(($teatro->facebook)||($teatro->twitter)||($teatro->instagram))
                        <div class="derecha mt-5 ">
                            @if($teatro->facebook)
                                <a href="{{$teatro->facebook}}" class=""><i class="fab fa-facebook rs" ></i></a>
                            @endif
                            @if($teatro->twitter)
                               <a href="{{$teatro->twitter}}"><i class="fab fa-twitter rs" style="font-size:30px"></i></a>
                            @endif
                            @if($teatro->instagram)
                              <a href="{{$teatro->instagram}}"><i class="fab fa-instagram rs" style="font-size:30px"></i></a>
                            @endif
                        </div>
                    @endif
                </div>
			</div>
		</div>
</section>
@if($teatro->imagenes)
<br>
<section class="pt-3 pb-4">
		<div class="container">
            <div>
                <h2 class="sub-line">Galería</h2>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach(json_decode($teatro->imagenes) as $url_imagen)
                            <div >
                                    <img src="{{asset('storage/'.$url_imagen)}}" alt="Foto teatro {{$teatro->nombre}}" class="galeria">
                            </div>
                        @endforeach
                </div>

            </div>
        </div>
</section>
@endif

@if(count($teatro->presentaciones) <> 0)

    <br>
    <section class="pt-4 pb-4">
            <div class="container">
                    <div>
                            <h2 class="enlace">Presentaciones</h2>
                    </div>
                    <div class="row ">
                        <div class="owl-carousel owl-theme">
                            @foreach($teatro->presentaciones as $presentacion)
                                <div>
                                    <a href="{{route('presentacionesTeatro', $teatro)}}"> <img src="{{asset('storage/'.$presentacion->poster)}}" alt="Poster de {{$presentacion->obra->nombre}}" class="galeria"></a>
                                </div>
                            @endforeach
                        </div>

                    </div>
            </div>
    </section>

@else
    <hr>
    <section class="pt-4 pb-4">
            <div class="container"> 
                 <div>
                        <h2 class="sub-line">Presentaciones</h2>
                </div>
                <p class="mt-1">El Teatro no posee presentaciones actualmente</p>
            </div>
    </section>
@endif
@endsection


@extends('layouts.app')

@section('titulo')
            Inicio
@endsection

@section('recursos')
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('js/teatro.js') }}" defer></script>
@endsection

@section('contenido')
<!-- Intro section start -->
<section class="intro-section pt100 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 intro-text mb-5 mb-lg-0">
					<h2 class="sp-title">La <span>Cultura</span> en tus manos </h2>
					<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellentesque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris malesuada, accumsan pellentesque ipsum. Nunc dapibus, libero ut pulvinar accumsan, tortor nisl iaculis ligula. Curabitur finibus dolor vel lectus pretium interdum a eget ante. Morbi rhoncus feugiat imperdiet. Curabitur non maximus leo. Nulla in ipsum sed magna egestas bibendum. Integer in sem sagittis, commodo mi sit amet, commodo nibh. Suspendisse potenti. Aliquam erat volutpat. </p>
					{{-- <a href="#" class="site-btn sb-dark">See Project</a> --}}
				</div>
				<div class="col-lg-5 pt-4">
					<img src="img/intro.png" alt="">
				</div>
			</div>
		</div>
	</section>
    <!-- Intro section end -->


    <!-- SECCION TEATROS -->
    <section class="page-header-section reduce set-bg" data-setbg="img/header-bg-2.jpg">
        <div class="container">
           <a href="{{ action('TeatrosController@index') }}" class="linkHeader"><h1 class="header-title">Teatros<span>.</span></h1></a> 
        </div>
    </section> 
    <section class="intro-section pt100 pb50">
            <div class="container">
                    <div class="row">
                      
                    @if ($teatros->contains(1))
                        <div class="owl-carousel owl-theme">
                            @foreach($teatros as $teatro)
                            <div class="card text-center">
                                <a href="/teatro/{{$teatro->id}}">
                                    <img src="{{asset('storage/'. json_decode($teatro->imagenes)[0])}}" class="card-img-top" alt="Imagen del teatro">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title">{{ $teatro->nombre }}</h6>
                                    <a href="{{route('presentacionesTeatro', $teatro)}}"
                                    class="card-link stretched-link font-weight-light">Presentaciones</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <h3>No hay teatros registrados!</h3>
                    @endif
                    
                        
                    </div>
                </div>
            </section>
    </section>




    <!-- SECCION PRESENTACIONES -->
    <section class="page-header-section reduce set-bg" data-setbg="img/header-bg.jpg">
        <div class="container">
                <a href="{{ action('PresentacionesController@index') }}" class="linkHeader"><h1 class="header-title">Presentaciones<span>.</span></h1></a>
        </div>
    </section> 
    <section class="intro-section pt100 pb50">
            <div class="container">
                    <div class="row">
                    @if ($presentaciones->contains(1))
                        <div class="owl-carousel owl-theme">
                        @foreach ($presentaciones as $presentacion)
                            <div class="card">
                            <a href="/presentacion/{{$presentacion->id}}"><img src="{{asset('storage/'.$presentacion->poster)}}" class="card-img-top" alt="Imagen del teatro"></a>
                                <div class="card-body">
                                    <h6 class="card-title"> {{$presentacion->obra->nombre}} </h6>
                                    <h6 class="card-subtitle mb-2 text-muted">Hasta {{ date('d-M-y', strtotime($presentacion->fecha_fin))}}</h6> 
                                    <h6 class="card-subtitle mb-2 text-muted">{{$presentacion->teatro->nombre}}</h6>
                                    <div class="text-center">
                                    <a href="/presentacion/{{$presentacion->id}}" class="card-link stretched-link">Ver</a>
                                    </div>

                                </div>
                            </div>
                        @endforeach    
                        </div>
                    @else
                        <h3>No hay presentaciones programadas!</h3>
                    @endif
                        
                    </div>
                </div>
            </section>
    </section>
@endsection

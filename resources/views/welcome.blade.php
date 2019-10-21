
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
    <section class="page-header-section set-bg" data-setbg="img/header-bg-2.jpg">
        <div class="container">
            <h1 class="header-title">Teatros<span>.</span></h1>
        </div>
    </section>
    
    <section class="intro-section pt100 pb50">
            <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="card text-center">
                                    <a href="/teatro/1"><img src="img/cta-img.jpg" class="card-img-top" alt="Imagen del teatro"></a>
                                    <div class="card-body">
                                        <h6 class="card-title">NOMBRE DE TEATRO {{ $i }}</h6>
                                        <a href="#" class="card-link stretched-link font-weight-light">Presentaciones</a> 
                                    </div>
                                </div>
                            @endfor
                            
                        </div>
                        
                    </div>
                </div>
            </section>
    </section>


<!-- SECCION PRESENTACIONES -->
    <section class="page-header-section set-bg" data-setbg="img/header-bg.jpg">
        <div class="container">
            <h1 class="header-title">Presentaciones<span>.</span></h1>
        </div>
    </section>
    
    <section class="intro-section pt100 pb50">
            <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="card">
                                    <a href="/presentacion/1"><img src="img/Los-Miserables.png" class="card-img-top" alt="Imagen del teatro"></a>
                                    <div class="card-body">
                                        <h6 class="card-title">Nombre de presentacion {{ $i }}</h6>
                                        <h6 class="card-subtitle mb-2 text-muted">Hasta ##/##/####</h6>
                                        <h6 class="card-subtitle mb-2 text-muted">TEATRO</h6>
                                        <div class="text-center">
                                            <a href="/presentacion/1" class="card-link stretched-link">Ver</a> 
                                        </div>
                                       
                                    </div>
                                </div>
                            @endfor
                            
                        </div>
                        
                    </div>
                </div>
            </section>
    </section>
@endsection

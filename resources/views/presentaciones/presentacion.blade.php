@extends('layouts.app')

@section('titulo')
    Teatro 1
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
			<div class="row">
				<div class="col-lg-4 pt-4">
                    <img src="/img/paseo-nueva.png" alt="">
                </div>   
                <div class="col-lg-7 mr-3 ml-3">
                    <div class="sp-title mb-2"> 
                         <h2> <span>Paseo las Mercedes</span> </h2> 
                    </div>
                    <div> 
                        <p><strong>Teléfono:</strong> 0424-1844392</p>
                    </div>
                    <div>
                        <blockquote>
                            <p>ipsum dolor, sit amet consectetur adipisicing elit. Tempore aliquam minima eius porro magnam, numquam impedit cumque consectetur! Consectetur amet tenetur aperiam earum eius dicta ea dolorem quo incidunt itaque! </p>
                        </blockquote>
                    </div>
                </div>
			</div>
		</div>
</section>
<br>
<section class="pt-3 pb-4">
		<div class="container">
            <div>
                <h2 class="sub-line">Galería</h2>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
                        <div >
                                <img src="/img/intro.png" alt="" class="img-thumbnail">
                        </div>
                            <div >
                                <img src="/img/referencia.png" alt="" class="img-thumbnail">
                            </div>
                            <div >
                                <img src="/img/intro.png" alt="" class="img-thumbnail">
                            </div>
                            <div >
                                <img src="/img/trasnocho.png" alt="" class="img-thumbnail">
                            </div>
                            <div >
                                <img src="/img/intro.png" alt="" class="img-thumbnail">
                            </div>
                            <div >
                                <img src="/img/trasnocho2.png" alt="" class="img-thumbnail">
                            </div>
                </div>
                
            </div>    
        </div>
</section>
<br>
<section class="pt-4 pb-4">
        <div class="container">
                <div>
                        <h2 class="sub-line">Presentaciones</h2>
                </div>
                <div class="row ">
                    <div class="owl-carousel owl-theme">
                            <div >
                                    <img src="/img/Desesperados.png" alt="">
                                </div>
                                <div >
                                    <img src="/img/encuentro.png" alt="">
                                </div>
                                <div >
                                    <img src="/img/Los-Miserables.png" alt="">
                                </div>
                                <div >
                                    <img src="/img/Teatro.png" alt="">
                                </div>
                                <div >
                                    <img src="/img/poison.png" alt="">
                                </div>
                                <div >
                                    <img src="/img/Conyuges.png" alt="">
                                </div>
                    </div>
                       
                </div>     
        </div>
</section>
@endsection
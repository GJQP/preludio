@extends('layouts.app')

@section('titulo')
    Presentacion 
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
            <div class="row">
                <div class="col-3">
                    <img src="/img/Los-Miserables.png" alt="" class="img-thumbnail">
                </div>
                <div class=" col-lg-8 ml-2">
                    <div class="mb-2 sp-title"> 
                        <h1> <span>Los Miserables</span></h1>
                    </div>
                    <div>
                            <a class="enlace" href="/teatro/1" target="_blank"> <h6>Paseo Las Mercedes</h6></a>
                    </div>
                    <div>
                        <h6>Esto no seria lo mismo que nombre de presentacion?</h6>
                    </div>
                    <div>
                        <h6>Desde el 31 de Octubre hasta el 3 de Noviembre</h6>
                    </div>
                    <div>
                        <blockquote>
                            <p><strong> Sinopsis: </strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis similique autem nesciunt provident deleniti cum magnam eius totam quam. Nihil omnis aperiam praesentium doloribus rem velit alias facere, nam nesciunt.</p>
                        </blockquote>
                    </div>
                    <div>
                        <p><strong>Reparto: </strong> Mariana Rodriguez, Tomás El Fakih, Gustavo Quintana, Miguel de Olim, Andrés de Armas, Robert González</p>
                    </div>
                </div>
            </div>
        </div>
<hr>
        <div class="mt-3 container">
                <div> 
                    <h3 class="sub-line">Galería</h3>
                </div>
                <div>
                    <div class=" row col-12 owl-carousel owl-theme">
                        <div>
                            <img src="/img/Desesperados.png" alt="" class="galeria" >
                        </div>
                        <div>
                            <img src="/img/encuentro.png" alt="" class="galeria">
                        </div>
                        <div>
                            <img src="/img/trasnocho.png" alt="" class="galeria">
                        </div>
                        <div>
                            <img src="/img/Teatro.png" alt="" class="galeria">
                        </div>
                        <div>
                            <img src="/img/poison.png" alt="" class="galeria">
                        </div>
                        <div>
                            <img src="/img/Conyuges.png" alt="" class="galeria">
                        </div>
                    </div>   
                </div>
            </div>
</section>

@extends('layouts.app')

@section('titulo')
    Presentaciones
@endsection

@section('contenido')
<section class="intro-section pt100 pb50">
        <div class="container">
                <div class="row">
                    <div class="col-lg-7 intro-text"> 
                        <h2 class="sp-title">Presentaciones</h2> 
                    </div>
                    <div class="flex-cont">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="card text-center w33">
                                <img src="img/cta-img.jpg" class="card-img-top" alt="Imagen del teatro">
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
@endsection
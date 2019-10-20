@extends('layouts.app')

@section('titulo')
    Teatros
@endsection

@section('contenido')
<section class="page-header-section set-bg" data-setbg="img/header-bg-2.jpg">
    <div class="container">
        <h1 class="header-title">Teatros<span>.</span></h1>
    </div>
</section>

<section class="intro-section pt100 pb50">
        <div class="container">
                <div class="row">
                    <div class="flex-cont">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="card text-center w33">
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
@endsection
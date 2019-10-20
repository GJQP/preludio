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
                            <div class="card w33">
                                <a href="/presentacion/1"><img src="img/Los-Miserables.png" class="card-img-top" alt="Imagen del teatro"></a>
                                <div class="card-body">
                                    <h6 class="card-title">Nombre de presentacion {{ $i }}</h6>
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
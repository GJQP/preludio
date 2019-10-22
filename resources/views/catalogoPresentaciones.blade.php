@extends('layouts.app')

@section('titulo')
    Presentaciones
@endsection

@section('contenido')
<section class="page-header-section set-bg" data-setbg="img/header-bg.jpg">
    <div class="container">
        <h1 class="header-title">Presentaciones<span>.</span></h1>
        <h1 class="header-title"> @if (!empty($nombreTeatro))
                <small>{{$nombreTeatro}}</small>
            @endif</h1>
    </div>
</section>

<section class="intro-section pt100 pb50">
        <div class="container">
                <div class="row">
                    <div class="flex-cont">
                    @if ($presentaciones->contains(1))
                        @foreach ($presentaciones as $presentacion)
                            <div class="card w33">
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
                    @else
                        <h3>No hay presentaciones programadas!</h3>
                    @endif
                    </div>

                </div>
            </div>
        </section>
</section>
@endsection

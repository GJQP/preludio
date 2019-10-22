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
                        @foreach($teatros as $teatro)
                            <div class="card text-center w33">
                                <a href="/teatro/{{$teatro->id}}">
                                    <img src="{{asset('storage/'. json_decode($teatro->imagenes)[0])}}" class="card-img-top" alt="Imagen del teatro">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title">{{ $teatro->nombre }}</h6>
                                    <a href="#" class="card-link stretched-link font-weight-light">Presentaciones</a>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </section>
</section>
@endsection

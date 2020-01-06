@extends('layouts.app')

@section('titulo')
    {{$teatro->nombre}}
@endsection

@section('recursos')
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rating.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>var csrf_token = '{{ csrf_token() }}'</script>

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
                    <span><i class="fa fa-star text-warning"></i> {{ $promedio }}</span>
                    <div class="Body">
                        <div>
                            <p><strong>Teléfono: </strong>{{$teatro->telefono}}</p>
                        </div>
                        <div>
                            <blockquote>
                                <p>{{$teatro->direccion}}</p>
                            </blockquote>
                        </div>
                    </div>
                    @if(($teatro->facebook)||($teatro->twitter)||($teatro->instagram))
                        <div class="derecha mt-5 ">
                            @if($teatro->facebook)
                                <a href="{{$teatro->facebook}}" class=""><i class="fab fa-facebook rs"></i></a>
                            @endif
                            @if($teatro->twitter)
                                <a href="{{$teatro->twitter}}"><i class="fab fa-twitter rs" style="font-size:30px"></i></a>
                            @endif
                            @if($teatro->instagram)
                                <a href="{{$teatro->instagram}}"><i class="fab fa-instagram rs"
                                                                    style="font-size:30px"></i></a>
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
                            <div>
                                <img src="{{asset('storage/'.$url_imagen)}}" alt="Foto teatro {{$teatro->nombre}}"
                                     class="galeria">
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </section>
    @endif

    @if($presentaciones->isNotEmpty())

        <br>
        <section class="pt-4 pb-4">
            <div class="container">
                <div>
                    <h2 class="sub-line">Presentaciones</h2>
                </div>
                <div class="row ">
                    <div class="owl-carousel owl-theme">
                        @foreach($presentaciones as $presentacion)
                            <div>
                                <a href="{{route('presentacionesTeatro', $teatro)}}"> <img
                                        src="{{asset('storage/'.$presentacion->poster)}}"
                                        alt="Poster de {{$presentacion->obra->nombre}}" class="galeria"></a>
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

    <section class="pt-4 pb-5" id="reseña">
        <hr>
        <div class="container pb-2">
            <h2 class="sub-line">Comentarios</h2>
            <div class="container pt-2">
                @auth
                    <div>
                        <h4>Publicando como <span class="font-itallic">{{ $usuario->name }}</span></h4>
                    </div>
                    <form method="post" name="reseña" action="{{ route('post-resena') }}">
                        @csrf
                        <input type="hidden" name="tipo_objeto" value="teatro">
                        <input type="hidden" name="id_rel" value="{{$teatro->id}}">
                        <div class="row pl-3">
                            <div class="pt-1 reseña">
                                <h5 class="pr-2">Califique al Teatro: </h5>
                            </div>
                            <div class="rating">
                                @for($i = 1; $i <= 5; $i++)
                                    <label>
                                        <input type="radio" name="stars" value="{{ $i }}"/>
                                        @for($j = 0; $j < $i; $j++)
                                            <span class="icon">★</span>
                                        @endfor
                                    </label>
                                @endfor
                            </div>
                        </div>
                        <div>
                        <textarea type="text" name="comentario" class="comentario form-control"
                                  placeholder="Introduzca su reseña (opcional)"></textarea>
                        </div>
                        <button type="submit" class="right btn btn-primary">Comentar</button>
                    </form>
                @endauth
                @guest
                    <h6>Debes estar autenticado para poder realizar una reseña. <a
                            href="{{ action('HomeController@register') }}">Haz click aquí para
                            registrarte</a></h6>
                @endguest
            </div>
        </div>
    </section>

    <section class="pb-5" id="resenãs">
        @if($resenas->isNotEmpty())
            @foreach($resenas as $resena)
                <div class=" pt-1 container borde js-comentario">
                    <div class="row pl-3">
                        <h4 class="text-underlined">{{ $resena->user->name }}</h4>
                        <div class="pl-3 pt-1"><i> ({{ $resena->created_at->format('d/m/Y')  }})</i></div>
                        <div class="mover pl-2 rating">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $resena->calificacion)
                                    <span class="checked">★</span>
                                @else
                                    <span>★</span>
                                @endif
                            @endfor
                        </div>
                        @if($resena->comentario)
                            <div class="float-right">
                                <a href="{{ route('reportar', $resena->id) }}" class="report-link text-danger">
                                    <i class="fa fa-flag"></i> Reportar
                                </a>
                            </div>
                        @endif
                    </div>
                    @if($resena->comentario)
                        <div class="pt-1 reseña">
                            {{ $resena->comentario }}
                        </div>
                    @endif
                </div>
            @endforeach
        @else
            <h5>No hay reseñas sobre este Teatro.</h5>
        @endif
    </section>
@endsection

@section('scripts')
    <script type="application/javascript" src="{{ asset('js/teatro.js') }}" defer></script>
    <script type="application/javascript" src="{{ asset('js/rating.js') }}" defer></script>
    <script type="application/javascript" src="{{ asset('js/comentarios.js') }}"></script>
@endsection


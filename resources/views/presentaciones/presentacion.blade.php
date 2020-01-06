@extends('layouts.app')

@section('titulo')
    {{$presentacion->obra->nombre}}
@endsection

@section('recursos')
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rating.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/teatro.js') }}" defer></script>
@endsection

@section('contenido')
    <section class=" pt100 pb50">
        <div class="container">
            <div class="row mb-3 ml-2">
                <div class="col-3">
                    <img src="{{asset('storage/'.$presentacion->poster)}}" alt="" class="img-thumbnail">
                </div>
                <div class=" col-lg-8 ">
                    <div class="mb-2 sp-title">
                        <h1><span>{{$presentacion->obra->nombre}}</span></h1>
                    </div>
                    <div>
                        <a href="/teatro/{{$presentacion->teatro->id}}"><h6>{{$presentacion->teatro->nombre}}</h6></a>
                    </div>
                    <div>
                        <h6>Desde {{date('d-M-y', strtotime($presentacion->fecha_inicio))}}
                            hasta {{date('d-M-y', strtotime($presentacion->fecha_fin))}}</h6>
                    </div>
                    @if($presentacion->obra->sinopsis)
                        <div>
                            <blockquote>
                                <div class="row ml-1">
                                    <p><strong> Sinopsis: </strong> {{$presentacion->obra->sinopsis}}</p>
                                </div>
                            </blockquote>

                        </div>
                    @endif
                    @if($presentacion->reparto)
                        <div class=" ml-1">
                            <strong>Reparto:</strong> &nbsp; {!! $presentacion->reparto !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="funciones container">
            <div class="mb-2 sp-title">
                <h1><span>Funciones</span></h1>
            </div>
            @if($funciones->isNotEmpty())
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Teatro</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($funciones as $funcion)
                        <tr>
                            <th scope="row">{{ $funcion->fecha_presentacion->format('d/m/Y')  }}</th>
                            <td>{{date('h:i A', strtotime($funcion->hora_inicio)) }}</td>
                            <td>{{$presentacion->teatro->nombre}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>No hay funciones disponibles</p>
            @endif
        </div>

        @if ($presentacion->imagenes)
            <hr>
            <div class="mt-3 container">
                <div>
                    <h3 class="sub-line">Galería</h3>
                </div>
                <div>
                    <div class=" row col-12 owl-carousel owl-theme">
                        @foreach($presentacion->imagenes as $url_imagen)
                            <div>
                                <img src="{{$url_imagen}}" alt="" class="galeria">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

    </section>

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
                        <input type="hidden" name="tipo_objeto" value="presentacion">
                        <input type="hidden" name="id_rel" value="{{$presentacion->id}}">
                        <div class="row pl-3">
                            <div class="pt-1 reseña">
                                <h5 class="pr-2">Califique la Presentación: </h5>
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
            <h5 class="container">No hay reseñas sobre este Teatro.</h5>
        @endif
    </section>
@endsection

@section('scripts')
    <script type="application/javascript" src="{{ asset('js/teatro.js') }}" defer></script>
    <script type="application/javascript" src="{{ asset('js/rating.js') }}" defer></script>
    <script type="application/javascript" src="{{ asset('js/comentarios.js') }}"></script>
@endsection

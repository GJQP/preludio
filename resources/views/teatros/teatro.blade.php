@extends('layouts.app')

@section('titulo')
    {{$teatro->nombre}}
@endsection

@section('recursos')
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/rating.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('js/teatro.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="{{ asset('js/rating.js') }}" defer> </script>
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
                    <div class="Body">
                        <div>
                            <p><strong>Teléfono: </strong>{{$teatro->telefono}}</p>
                        </div>
                        <div>
                            <blockquote>
                                <p>{{$teatro->direccion}}</p>
                            </blockquote>
                            <div>
                                <form class="rating">
                                    <label>
                                        <input type="radio" name="stars" value="1" />
                                        <span class="icon">★</span>
                                      </label>
                                      <label>
                                        <input type="radio" name="stars" value="2" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                      </label>
                                      <label>
                                        <input type="radio" name="stars" value="3" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                          <span class="icon">★</span>
                                      </label>
                                      <label>
                                        <input type="radio" name="stars" value="4"  />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                      </label>
                                    <label>
                                      <input type="radio" name="stars" value="5"/>
                                      <span class="icon marcado">★</span>
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                    </label>
                                  </form>
                            </div>
                        </div>
                    </div>
                        @if(($teatro->facebook)||($teatro->twitter)||($teatro->instagram))
                        <div class="derecha mt-5 ">
                            @if($teatro->facebook)
                                <a href="{{$teatro->facebook}}" class=""><i class="fab fa-facebook rs" ></i></a>
                            @endif
                            @if($teatro->twitter)
                               <a href="{{$teatro->twitter}}"><i class="fab fa-twitter rs" style="font-size:30px"></i></a>
                            @endif
                            @if($teatro->instagram)
                              <a href="{{$teatro->instagram}}"><i class="fab fa-instagram rs" style="font-size:30px"></i></a>
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
                            <div >
                                    <img src="{{asset('storage/'.$url_imagen)}}" alt="Foto teatro {{$teatro->nombre}}" class="galeria">
                            </div>
                        @endforeach
                </div>

            </div>
        </div>
</section>
@endif

@if(count($teatro->presentaciones) <> 0)

    <br>
    <section class="pt-4 pb-4">
            <div class="container">
                    <div>
                            <h2 class="sub-line">Presentaciones</h2>
                    </div>
                    <div class="row ">
                        <div class="owl-carousel owl-theme">
                            @foreach($teatro->presentaciones as $presentacion)
                                <div>
                                    <a href="{{route('presentacionesTeatro', $teatro)}}"> <img src="{{asset('storage/'.$presentacion->poster)}}" alt="Poster de {{$presentacion->obra->nombre}}" class="galeria"></a>
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

<section class="pt-4 pb-5" name= "Comentar">
    <hr>
    <div class="container pb-2">
                <h2 class="sub-line">Comentarios</h2>
                    <div class="container pt-2">
                        <div>
                            <h4>Robert Gonzalez</h4>
                        </div>
                        <form method="POST">
                            <div>
                                <textarea type ="text" name="reseña"  class="comentario" placeholder="Introduzca su reseña"></textarea>
                            </div>
                            <button type="submit" class="right">Comentar</button>
                        </form>
                    </div>
            </div>
</section>
<section class="pb-5" id="lista-comentarios">
    <div class=" pt-1 container borde">
        <div class="row pl-3">
            <h4><u>Robert Gonzalez</u></h4>
            <div class="pl-3 pt-1"><i> (11/4/19)</i></div>
                     <div class="mover pl-2 rating">
                        <span class="checked">★</span>
                        <span class="checked">★</span>
                        <span class="checked">★</span>
                        <span class="">★</span>
                        <span class="">★</span>
                     </div >
            </div>
            <div class="pt-1 reseña">
                El mejor teatro del mundo, tiene las mejores salas que he visto en todo Caracas.
            </div>
    </div>
    <div class=" pt-1 container borde">
            <div class="row pl-3">

                <h4><u>Mariana Rodriguez</u></h4>
                <div class="pl-3 pt-1"><i> (11/4/19)</i></div>
                     <div class="mover pl-1">
                        <div class="mover pl-2 rating">
                            <span class="checked">★</span>
                            <span class="checked">★</span>
                            <span class="checked">★</span>
                            <span class="checked">★</span>
                            <span class="checked">★</span>
                         </div >
                        </div >
            </div>
            <div class="pt-1 reseña">
                Quiero terminar esto ya :D.
            </div>
    </div>
    <div class=" pt-1 container borde">
            <div class="row pl-3">

                <h4><u>Tomas El Fakih</u></h4>
                <div class="pl-3 pt-1"><i> (11/4/19)</i></div>
            </div>
            <div class="pt-1 reseña">
                Me da ladilla trabajar en el proyecto, dejemoselo a Gus.
            </div>
    </div>
    <div class=" pt-1 container borde">
            <div class="row pl-3">

                <h4><u>Gustavo Quintana</u></h4>
                <div class="pl-3 pt-1"><i> (11/4/19)</i></div>
            </div>
            <div class="pt-1 reseña">
                Maldita sea tomas te odio mucho, pero no tienes idea de cuanto, intenta no romper el git esta vez jaja salu2 *meme de gatico*.
            </div>
        </div>
    </div>
</section>
@endsection

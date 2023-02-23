@extends('layouts.app')

@section('title', 'Home')

<link rel="stylesheet" href="{{ asset('css/showRespuestas.css') }}">

@section('content')

    <h1 class="text-center">Vista de preguntas respondidas</h1>

    <div class="mx-auto">
        @foreach ($respuestasRespondidas as $respuesta)
            <ul class="text-center">
                <ol>1. ¿Con qué frecuencia utiliza internet?</ol>
                <div class="preguntas">
                    <p>{{ $respuesta->pregunta1 }}</p>
                </div>


                <ol>2. ¿Qué dispositivo utiliza principalmente para acceder a internet?</ol>
                <p>{{ $respuesta->pregunta2 }}</p>


                <ol>3. ¿Para qué propósito utilizará el sitio web?</ol>
                <p>{{ $respuesta->pregunta3 }}</p>


                <ol>4. ¿Qué tipo de contenido le gustaría ver en el sitio web?</ol>
                <p>{{ $respuesta->pregunta4 }}</p>


                <ol>5. ¿Qué valores le gustaría que el sitio web resalte?</ol>
                <p>{{ $respuesta->pregunta5 }}</p>


                <ol>6. ¿Prefiere que el sitio web tenga un diseño simple y limpio o uno más elaborado y detallado?
                </ol>
                <p>{{ $respuesta->pregunta6 }}</p>


                <ol>7. ¿Qué tan importante es para usted que el sitio web se adapte a diferentes tamaños de pantalla
                    (por ejemplo,
                    en dispositivos móviles)
                    ?</ol>
                <p>{{ $respuesta->pregunta7 }}</p>


                <ol>8. ¿Qué le gustaría ver en el sition web que no se haya mencionado en las preguntas anteriores?
                </ol>
                <p>{{ $respuesta->pregunta8 }}</p>





                <ol>9. ¿Tiene alguna preferencia en cuanto a los colores o la tipografía del sitio web?</ol>
                <p>{{ $respuesta->pregunta9 }}</p>


                <ol>10. ¿Hay algún sitio web que le guste y que sirva como referencia para lo que está buscando en su
                    sitio web?
                </ol>
                <p>{{ $respuesta->pregunta10 }}</p>


            </ul>
        @endforeach

        <div class="text-center m-5">
          <a href="{{route('menu.menu')}}" class="btn btn-success mx-auto text-center">Regresar</a>
        </div>


    </div>



@endsection

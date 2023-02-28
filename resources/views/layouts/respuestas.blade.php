<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')Respuestas</title>


    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/respuestas.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>

<body class="bg-gray-90 text gray-800">

    <nav class="flex py-2 bg-dark text-white ">

        <div class="w-1/2 px-8 mr-auto">
            <a class="navbar-brand" href="{{ route('menu.menu') }}">LOOPSTUDIOS</a>

        </div>

        <ul class="text-center">
            {{-- creando una lista alineada  --}}
            <li>
                <a href="/menu"
                    class="font-semibold border-2 border-white py-2 px4 rounded-md hover:bg-white hover:text-indigo-700">Regresar
                    a menu</a>
            </li>
        </ul>


    </nav>
    @yield('content')
    <h1 class="nuevo">Respuestas al taller propuesto en clase.</h1>

    <div class="container">
        <div class="row">

            {{-- Parte 1 --}}
            <div class="col-sm-6">

                <div class="card">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExamples" role="button"
                            aria-expanded="false" aria-controls="collapseExamples">
                            • ¿Qué aspectos debe tener presentes en la elaboración del sitio?
                        </a>

                    </p>
                    <div class="collapse" id="collapseExamples">
                        <div class="card card-body">
                            Para elaborar un sitio web dedicado al desarrollo de soluciones digitales y experiencias
                            inmersivas
                            con
                            realidad virtual, debes tener en cuenta: diseño y experiencia de usuario, contenido
                            relevante,
                            tecnología adecuada, optimización CEO, responsividad, seguridad, integración con redes
                            sociales, y
                            análisis y seguimiento de usuarios.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <p>
                        <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                            aria-expanded="false" aria-controls="collapseExample1">
                            • ¿Cuál es el nombre del cliente en este caso?
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                            LOOPSTUDIOS.

                        </div>
                    </div>
                </div>

                <div class="card">
                    <p>
                        <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample3" role="button"
                            aria-expanded="false" aria-controls="collapseExample3">
                            •Realice la lectura comprensiva del documento “Requisitos del frontend” disponible en la
                            plataforma de
                            aprendizaje, en el cual se presentan, métodos de recolección de datos, herramientas para
                            definir
                            usuarios y conceptos técnicos que permiten establecer los requisitos del frontend.
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample3">
                        <div class="card card-body">
                            Los requisitos del frontend son una parte importante del proceso de desarrollo de
                            software. El frontend
                            se refiere a la parte visible de una aplicación o sitio web que los usuarios interactúan
                            directamente.
                            Los requisitos del frontend describen lo que el usuario verá y cómo interactuará con la
                            aplicación o el
                            sitio web.

                            Para establecer los requisitos del frontend, es importante recopilar información sobre
                            los usuarios y
                            sus necesidades. Esto se puede hacer mediante métodos como encuestas, entrevistas,
                            grupos focales y
                            pruebas de usabilidad. Estos métodos permiten obtener información sobre lo que los
                            usuarios necesitan y
                            esperan de la aplicación o sitio web.

                            Las herramientas para definir usuarios incluyen la creación de perfiles de usuario y la
                            segmentación de
                            usuarios por características demográficas y de comportamiento. Esto ayuda a comprender
                            mejor las
                            necesidades y deseos de los usuarios y permite crear una experiencia de usuario mejor y
                            más
                            personalizada.

                            Los conceptos técnicos también son importantes para establecer los requisitos del
                            frontend. Esto incluye
                            entender los diferentes navegadores web y dispositivos que los usuarios pueden usar para
                            acceder a la
                            aplicación o el sitio web, así como los estándares web y las tecnologías de desarrollo
                            como HTML, CSS y
                            JavaScript.

                            En resumen, para establecer los requisitos del frontend, es importante recopilar
                            información sobre los
                            usuarios y sus necesidades, definir perfiles de usuario y segmentar a los usuarios, y
                            comprender los
                            conceptos técnicos que se utilizarán para desarrollar el frontend.

                        </div>
                    </div>
                </div>

                <div class="card">
                    <p>
                        <a class="btn btn-danger" data-bs-toggle="collapse" href="#collapseExample5" role="button"
                            aria-expanded="false" aria-controls="collapseExample5">
                            • ¿En qué partes del caso debería enfocarse la recolección de información para
                            profundizar en su
                            comprensión?
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample5">
                        <div class="card card-body">
                            sin las técnicas de recolección de datos, estas técnicas conducen a la verificación del
                            problema
                            planteado y en otros casos ayudan en la verificación de aceptación del proyecto,


                        </div>
                    </div>
                </div>

                <div class="card">
                    <p>
                        <a class="btn btn-info" data-bs-toggle="collapse" href="#collapseExample7" role="button"
                            aria-expanded="false" aria-controls="collapseExample7">
                            • ¿Cuáles son los elementos que se desarrollan en el informe de requisitos del frontend?
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample7">
                        <div class="card card-body">
                            Front-end
                            Investigación cualitativa Investigación cuantitativa Método Técnica Instrumento análisis



                        </div>
                    </div>
                </div>


            </div>


            {{-- Parte 2 --}}
            <div class="col-sm-6">


                <div class="card">

                    <p>
                        <a class="btn btn-danger" data-bs-toggle="collapse" href="#collapseExampler" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            •De acuerdo con los objetivos del cliente ¿Cuál sería el contenido principal, que
                            debería incluir el
                            sitio web?
                        </a>

                    </p>
                    <div class="collapse" id="collapseExampler">
                        <div class="card card-body">
                            Dar a conocer su portafolio de servicios, para posicionarse en el mercado nacional como
                            una empresa
                            líder en la creación de proyectos de realidad virtual
                            Conformar sus equipos de trabajo a través del reclutamiento de talento local, apoyando
                            así la
                            economía del país.

                        </div>
                    </div>
                </div>

                <div class="card">
                    <p>
                        <a class="btn btn-warning" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                            aria-expanded="false" aria-controls="collapseExample2">
                            • ¿Por qué se considera importante identificar la necesidad del cliente para el diseño
                            del sitio web?
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            Es importante identificar las necesidades del cliente para el diseño del sitio web
                            porque permite crear
                            un sitio que satisfaga sus objetivos y expectativas, lo que mejora la experiencia de
                            usuario y aumenta
                            la satisfacción del cliente. Además, puede llevar un aumento en la lealtad del cliente y
                            beneficios
                            comerciales para la empresa

                        </div>
                    </div>
                </div>

                <div class="card">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button"
                            aria-expanded="false" aria-controls="collapseExample4">
                            • ¿Cuál de las técnicas de recolección de información, considera que podría usar para
                            conocer mejor las
                            necesidades del cliente y definir las características de la solución para el caso
                            planteado?, ¿Por qué?
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample4">
                        <div class="card card-body">
                            Un cuestionario bien diseñado ofrece preguntas especificas, con opciones de respuesta
                            claramente
                            definidas.
                            Esta estructura estandarizada permite una recolección de datos uniforme y consistente,
                            lo que permite la
                            comparación de respuestas y análisis detallados


                        </div>
                    </div>
                </div>

                <div class="card">
                    <p>
                        <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample6" role="button"
                            aria-expanded="false" aria-controls="collapseExample6">
                            • ¿De qué manera podemos definir el usuario o grupo de personas que van a interactuar
                            con el frontend?
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample6">
                        <div class="card card-body">
                            Podemos definirla con segmentación demográfica, personas, casos de uso y pruebas de
                            usabilidad. Es
                            importante considerar las necesidades, motivaciones y comportamientos de los usuarios
                            para crear
                            experiencia de usuario satisfactoria y efectividad.


                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <form action="{{ route('preguntas.post') }}" method="POST">
        @csrf

        <div class="card m-5">
            <h1 class="h1 m-3"> Preguntas cerradas </h1>

            <ul>
                <ol>1. ¿Con qué frecuencia utiliza internet?</ol>
                <div class="preguntas">
                    <input type="radio" name="pregunta1" id="" value="Diariamente">
                    <label for="a">Diariamente</label>
                    <input type="radio" name="pregunta1" id="" value="Al menos una vez a la semana">
                    <label for="a">Al menos una vez a la semana</label>
                    <input type="radio" name="pregunta1" id="" value="Al menos una vez al mes">
                    <label for="a">Al menos una vez al mes</label>
                    <input type="radio" name="pregunta1" id="" value="Ocasionalmente">
                    <label for="a">Ocasionalmente</label>
                    <input type="radio" name="pregunta1" id="" value="Nunca">
                    <label for="a">Nunca</label>
                </div>


                <ol>2. ¿Qué dispositivo utiliza principalmente para acceder a internet?</ol>
                <input type="radio" name="pregunta2" id="" value="Computadora de escritorio">
                <label for="a">Computadora de escritorio</label>
                <input type="radio" name="pregunta2" id="" value="Computadora portátil">
                <label for="a">Computadora portátil</label>
                <input type="radio" name="pregunta2" id="" value="Teléfono inteligente">
                <label for="a">Teléfono inteligente</label>
                <input type="radio" name="pregunta2" id="" value="Tableta">
                <label for="a">Tableta</label>
                <input type="radio" name="pregunta2" id="" value="">
                <label for="a">Otro (*Especifique*)</label>
                <input type="text">

                <ol>3. ¿Para qué propósito utilizará el sitio web?</ol>
                <input type="radio" name="pregunta3" id="" value="Obtener información">
                <label for="a">Obtener información</label>
                <input type="radio" name="pregunta3" id="" value="Realizar compras en línea">
                <label for="a">Realizar compras en línea</label>
                <input type="radio" name="pregunta3" id="" value="Descargar recursos">
                <label for="a">Descargar recursos</label>
                <input type="radio" name="pregunta3" id="" value="Interactuar con otros usuarios">
                <label for="a">Interactuar con otros usuarios</label>
                <input type="radio" name="pregunta3" id="" value="">
                <label for="a">Otro (*Especifique*)</label>
                <input type="text">

                <ol>4. ¿Qué tipo de contenido le gustaría ver en el sitio web?</ol>
                <input type="radio" name="pregunta4" id="" value="Texto">
                <label for="a">Texto</label>
                <input type="radio" name="pregunta4" id="" value="Imágenes">
                <label for="a">Imágenes</label>
                <input type="radio" name="pregunta4" id="" value="Videos">
                <label for="a">Videos</label>
                <input type="radio" name="pregunta4" id="" value="Audio">
                <label for="a">Audio</label>
                <input type="radio" name="pregunta4" id="" value="Animaciones">
                <label for="a">Animaciones</label>

                <ol>5. ¿Qué valores le gustaría que el sitio web resalte?</ol>
                <input type="radio" name="pregunta5" id="" value="Profesionalismo">
                <label for="a">Profesionalismo</label>
                <input type="radio" name="pregunta5" id="" value="Innovación">
                <label for="a">Innovación</label>
                <input type="radio" name="pregunta5" id="" value="Hosnestidad">
                <label for="a">Hosnestidad</label>
                <input type="radio" name="pregunta5" id="" value="Creatividad">
                <label for="a">Creatividad</label>
                <input type="radio" name="pregunta5" id="" value="">
                <label for="a">Otro (*Especifique*)</label>
                <input type="text">

                <ol>6. ¿Prefiere que el sitio web tenga un diseño simple y limpio o uno más elaborado y detallado?
                </ol>
                <input type="radio" name="pregunta6" id="" value="Simple y limpio">
                <label for="a">Simple y limpio</label>
                <input type="radio" name="pregunta6" id="" value="Elaborado y detallado">
                <label for="a">Elaborado y detallado</label>

                <ol>7. ¿Qué tan importante es para usted que el sitio web se adapte a diferentes tamaños de pantalla
                    (por ejemplo,
                    en dispositivos móviles)?</ol>
                <input type="radio" name="pregunta7" id="" value="Muy importante">
                <label for="a">Muy importante</label>
                <input type="radio" name="pregunta7" id="" value="Importante">
                <label for="a">Importante</label>
                <input type="radio" name="pregunta7" id="" value="No es muy importante">
                <label for="a">No es muy importante</label>

                <h1 class="h1 m-3"> Preguntas Abiertas </h1>

                <ol>8. ¿Qué le gustaría ver en el sition web que no se haya mencionado en las preguntas anteriores?
                </ol>

                <div class="textarea m-5">
                    <textarea type="text" name="pregunta8" id="editor" class="form-control w-full" rows="6"></textarea>
                </div>




                <ol>9. ¿Tiene alguna preferencia en cuanto a los colores o la tipografía del sitio web?</ol>
                <div class="textarea m-5">
                    <textarea type="text" name="pregunta9" id="editor" class="form-control w-full" rows="6"></textarea>
                </div>

                <ol>10. ¿Hay algún sitio web que le guste y que sirva como referencia para lo que está buscando en su
                    sitio web?
                </ol>
                <div class="textarea m-5">
                    <textarea type="text" name="pregunta10" id="editor" class="form-control w-full" rows="6"></textarea>
                </div>

            </ul>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                      <a class="btn btn-danger" onclick="location.href='{{ route('menu.menu') }}'">Cancelar</a>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                    </div>
                </div>
            </div>

        </div>



    </form>
</body>

</html>

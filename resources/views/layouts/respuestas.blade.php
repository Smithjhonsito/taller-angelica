<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>@yield('title')-laravel App</title>


    @yield('css')
    <link rel="stylesheet" href="{{asset('css/respuestas.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>
<body class="bg-gray-90 text gray-800" >

    <nav class="flex py-2 bg-dark text-white " >

    <div  class="w-1/2 px-8 mr-auto" >
        <p class="text-2xl foont-bold">LOOPSTUDIOS</p>
    </div>

        <ul  class="text-center" >
               {{--creando una lista alineada  --}}
            <li>
                <a  href="{{route('login.index')}}" class="font-semibold border-2 border-white py-2 px4 rounded-md hover:bg-white hover:text-indigo-700" >Iniciar  sesión</a>
                
               
            </li>
        </ul>

    
</nav>
    @yield('content')

<form action="">
  <h1 class="nuevo">Respuestas al taller propuesto en clase.</h1>
    <p>
      <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExamples" role="button" aria-expanded="false" aria-controls="collapseExamples" >
        •	¿Qué aspectos debe tener presentes en la elaboración del sitio?
      </a>
      
    </p>
    <div class="collapse" id="collapseExamples">
      <div class="card card-body">
        Para elaborar un sitio web dedicado al desarrollo de soluciones digitales y experiencias inmersivas con realidad virtual, debes tener en cuenta: diseño y experiencia de usuario, contenido relevante, tecnología adecuada, optimización CEO, responsividad, seguridad, integración con redes sociales, y análisis y seguimiento de usuarios.
      </div>
    </div>
    
    <div>

      <p>
        <a class="btn btn-danger" data-bs-toggle="collapse" href="#collapseExampler" role="button" aria-expanded="false" aria-controls="collapseExample">
          •De acuerdo con los objetivos del cliente ¿Cuál sería el contenido principal, que debería incluir el sitio web?
        </a>
        
      </p>
      <div class="collapse" id="collapseExampler">
        <div class="card card-body">
          Dar a conocer su portafolio de servicios, para posicionarse en el mercado nacional como una empresa líder en la creación de proyectos de realidad virtual
Conformar sus equipos de trabajo a través del reclutamiento de talento local, apoyando así la economía del país.

        </div>
      </div>
    </div>
    <p>
      <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
        •	¿Cuál es el nombre del cliente en este caso?
      </a>
      
    </p>
    <div class="collapse" id="collapseExample1">
      <div class="card card-body">
        LOOPSTUDIOS.

      </div>
    </div>

    <p>
      <a class="btn btn-warning" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
        •	¿Por qué se considera importante identificar la necesidad del cliente para el diseño del sitio web?
      </a>
      
    </p>
    <div class="collapse" id="collapseExample2">
      <div class="card card-body">
        Es importante identificar las necesidades del cliente para el diseño del sitio web porque permite crear un sitio que satisfaga sus objetivos y expectativas, lo que mejora la experiencia de usuario y aumenta la satisfacción del cliente. Además, puede llevar un aumento en la lealtad del cliente y beneficios comerciales para la empresa

      </div>
    </div>
    <p>
      <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
        •Realice la lectura comprensiva del documento “Requisitos del frontend” disponible en la plataforma de aprendizaje, en el cual se presentan, métodos de recolección de datos, herramientas para definir usuarios y conceptos técnicos que permiten establecer los requisitos del frontend. 
      </a>
      
    </p>
    <div class="collapse" id="collapseExample3">
      <div class="card card-body">
        Los requisitos del frontend son una parte importante del proceso de desarrollo de software. El frontend se refiere a la parte visible de una aplicación o sitio web que los usuarios interactúan directamente. Los requisitos del frontend describen lo que el usuario verá y cómo interactuará con la aplicación o el sitio web.

        Para establecer los requisitos del frontend, es importante recopilar información sobre los usuarios y sus necesidades. Esto se puede hacer mediante métodos como encuestas, entrevistas, grupos focales y pruebas de usabilidad. Estos métodos permiten obtener información sobre lo que los usuarios necesitan y esperan de la aplicación o sitio web.
        
        Las herramientas para definir usuarios incluyen la creación de perfiles de usuario y la segmentación de usuarios por características demográficas y de comportamiento. Esto ayuda a comprender mejor las necesidades y deseos de los usuarios y permite crear una experiencia de usuario mejor y más personalizada.
        
        Los conceptos técnicos también son importantes para establecer los requisitos del frontend. Esto incluye entender los diferentes navegadores web y dispositivos que los usuarios pueden usar para acceder a la aplicación o el sitio web, así como los estándares web y las tecnologías de desarrollo como HTML, CSS y JavaScript.
        
        En resumen, para establecer los requisitos del frontend, es importante recopilar información sobre los usuarios y sus necesidades, definir perfiles de usuario y segmentar a los usuarios, y comprender los conceptos técnicos que se utilizarán para desarrollar el frontend.

      </div>
    </div>

    <p>
      <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
        •	¿Cuál de las técnicas de recolección de información, considera que podría usar para conocer mejor las necesidades del cliente y definir las características de la solución para el caso planteado?, ¿Por qué?
      </a>
      
    </p>
    <div class="collapse" id="collapseExample4">
      <div class="card card-body">
        Un cuestionario bien diseñado ofrece preguntas especificas, con opciones de respuesta claramente definidas.
Esta estructura estandarizada permite una recolección de datos uniforme y consistente, lo que permite la comparación de respuestas y análisis detallados


      </div>
    </div>

    <p>
      <a class="btn btn-danger" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
        •	¿En qué partes del caso debería enfocarse la recolección de información para profundizar en su comprensión?
      </a>
      
    </p>
    <div class="collapse" id="collapseExample5">
      <div class="card card-body">
        sin las técnicas de recolección de datos, estas técnicas conducen a la verificación del problema planteado y en otros casos ayudan en la verificación de aceptación del proyecto,


      </div>
    </div>

    <p>
      <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
        •	¿De qué manera podemos definir el usuario o grupo de personas que van a interactuar con el frontend?
      </a>
      
    </p>
    <div class="collapse" id="collapseExample6">
      <div class="card card-body">
        Podemos definirla con segmentación demográfica, personas, casos de uso y pruebas de usabilidad. Es importante considerar las necesidades, motivaciones y comportamientos de los usuarios para crear experiencia de usuario satisfactoria y efectividad.


      </div>
    </div>

    <p>
      <a class="btn btn-info" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">
        •	¿Cuáles son los elementos que se desarrollan en el informe de requisitos del frontend?
      </a>
      
    </p>
    <div class="collapse" id="collapseExample7">
      <div class="card card-body">
        Front-end
    Investigación cualitativa Investigación cuantitativa Método Técnica Instrumento análisis



      </div>
    </div>

    <p>
      <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample8">
        •	cuestionario Preguntas cerradas
      </a>
      
    </p>
    <div class="collapse" id="collapseExample8">
      <div class="card card-body">
 <p>       
1)¿Con qué frecuencia utiliza internet?
a) Diariamente
b) Al menos una vez a la semana
c) Al menos una vez al mes
d) Ocasionalmente
e) Nunca
</p>
<p>
2)¿Qué dispositivo utiliza principalmente para acceder a internet?
a) Computadora de escritorio
b) Computadora portátil
c) Teléfono inteligente
d) Tableta
e) Otro (especifique): _____________
</p>
<p>
3)¿Para qué propósito utilizará el sitio web?
a) Obtener información
b) Realizar compras en línea
c) Descargar recursos
d) Interactuar con otros usuarios
e) Otro (especifique): _____________
</p>
4)¿Qué tipo de contenido le gustaría ver en el sitio web?
a) Texto
b) Imágenes
c) Videos
d) Audio
e) Animaciones
<p>
5)¿Qué valores le gustaría que el sitio web resalte?
a) Profesionalismo
b) Innovación
c) Honestidad
d) Creatividad
e) Otro (especifique): _____________
</p>
6)¿Prefiere que el sitio web tenga un diseño simple y limpio o uno más elaborado y detallado?
a) Simple y limpio
b) Elaborado y detallado
<p>
7)¿Qué tan importante es para usted que el sitio web se adapte a diferentes tamaños de pantalla (por ejemplo, en dispositivos móviles)?
a) Muy importante
b) Importante
c) No es importante
</p>


      </div>
    </div>
    <p>
      <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample9">
        •	Cuestionario preguntas abiertas
      </a>
      
    </p>
    <div class="collapse" id="collapseExample9">
      <div class="card card-body">
        <p>1)¿Qué le gustaría ver en el sitio web que no se haya mencionado en las preguntas anteriores?</p>
        <p>2)¿Tiene alguna preferencia en cuanto a los colores o la tipografía del sitio web?</p>
        <p>3)¿Hay algún sitio web que le guste y que sirva como referencia para lo que está buscando en su sitio web?</p>
      </div>
    </div>
  </form>
</body>

</html>
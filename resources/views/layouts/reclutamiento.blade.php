<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>@yield('title')-laravel App</title>


    @yield('css')
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/reclutamiento.css')}}">

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
    <h1 class="n1">Personal calificado</h1>

    <p class="n2">La entrevista al candidato que opta a un puesto de trabajo sigue siendo un método de selección de personal muy recomendable. La novedad es que las entrevistas pueden ser tanto presenciales como online, a través de un sistema de videollamadas, un método muy eficaz y que ahorra bastante tiempo.</p>

    <div class="n4">
      <a  href="/aspirantes" class="font-semibold border-2 border-white py-2 px4 rounded-md hover:bg-white hover:text-indigo-700" >Ingresar</a>
    </div>
   
</body>
</html>
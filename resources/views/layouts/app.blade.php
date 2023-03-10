<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>@yield('title') LOOSPSTUDIOS</title>


    @yield('css')
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>
<body class="bg-gray-90 text gray-800" >

    <nav class="flex py-2 bg-dark text-white " >

    <div  class="w-1/2 px-8 mr-auto" >
        <a href="{{ route('menu.menu') }}">LOOPSTUDIOS</a>
    </div>

        <ul  class="text-center" >
               {{--creando una lista alineada  --}}
            <li>
                <a  href="{{route('login.index')}}" class="font-semibold border-2 border-white py-2 px4 rounded-md hover:bg-white hover:text-indigo-700" >Iniciar  sesión</a>
                <br>
                <br>
                <br>
                <a href="{{route('register.index')}}" class="font-semibold border-2 border-white py-2 px4 rounded-md hover:bg-white hover:text-indigo-700">Registrarse</a>
            </li>
        </ul>

    
</nav>
    @yield('content')
</body>
</html>
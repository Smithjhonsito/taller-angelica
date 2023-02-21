<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>@yield('title')-laravel App</title>


    @yield('css')
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>
<body class="bg-gray-100 text gray-800" >

    <nav class="flex py-5 bg-indigo-500 text-white " >

    <div  class="w-1/2 px-12 mr-auto" >
        <p class="text-2xl foont-bold">Mis primeros auxilitos</p>
    </div>

        <ul  class="text-center" >
               {{--creando una lista alineada  --}}
            <li>
                <a  href="{{route('login.index')}}" class="font-semibold hover:bg-indigo-700 py-3 px4  rounded-md" >Iniciar  sesión</a>
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
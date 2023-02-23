<!DOCTYPE html>
<html lang="en">


<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>@yield('title') Aspirantes</title>


    @yield('css')
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>
<body class="bg-gray-90 text gray-800" >

    <nav class="flex py-2 bg-dark text-white " >

    <div  class="w-1/2 px-8 mr-auto" >
        <a class="navbar-brand" href="{{ route('menu.menu') }}" >LOOPSTUDIOS</a>
    </div>

        <ul  class="text-center" >
               {{--creando una lista alineada  --}}
            <li>
                <a  href="/login" class="font-semibold border-2 border-white py-2 px4 rounded-md hover:bg-white hover:text-indigo-700" >Regresar al menu</a>
                
                
            </li>
        </ul>

    
</nav>
    @yield('content')
</body>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/aspirantes.css')}}">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  <title>Aspirantes</title>
</head>
<body>

  <div class="hola">
  <div  class="bloc mx-auto my-12 p-8 bgwhite w-1/3 border border-gray-200 rounded-lg shadow-lg" >  
    <h1 class="text-3xl text-center font-bold">Aspirantes formulario</h1>
    
    <form action="{{route('register.store')}}"  method="POST" action="">
    @csrf

        
        <input type="text"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Nombres" id="Nombres" name="Nombre" >
        <input type="text"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Apellidos" id="Apellidos" name="Apellido" >
        <input type="date"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Fecha de nacimiento" id="Fecha" name="Fecha" >
        <input type="email"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="correo o usuario" id="email" name="email" >
    
        <input type="password"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="contraseña" id="password" name="password" >
    
        <input type="password"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Confirmar contraseña" id="password_confirmationd" name="password_confirmation" >
    
        
        <input type="text"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Nivel academico" id="password_confirmationd" name="password_confirmation" >
        <input type="text"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Experiencia laboral " id="password_confirmationd" name="password_confirmation" >
        <br> 
        <a class = "enviar"type="submit" href="/envio" > Enviar</a>
    
        <a   class="text-primary" type = "submit "href="/login">Ya estoy registrado</a>
      </div>
</body>
</html>
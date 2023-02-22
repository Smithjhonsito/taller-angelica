@extends('layouts.app')

@section('title','Register')
 
@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/registro.css')}}">
    <title>Document</title>
</head>
<body>
    <div  class="bloc mx-auto my-12 p-8 bgwhite w-1/3 border border-gray-200 rounded-lg shadow-lg" >  
        <h1 class="text-3xl text-center font-bold">Registro</h1>
        
        <form action="{{route('register.store')}}"  method="POST" action="">
        @csrf
    
            
            <input type="text"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Nombres" id="Nombres" name="Nombre" >
            <input type="text"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Apellidos" id="Apellidos" name="Apellido" >
            <input type="date"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Fecha de nacimiento" id="Fecha" name="Fecha" >
            <input type="email"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="correo o usuario" id="email" name="email" >
        
            <input type="password"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="contraseña" id="password" name="password" >
        
            <input type="password"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Confirmar contraseña" id="password_confirmationd" name="password_confirmation" >
        
           
            <button  type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600 " > Enviar</button>
        
            <a   class="text-primary" type = "submit "href="/login">Ya estoy registrado</a>
        
        </form>
        
        
        </div>
    
    
</body>
</html>


@endsection
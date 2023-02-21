@extends('layouts.app')

@section('title','Home')
 
@section('content')

<link rel="stylesheet" href="{{asset('css/login.css')}}">


<div  class="bloc mx-auto my-12 p-8 bgwhite w-1/3 border border-gray-200 rounded-lg shadow-lg" >  
<h1 class="text-3xl text-center font-bold">Login</h1>

<form method="POST" action="">
    @csrf
    <input type="email"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="correo o usuario" id="email" name="email" >

    <input type="password"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="contraseña" id="password" name="password" >

    @Error('message')
        <p class=" border border-red-500 rounded-md bg-red-100 w-full text-red p-2 my-2">*Error</p>
    @enderror
        <button  type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600 " > Enviar</button>
        


</form>


</div>
@endsection
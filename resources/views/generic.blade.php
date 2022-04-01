@extends('Layout.p1')

@section('Titulo')
<h1 class="major">{{$evento->id}}.-{{$evento->Pais}}</h1>
@endsection

@section('Imagen')
<span class="image fit"><img src="images/OvniG.jpg" alt="" /></span>
@endsection

@section('Contenido')
<p>En esta ciudad del violento estado de Tamaulipas, en el noreste de México, muchos creen que los extraterrestres llevan décadas protegiéndolos de los huracanes, que luego de avanzar con fuerza hacia sus costas, se detienen de forma abrupta y, misteriosamente, cambian de rumbo.</p>
<p>Dicen que los han visto. Que hay una base submarina a unos 40 kilómetros de la costa. Que vieron sus naves, esferas, triángulos, luces. Que vieron cosas.</p>
@endsection
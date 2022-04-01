@extends('Layout.p1')

@section('Titulo')
<h1 class="major">{{$evento->id}}.-{{$evento->Pais}}</h1>
@endsection

@section('Imagen')
<span class="image fit"><img src="images/p2G.jpg" alt="" /></span>
@endsection

@section('Contenido')
<p>1 LA ZONA DEL SILENCIO</p>
<p>Situada en el desierto que abarca a Durango, Chihuahua y Coahuila, la llamada Zona del Silencio desde hace décadas ha generado mucho interés tanto de mexicanos como de extranjeros, luego que en los años setenta un cohete de la NASA cayó en este sitio, lo que generó la creencia de que el lugar estaba cargado con una gran fuerza magnética.</p>
@endsection
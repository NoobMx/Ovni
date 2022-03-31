@extends('Layout.p1')



@section('Titulo')
@foreach($eventos as $evento)
<h1 class="major">{{$evento->id}}</h1>
@endforeach
@endsection
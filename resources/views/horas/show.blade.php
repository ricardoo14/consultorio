@extends('layouts.plantilla')
@section ('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$use->nombre}}</h1> 
    <p class="medium">Fecha de solicitud: {{$s->created_at}}</p>
</div>
</div>
<div class="container">
    
<p class="lead">Especialidad: {{$s->especialidad}}</p>
<p class="lead">Sintoma paciente: {{$s->sintoma}}</p>
  
</div>
@endsection
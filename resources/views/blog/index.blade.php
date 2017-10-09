@extends('template')

@section('title')
    Conteúdo
@endsection

@section('content')
@foreach($materias as $titulo => $materia)
    <div>
        <h3>{{$titulo}}</h3>
        <p>{{$materia}}</p>
    </div>
@endforeach
</ul>
@endsection
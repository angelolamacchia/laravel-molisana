@extends('app')

@section('title', 'Notizie')

@section('content')
    <div id="dettagli">
        <h1>{{$formato['titolo']}}</h1>
        <p>{!! $formato['descrizione'] !!}</p>
    </div>
    
@endsection
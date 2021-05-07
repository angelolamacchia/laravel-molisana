@extends('app')

{{-- @dd($formati); --}}

@section('title', 'Prodotti')

@section('content')
    <div id="prodotti" class="clear_fix">
        <div class="titolo_prodotti">LA PASTA CLASSICA</div>
        @foreach ($formati as $tipo => $formato)
            <div class="row clear_fix">
                <h2 style="text-transform: uppercase">{{$tipo}}</h2>
                @foreach ($formato as $key => $pasta)
                    <div class="card">
                        <div class="card_content">
                            <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                            <div class="filter"><a href="{{route('pagina-dettagli', ['id'=>$key])}}" style="color: #001942;">{{$pasta['titolo']}}</a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
            
            
    </div>
@endsection
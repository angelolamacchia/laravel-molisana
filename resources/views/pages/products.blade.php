@extends('app')

{{-- @dump($pasta); --}}

@section('title', 'Prodotti')

@section('content')
    <div id="prodotti" class="clear_fix">
        <div class="titolo_prodotti">LA PASTA CLASSICA</div>
        @foreach ($pasta as $item)
            <div class="card">
                <div class="card_content">
                    <img src="{{$item['src']}}" alt="pasta">
                    <div class="filter"><p style="color: #001942;">{{$item['titolo']}}</p></div>
                </div>
            </div>
            
        @endforeach
    </div>
@endsection
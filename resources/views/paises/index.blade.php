@extends('layouts.app')

@section('title', 'Países e Cidades')

@section('content')
    <h1>Países</h1>
    <ul>
        @foreach($paises as $p)
            <li><a href="{{ route('paises.show', $p['nome']) }}">{{ $p['nome'] }}</a></li>
        @endforeach
    </ul>

    <h1>Cidades Brasileiras</h1>
    <ul>
        @foreach($cidades as $cidade)
            <li><a href="{{ route('cidade.show', $cidade['id']) }}">{{ $cidade['nome'] }} - {{ $cidade['estado'] }}</a></li>
        @endforeach
    </ul>
@endsection

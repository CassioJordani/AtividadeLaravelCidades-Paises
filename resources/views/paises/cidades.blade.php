@extends('layouts.app')

@section('title', 'Cidades')

@section('content')
    <h1>Cidades Brasileiras</h1>
    <ul>
        @foreach($cidades as $cidade)
            <li><a href="{{ route('cidade.show', $cidade['id']) }}">{{ $cidade['nome'] }} - {{ $cidade['estado'] }}</a></li>
        @endforeach
    </ul>
@endsection

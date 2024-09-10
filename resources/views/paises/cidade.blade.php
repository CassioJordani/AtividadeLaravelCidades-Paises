@extends('layouts.app')

@section('title', $cidade['nome'])

@section('content')
    <h1>{{ $cidade['nome'] }}</h1>
    <p><strong>Estado:</strong> {{ $cidade['estado'] }}</p>
    <p><strong>População:</strong> {{ number_format($cidade['populacao']) }}</p>
    <p><strong>Área:</strong> {{ $cidade['area'] }} km²</p>
    <p><strong>País:</strong> {{ $cidade['pais'] }}</p>
@endsection

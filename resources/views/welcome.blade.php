{{-- Chamando o layout --}}
@extends('layouts.main')

{{-- Título da Página --}}
@section('title', 'HDC Events')

{{-- Abrindo conteúdo --}}
@section('content')

@foreach($events as $event)
    <p>Título: {{ $event->title }} <br> Descrição: {{ $event->description }}</p>
@endforeach

{{-- Fechando conteúdo --}}
@endsection

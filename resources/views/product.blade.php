{{-- Chamando o layout --}}
@extends('layouts.main')

{{-- Título da Página --}}
@section('title', 'Produto')

{{-- Abrindo conteúdo --}}
@section('content')

    @if($id != null)
        <p>Exibindo produto id: {{ $id }}</p>
    @endif

{{-- Fehcnado conteúdo --}}
@endsection

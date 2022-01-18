{{-- Chamando o layout --}}
@extends('layouts.main')

{{-- Título da Página --}}
@section('title', 'HDC Events')

{{-- Abrindo conteúdo --}}
@section('content')

<h1>Título</h1>

<img src="/img/banner.png" alt="Banner">

<!-- Condição com Blase -->
{{-- Condição com Blase --}}
@if( 10 > 5 )
    <p>A condição é true.</p>
@endif

<hr/>

<p>{{ $nome }}</p>

<hr>

@if( $nome == 'Pedro' )
    <p> O nome é igual a Pedro. </p>
@elseif( $nome == 'Gabriel')
    <p> O nome é Gabriel e ele tem {{ $idade }} anos e trabalha como {{ $profissao }}. </p>
@else
    <p> O nome não é Pedro. </p>
@endif

<hr>

@for( $i = 0; $i < count($array); $i++)
    <p> {{ $array[$i] }} - {{$i}} </p>

    @if( $i == 2 )
        <p> i é 2 </p>
    @endif
@endfor

<hr>

@foreach( $nomes as $nome )
    {{-- Váriavel especial do foreach para imprimir/utilizar o indice do array --}}
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
@endforeach

<hr>

{{-- Inserindo Código PHP no Blade --}}
@php
    $name = 'João';
    echo $name;
@endphp

{{-- Fechado conteúdo --}}
@endsection

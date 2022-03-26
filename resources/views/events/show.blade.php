{{-- Chamando o layout --}}
@extends('layouts.main')

{{-- Título da Página --}}
@section('title', 'HDC Events')

{{-- Abrindo conteúdo --}}
@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>

            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
                <p class="events-participants">X Participantes</p>
                <p class="event-owner">Dono do evento:</p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
                <h3>O evento conta com:</h3>
                <ul class="items-list">
                    @foreach($event->items as $item)
                        <li><span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>

            <div id="description-container" class="col-md-12">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>
        </div>
    </div>

{{-- Fechando conteúdo --}}
@endsection

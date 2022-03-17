<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Acessando o model
use App\Models\Event;

class EventController extends Controller
{
    public function index() {

        // Pegando todos os registros da tabela events
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create() {
        return view('events.create');
    }

    // Cadastrando eventos no banco
    public function store(Request $request) {

        // Objeto do model(instanciando uma class)
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}

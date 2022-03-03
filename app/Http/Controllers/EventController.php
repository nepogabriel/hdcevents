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
}

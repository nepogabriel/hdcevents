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
        $event->items = $request->items;

        /*
        Image Upload
        -Verificando se existe a request da imagem e se é valida
        */
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            // Imagem
            $requestImage = $request->image;

            // Extensão
            $extension = $requestImage->extension();

            // Nome
            $imageName = md5(
                $requestImage->getClientOriginalName()
                . strtotime('now')
                . '.'
                . $extension);

            //Upload
            $requestImage->move(public_path('img/events'), $imageName);

            // Salvando no banco
            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id) {
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }
}

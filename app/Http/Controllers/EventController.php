<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        // Criando váriavel para retornar na view
        $nome = 'Gabriel';
        $idade = 22;

        $array = [10, 20, 30, 40, 50];

        $nomes = ['Matheus', 'Maria', 'João', 'Saulo'];

        return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => 'Programador PHP',
                'array' => $array,
                'nomes' => $nomes
            ]);
    }

    public function create() {
        return view('events.create');
    }
}

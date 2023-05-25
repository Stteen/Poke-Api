<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Pokedex extends Controller
{
    protected int $limit;
    
    public function __invoke(Request $request){
        //Obtener del usuario del limite pokemon que va a traer
        $limit = $request->limit??10;
        $responses = [];

        //Ejecutar un recorrido para obtener los valores de cantidad solicitada
        for($i = 1; $i <= $limit; $i++){
            $responses[] = Http::get('https://pokeapi.co/api/v2/pokemon/'.rand(1, 900))->json();
        }

        //almacenar los valores para poder tratar en la vista
        return view('welcome', compact('responses'));
    }
}

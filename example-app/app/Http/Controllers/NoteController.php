<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        // return view("ejemplo");
        // return view("ejemplo", ['mensaje' => 'Hola']);

        $notes = Note::all();
        //dd($notas);
        return view('note.index', compact('notes')); //Abre el archivo index, en la carpeta note, y envía los datos
    }
}

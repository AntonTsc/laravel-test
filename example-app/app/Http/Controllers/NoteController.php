<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class NoteController extends Controller
{
    public function index(): View{
        // return view("ejemplo");
        // return view("ejemplo", ['mensaje' => 'Hola']);

        $notes = Note::all();
        //dd($notas);
        return view('note.index', compact('notes')); //Abre el archivo index, en la carpeta note, y envía los datos
    }

    public function create(): View{
        return view('note.create');
    }

    public function store(Request $request): RedirectResponse{
        // return "hola";
        $note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        return redirect()->route('note.index');
    }

    public function edit(Note $note): View{
        return view('note.edit', compact('note'));
    }

    public function update(Request $request, Note $note): RedirectResponse{
        
    }
}

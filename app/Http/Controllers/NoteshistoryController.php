<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;
use App\Forms\NotesForm;
use Kris\LaravelFormBuilder\FormBuilder;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Notes::all();
        return view('notes.list',compact('notes'));
    }
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(NotesForm::class, [
            'method' => 'POST',
            'url' => route('note.store')
        ]);
        return view('notes.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(NotesForm::class);

        $form->redirectIfNotValid();

        Notes::create($form->getFieldValues());

        return $this->index();
    }


    public function show($id)
    {
        $note= Notes::find($id); 
        return view('notes.detail',compact('note'));
    }
}
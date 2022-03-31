<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufac;
use App\Forms\ManufacForm;
use Kris\LaravelFormBuilder\FormBuilder;

class ManufacturerController extends Controller
{
    public function index()
    {
        $manufac = Manufac::all();
        return view('manufac.list',compact('manufac'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(ManufacForm::class, [
            'method' => 'POST',
            'url' => route('manufac.store')
        ]);
        return view('manufac.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(ManufacForm::class);

        $form->redirectIfNotValid();

        Manufac::create($form->getFieldValues());

        return $this->index();
    }


    public function show($id)
    {
        $manufacture= Manufac::find($id); 
        return view('manufac.detail',compact('manufac'));
    }
}
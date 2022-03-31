<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Forms\EquipForm;
use Kris\LaravelFormBuilder\FormBuilder;


//switched from equipinfo -> equipment for sanity
class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = Equipment::all();
        return view('equipment.list',compact('equipment'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(EquipForm::class, [
            'method' => 'POST',
            'url' => route('equipment.store')
        ]);
        return view('equipment.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(EquipForm::class);

        $form->redirectIfNotValid();

        Equipment::create($form->getFieldValues());

        return $this->index();
    }


    public function show($id)
    {
        $equipment= Equipment::find($id); 
        return view('equipment.detail',compact('equipment'));
    }
}
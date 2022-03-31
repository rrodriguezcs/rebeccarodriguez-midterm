<?php

namespace App\Http\Controllers;
use App\Models\Equipinfo;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\EquipinfoForm;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipinfo = Equipinfo::all();
        return view('equipinfo.list', compact('equipinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(EquipinfoForm::class, [
            'method' => 'POST',
            'url' => route('equipinfo.store')
        ]);
        return view('equipinfo.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(EquipinfoForm::class);
        $form->redirectIfNotValid();
        Equipinfo::create($form->getFieldValues());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipinfo = Equipinfo::find($id);
        return view('equipinfo.detail', compact('equipinfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
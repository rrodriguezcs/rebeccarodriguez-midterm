<?php

namespace App\Http\Controllers;
use App\Models\Customers;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\CustomerForm;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customers::all();
        return view('customers.list', compact('customers'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CustomerForm::class, [
            'method' => 'POST',
            'url' => route('customers.store')
        ]);
        return view('customers.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        
        $form = $formBuilder->create(CustomerForm::class);
        $form->redirectIfNotValid();
        Customers::create($form->getFieldValues());
        return $this->index();
    }

    public function show($id)
    {
        $customer = Customers::find($id);
        return view('customers.detail', compact('customer'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
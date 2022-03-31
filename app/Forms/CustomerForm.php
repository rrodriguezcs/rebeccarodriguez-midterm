<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class CustomerForm extends Form
{
    public function buildForm()
    {
        $this -> 
        add('name', Field::TEXT, [
            'rules' => 'required',
        'label' => 'Customer Name'
        ])
        -> add('cell', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Phone Number'
        ])
        -> add('address', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Address'
         ])
         ->add('submit', 'submit',[
            'label' => 'Submit'
        ]);
    }
}
<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class ManufacForm extends Form
{
    public function buildForm()
    {
        $this -> 
        add('manufacturer', Field::TEXT, [
            'rules' => 'required',
        'label' => 'Manufacturer'
        ])
        -> add('manufac_email', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Manufacturer Email'
        ])
        -> add('manfac_phone', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Manufacturer Phone'
         ])
         ->add('submit', 'submit',[
            'label' => 'Submit'
        ]);
    }
}
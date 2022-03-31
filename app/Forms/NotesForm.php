<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class NotesForm extends Form
{
    public function buildForm()
    {
        $this -> 
        add('notes', Field::TEXT, [
            'rules' => 'required',
        'label' => 'Notes'
        ])
        -> add('services', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Services'
        ])
        -> add('software', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Software'
         ])
         -> add('equipment_id', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Equipment ID'
             ])
         ->add('submit', 'submit',[
            'label' => 'Submit'
        ]);
    }
}
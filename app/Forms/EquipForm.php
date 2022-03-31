<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

function getManufacturers() {
    $retVal = array();
    $manufacuters = Manufacturer::where('id' ,'>' ,0)->get();
    foreach($manufacturers as $manufacturer) {
        $retVal[strval($manufacturer["id"])] = strval($manufacturer["name"]);
    }
    return $retVal;
}

class EquipForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('name', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Full Name'
        ])
        -> add('price', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Price of item'
            ])
            ->add('model_year', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Model Year'
            ])
            ->add('speed', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Speed'
            ])
            ->add('manu_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Manufactuer ID'
            ])
            ->add('category', Field::SELECT, [
                'rules' => 'required',
                'label' => 'Category',
                'choices' => ['desktop' => "Desktop", 'laptop' => "Laptop", 'tablet' => 'Tablet'],
                'empty_value' => '=== Select Category ==='
            ])
            ->add('submit', 'submit',[
                'label' => 'Submit'
            ]);
    }
}
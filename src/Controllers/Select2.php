<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class Select2 extends Component
{
    public $id, $name, $label;
    public $topclass, $inputclass;
    public $value, $disabled, $required, $multiple;

    public function __construct(
            $id, $name = null,
            $label = 'Input Label',
            $topclass = null, $inputclass = null,
            $value = null, $disabled = false, $required = false, $multiple = false
        )
    {
        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->topclass = $topclass;
        $this->inputclass = $inputclass;
        $this->value = $value;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->multiple = $multiple;
    }

    public function render()
    {
        return view('xdg::select2');
    }
}
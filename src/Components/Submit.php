<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class Submit extends Component
{
    public $type, $label;
    public $topclass, $inputclass;

    public function __construct(
        $type = 'primary', $label = 'Submit',
        $topclass = 'text-center', $inputclass = null)
    {
        $this->type = $type;
        $this->topclass = $topclass;
        $this->inputclass = $inputclass;
        $this->label = $label;
    }

    public function render()
    {
        return view('xdg::submit');
    }
}
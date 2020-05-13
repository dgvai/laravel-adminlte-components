<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class Option extends Component
{
    public $value;
    public $selected, $disabled;

    public function __construct($value = null, $selected, $disabled)
    {
        $this->value = $value;
        $this->selected = $selected;
        $this->disabled = $disabled;
    }

    public function render()
    {
        return view('xdg::option');
    }
}
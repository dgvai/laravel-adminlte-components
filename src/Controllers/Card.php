<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $bg;
    public $title;
    public $collapsed;
    public $removable;
    public $maximizable;
    public $disabled;

    public function __construct(
        $bg, $title, 
        $collapsed=false, $removable=false, 
        $maximizable=false, $disabled=false)
    {
        $this->bg = $bg;
        $this->title = $title;
        $this->colla = $collapsed;
        $this->remov = $removable;
        $this->maximiz = $maximizable;
        $this->disabled = $disabled;
    }

    public function render()
    {
        return view('xdg::card');
    }
}
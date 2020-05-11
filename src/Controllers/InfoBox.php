<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class InfoBox extends Component
{
    public $bg, $icon, $title, $text, $full, $grad;

    public function __construct($bg, $icon, $title, $text, $full = false, $grad = false)
    {
        $this->bg = $bg;
        $this->icon = $icon;
        $this->title = $title;
        $this->text = $text;
        $this->full = $full;
        $this->grad = $grad;
    }

    public function render()
    {
        return view('xdg::info-box');
    }
}

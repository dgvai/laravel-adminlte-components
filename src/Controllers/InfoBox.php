<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class InfoBox extends Component
{
    public $bg, $icon, $title, $text;

    public function __construct($bg, $icon, $title, $text)
    {
        $this->bg = $bg;
        $this->icon = $icon;
        $this->title = $title;
        $this->text = $text;
    }

    public function render()
    {
        return view('xdg::info-box');
    }
}

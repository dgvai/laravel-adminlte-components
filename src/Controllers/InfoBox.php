<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class InfoBox extends Component
{
    public $bg, $icon, $title, $text, $full, $grad;

    public function __construct(
        $bg = 'info', $icon = 'fas fa-star', 
        $title, $text, $full = false, $grad = false)
    {
        $this->bg = $bg;
        $this->icon = $icon;
        $this->title = $title;
        $this->text = $text;
        $this->full = $full;
        $this->grad = $grad;
    }

    public function background()
    {
        return $this->full ?  ($this->grad ? 'bg-gradient-' : 'bg-').$this->bg : '';
    }

    public function foreground()
    {
        return !$this->full ?  ($this->grad ? 'bg-gradient-' : 'bg-').$this->bg : '';
    }

    public function render()
    {
        return view('xdg::info-box');
    }
}

<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class ProfileFlatItem extends Component
{
    public $badge, $title, $text, $url;

    public function __construct($badge = 'info', $title, $text, $url = '#')
    {
        $this->badge = $badge;
        $this->title = $title;
        $this->text = $text;
        $this->url = $url;
    }

    public function render()
    {
        return view('xdg::profile-flat-item');
    }
}
<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppMain extends Component
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function render(): View
    {
        return view('nara.layouts.app');
    }
}

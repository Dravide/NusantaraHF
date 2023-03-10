<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class JudulHalaman extends Component
{
    public $judul;

    public function __construct($judul)
    {
        $this->judul = $judul;
    }

    public function render(): View
    {
        return view('components.judul-halaman');
    }
}

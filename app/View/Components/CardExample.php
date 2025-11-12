<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardExample extends Component
{
    public $title;
    public $description;
    public $image;

    public function __construct($title, $description, $image)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
    }

    public function render()
    {
        return view('components.card-example');
    }
}

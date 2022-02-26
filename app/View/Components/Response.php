<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Response extends Component
{
    public $number;
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($number = 0, $content = "")
    {
        $this->number = $number;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.response');
    }
}

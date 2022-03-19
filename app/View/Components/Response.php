<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Response extends Component
{
    public $number;
    public $content;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($number = 0, $content = "", $name="")
    {
        $this->number = $number;
        $this->content = $content;

        if (empty($name)) {
            $name = "ななし";
        }

        $this->name = $name;
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

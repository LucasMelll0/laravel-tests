<?php

namespace App\View\Components\modals;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppModal extends Component
{
    public $id;
    public $title;
    public $confirmButton;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $title, $confirmButton = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->confirmButton = $confirmButton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modals.app-modal');
    }
}

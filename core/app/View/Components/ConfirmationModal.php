<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ConfirmationModal extends Component
{
    public $isCustom;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isCustom = false)
    {
        $this->isCustom = $isCustom;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.confirmation-modal');
    }
}

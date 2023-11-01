<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PayCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $typesubscribe;
    public $value;
    public $bordercolor;
    public $toutlip;

    public function __construct($typesubscribe, $value, $bordercolor = '#f4f4f4',$toutlip = false)
    {
        //
        $this->typesubscribe = $typesubscribe;
        $this->value = $value;
        $this->bordercolor = $bordercolor;
        $this->toutlip = $toutlip;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pay-card');
    }
}

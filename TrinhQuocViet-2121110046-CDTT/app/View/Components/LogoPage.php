<?php

namespace App\View\Components;

use App\Models\Link;
use Closure;
use Illuminate\Contracts\View\View;
use App\Models\Slider;
use Illuminate\View\Component;

class LogoPage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View|Closure|string
    {
        $arg = [
            ['status', '=', 1],
            ['position', '=', 'logopage'],
        ];
        $slide = Slider::where($arg)->orderBy('sort_order', 'ASC')->get();
        return view('components.logo-page', compact('slide'));
    }
}

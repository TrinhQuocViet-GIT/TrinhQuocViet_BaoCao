<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Link;
use Closure;
use Illuminate\Contracts\View\View;
use App\Models\Contact;

class ContactPage extends Component
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
        ];
        $contacts = Contact::where($arg)->get();
        return view('components.contact-page', compact('contacts'));
    }
}

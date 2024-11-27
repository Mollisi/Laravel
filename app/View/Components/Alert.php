<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public string $message;
    public function __construct($message)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
   
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}


// class Person{
//     public string $name;

//     public string $height;

//     public function __construct($name,)
//     {
        
//     }
// }
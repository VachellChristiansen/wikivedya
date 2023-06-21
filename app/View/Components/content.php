<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class content extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $current,
        public string $lang,
        public string $article,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content');
    }
}

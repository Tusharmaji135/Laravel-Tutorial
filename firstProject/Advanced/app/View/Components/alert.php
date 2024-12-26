<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    public $type;
    public $message;
    public $dismissible;

    protected $arrayAvailable = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

    public function __construct(string $type = "secondary", string $message = "no message",$dismissible = false)
    {
        $this->type = $type;
        $this->message = $message;
        $this->dismissible = $dismissible;
    }

    public function validType()
    {
        return in_array($this->type, $this->arrayAvailable) ? $this->type : 'secondary';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}

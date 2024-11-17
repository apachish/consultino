<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use function Symfony\Component\String\b;

class Breadcrumb extends Component
{
    public $title;
    public $route;
    public function render()
    {
        $this->route = Route::current()->getName();
        switch ($this->route) {
            case 'contact-us':
                $this->title = 'Contact Us';
                break;
                case 'about-us':
                $this->title = 'About Us';
                break;
        }
        return view('livewire.breadcrumb');
    }
}

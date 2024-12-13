<?php

namespace App\Livewire;

use App\Models\Portfolio;
use Livewire\Component;

class Portfolios extends Component
{
    public $portfolios;
    public $categories;
    public function render()
    {
        $this->portfolios = Portfolio::where("status",1)->orderBy("sort_order","DESC")->get();
        $this->categories = $this->portfolios->pluck('category')->toArray();
        return view('livewire.portfolios');
    }
}

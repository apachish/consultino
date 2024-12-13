<?php

namespace App\Livewire;

use App\Models\Portfolio;
use Livewire\Component;

class PortfolioDetails extends Component
{
    public $portfolio;
    public $slug;
    public $category;
    public function render()
    {
        $this->portfolio = Portfolio::where("status",1)
            ->where("category",$this->category)
            ->where("slug",$this->slug)
            ->firstOrFail();
        return view('livewire.portfolio-details');
    }
}

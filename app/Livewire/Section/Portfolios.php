<?php

namespace App\Livewire\Section;

use App\Models\Portfolio;
use Livewire\Component;

class Portfolios extends Component
{
    public $portfolios;
    public $categories;
    public function render()
    {
        $this->portfolios = Portfolio::where("status",1)->groupBy("category")->with("parameters")->limit(9)->orderBy("sort_order","DESC")->get();
        $this->categories = $this->portfolios->pluck('category')->toArray();
        $this->portfolios = $this->portfolios->map(function ($portfolio) {
            return ["portfolio"=>$portfolio,"parameters"=>$portfolio->parameters->keyBy('key')];
        });
        return view('livewire.section.portfolios');
    }
}

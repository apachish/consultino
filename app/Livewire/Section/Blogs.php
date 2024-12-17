<?php

namespace App\Livewire\Section;

use App\Models\Article;
use Livewire\Component;

class Blogs extends Component
{
    public $blogs;
    public function render()
    {
        $this->blogs = Article::where("is_published", 1)->limit(9)->get();
        $this->blogs = $this->blogs->map(function ($blogs) {
            $blogs["parameters"] =$blogs->parameters->keyBy('key');
            return $blogs;
        });
        return view('livewire.section.blogs');
    }
}

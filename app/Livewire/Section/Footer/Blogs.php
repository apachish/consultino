<?php

namespace App\Livewire\Section\Footer;

use App\Models\Article;
use Livewire\Component;

class Blogs extends Component
{
    public $blogs ;
    public function render()
    {
        $this->blogs = Article::where("is_published", 1)->limit(3)->get();

        return view('livewire.section.footer.blogs');
    }
}

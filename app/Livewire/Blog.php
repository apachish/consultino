<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;

    public function render()
    {
        $blogs = Article::where("status", 1)->latest()->paginate(9);
        return view('livewire.blog',compact('blogs'));
    }
}

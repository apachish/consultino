<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $blogs = Article::where("is_published", 1)->latest()->paginate(9);

        $blogs->setCollection(
            $blogs->getCollection()->map(function ($blog) {
                $blog["parameters"] = $blog->parameters->keyBy('key');
                return $blog;
            })
        );

        return view('livewire.blog',compact('blogs'));
    }
}

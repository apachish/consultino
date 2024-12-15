<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;
use Livewire\Component;

class BlogDetails extends Component
{
    public $slug;
    public $blog;
    public $parameters;
    public $comments;
    public $comment;
    public $previous;
    public $next;
    public $categories;
    public $recent_post;
    public $tags;
    public $archives;

    public function sendComment(){
        $this->validate([
            'comment.fullName' => 'required',
            'comment.email' => 'required,email',
            'comment.message' => 'required'

        ]);
        $comment = Comment::create([
            'article_id' => $this->blog->id,
            'full_name' => $this->comment->fullName,
            'email' => $this->comment->email,
            'message' => $this->comment->message,
        ]);
    }
    public function render()
    {
        $this->blog = Article::where('slug', $this->slug)
            ->with(["parameters",'tags','comments'])
            ->withCount('comments')
            ->where("is_published",1)
            ->firstOrFail();
        $this->previous = $this->blog->previous();
        $this->next = $this->blog->next();
        $this->categories = Article::groupBy("category")->where("is_published",1)->get()->pluck("category")->toArray();
        $this->parameters = $this->blog->parameters->keyBy('key');
        $this->recent_post = Article::where("is_published",1)->limit(3)->orderBy("created_at",'DESC')->get();
        $this->tags = Tag::inRandomOrder()->limit(15)->get();
        $this->archives  = Article::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as post_count')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
        return view('livewire.blog-details');
    }
}

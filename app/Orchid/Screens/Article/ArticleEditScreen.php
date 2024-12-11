<?php

namespace App\Orchid\Screens\Article;

use App\Models\Service;
use App\Orchid\Layouts\Article\ArticleEditLayout;
use App\Orchid\Layouts\SubtractListener;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Orchid\Attachment\File;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ArticleEditScreen extends Screen
{
    /**
     * @var Service
     */
    public $article;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Service $article): iterable
    {
        return [
            'article'       => $article
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->article->id ? 'Edit Article' : 'Create Article';
    }


    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return $this->article->id ? 'Edit Article' : 'Create Article';
    }

    public function permission(): ?iterable
    {
        return [
            'platform.systems.users',
        ];
    }


    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save'))
                ->icon('bs.check-circle')
                ->method('save'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            ArticleEditLayout::class,
            SubtractListener::class

        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Service $article, Request $request)
    {
        $request->validate([
            'article.title' => [
                'required',
            ],
            'article.type' => [
                'required',Rule::in(["image", "iframe", "slider"])
            ],
            'article.sort_order' => [
                'required','min:1'
            ],
            'article.description' => [
                'required'
            ],
            'article.category' => [
                'required'
            ],
            'article.slider' => [
                'required_if:type,slider'
            ],
            'article.slider.*' => [
                'required_if:type,slider','extensions:jpg,png'
            ],
            'article.image' => [
                'required_if:type,image','extensions:jpg,png'
            ],
            'article.url' => [
                'required_if:type,iframe','url:http,https'
            ],




        ]);

        $data = $request->collect('article');
        logger("q",$data->toArray());
        $data['slug'] = Str::slug($data['title']);
        if($article->id)
            $article->update($data->toArray());
        else
            $article->create($data->toArray());



        Toast::info(__('Article was saved.'));

        return redirect()->route('platform.systems.blogs');
    }





}

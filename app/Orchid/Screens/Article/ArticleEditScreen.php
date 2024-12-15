<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use App\Models\Service;
use App\Models\Tag;
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
     * @var Article
     */
    public $article;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Article $article): iterable
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
    public function save(Article $article, Request $request)
    {
        $request->validate([
            'article.title' => [
                'required',
            ],
            'article.description' => [
                'required'
            ],
            'article.category' => [
                'required'
            ],
            'subtract.type' => [
                'required',Rule::in(["image", "iframe", "slider"])
            ],
            'subtract.images' => [
                'required_if:type,slider'
            ],
            'subtract.images.*' => [
                'required_if:type,slider','extensions:jpg,png'
            ],
            'subtract.image' => [
                'required_if:type,image','extensions:jpg,png'
            ],
            'subtract.url' => [
                'required_if:type,iframe','url:http,https'
            ],
        ]);

        $data = $request->collect('article');
        $subtracts = $request->collect('subtract');
        $data = $data->toArray();
        $data['type'] = $subtracts['type'];
        $data['slug'] = Str::slug($data['title']);
        $data['author_id'] = auth()->id();
        if($article->id)
            $article->update($data);
        else
            $article = $article->create($data);

        foreach (data_get($data,'tags') as $row) {
            $tag = Tag::updateOrCreate(["title" => $row],["title" => $row]);
            $article->tags()->attach($tag->id);
        }

        switch ($subtracts['type']) {
            case 'slider':
                $slides = [];
                foreach (data_get($subtracts, 'images', []) as $key => $item) {
                    $slide['title'] = $item['title'];
                    $file = $request->file("subtract.images.$key.image");
                    if ($file) {
                        // ذخیره‌سازی فایل
                        $imagePath = $file->store('portfolio', 'images');
                        $slide['image'] = url("images/" . $imagePath);
                    }
                    $slides[] = $slide;
                }
                $article->parameters()->updateOrCreate([
                    'article_id' => $article->id,
                    'key' => 'images',
                ], [
                    'value' => json_encode($slides),
                ]);


                break;
            case 'image':
                $image = $request->file('subtract.image');

                if ($image) {
                    // ذخیره‌سازی فایل
                    $imagePath = $image->store('$article', 'images');
                    $url_image = url("images/" . $imagePath);
                    $article->parameters()->updateOrCreate([
                        'article_id' => $article->id,
                        'key' => 'image',
                    ], [
                        'value' => $url_image,
                    ]);
                }

                break;
            case 'iframe':
                $article->parameters()->updateOrCreate([
                    '$article_id' => $article->id,
                    'key' => 'iframe',
                ], [
                    'value' => data_get($subtracts, 'url'),
                ]);
                break;
        }


        Toast::info(__('Article was saved.'));

        return redirect()->route('platform.systems.blogs');
    }





}

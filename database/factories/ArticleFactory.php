<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = Faker::word();
        return [
            'title' => $title,
            'description'=>fake()->text(200),
            'category'=>rand(0,1)?(Article::distinct()->pluck('category', 'category')->first()?:fake()->word()):fake()->word(),
            'slug'=>slug_seo($title),
            'body',
            'author_id',
            'is_published',
            'type',
        ];
    }
}

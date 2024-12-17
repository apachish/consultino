<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleParameter;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Ybazli\Faker\Facades\Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 50) as $index) {
            // ایجاد مقاله
            $title = Faker::sentence();
            $article = Article::create([
                'title' => $title,
                'description' => Faker::paragraph(),
                'category' => $faker->randomElement(['خبر', 'آموزش', 'دستور']),
                'slug' => slug_seo($title),
                'body' => Faker::paragraph(500),
                'author_id' => User::inRandomOrder()->first()->id,
                'is_published' => $faker->boolean,
                'type' => $faker->randomElement(['image', 'iframe', 'slider']),
            ]);

            // افزودن پارامترهای مرتبط با نوع مقاله
            if ($article->type === 'image') {
                ArticleParameter::create([
                    'key' => 'image',
                    'value' => "https://loremflickr.com/640/480/paris,girl/all",//$faker->imageUrl(640, 480, 'nature', true, 'Faker'),
                    'article_id' => $article->id,
                ]);
            } elseif ($article->type === 'iframe') {
                ArticleParameter::create([
                    'key' => 'iframe',
                    'value' => Arr::random([
                        "https://www.clipsho.com/share/video/play/u3v411g4o1m48arilq",
                        "https://www.clipsho.com/share/video/play/u3v411g4o1m45hw54e",
                        "https://www.clipsho.com/share/video/play/u3v41gnjmm3y8zfa1"
                    ]),//$faker->url(),
                    'article_id' => $article->id,
                ]);
            } elseif ($article->type === 'slider') {
                $images = [];
                for($i=0;$i<=rand(1,3);$i++){
                    $images[] =
                        [
                            "title"=>Faker::word(),
                            "image"=>"https://loremflickr.com/640/480/paris,girl/all",//$faker->imageUrl(640, 480, 'business', true, 'Slide ' . $i)
                        ];
                }

                // تولید چند تصویر برای اسلایدر
                    ArticleParameter::create([
                        'key' => 'slider',
                        'value' => json_encode($images),
                        'article_id' => $article->id,
                    ]);

            }

            // افزودن تگ‌ها
            $tagIds = [];
            foreach (range(1, 3) as $tagIndex) {
                $tag = Tag::firstOrCreate([
                    'title' => Faker::word(),
                ]);
                $tagIds[] = $tag->id;
            }

            $article->tags()->attach($tagIds);
        }
    }
}

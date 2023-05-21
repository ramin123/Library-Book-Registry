<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Database\Seeder;
use Faker\Factory;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategory::truncate();
        Blog::truncate();
        $faker = Factory::create();

        //create blog categories
        for ($i = 0; $i < 5; $i++) {
            BlogCategory::create([
                'title' => $faker->word(1, true),
            ]);
        }

        //create blogs
        for ($i = 0; $i < 5; $i++) {
            Blog::create([
                'blog_category_id'  => rand(1, 5),
                'user_id'   => 1,
                'title' => $faker->sentence(6),
                'content'   => $faker->text(500),
                'image' => $faker->image('public/uploads/blog/', 640, 480, null, false),
            ]);
        }
        // TODO: add tags and add them to blog posts
        $this->command->info('Dummy blog categories and posts have been created!');
    }
}

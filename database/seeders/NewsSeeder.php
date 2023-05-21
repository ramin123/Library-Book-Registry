<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Faker\Factory;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        News::truncate();
        $faker = Factory::create();

        $categories = ['business', 'popular', 'hotnews', 'lifestyle', 'world', 'world', 'sports'];
        for ($i = 0; $i < count($categories); $i++) {
            for ($j = 0; $j < 5; $j++) {
                News::create([
                    'title' => $categories[$i] . ' title ' . $j,
                    'content'   => $faker->paragraph(),
                    'category' => $categories[$i],
                    'image' => $faker->image('public/uploads/news/', 640, 480, null, false),
                ]);
            }
        }

        $this->command->info('Dummy news entered into database');
    }
}

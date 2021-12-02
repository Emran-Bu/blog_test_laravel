<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();

        foreach(range(1, 20) as $index){
            $name = $faker->name;
            Post::create([
                'user_id'       => rand(1, 21),
                'cat_id'        => rand(1, 10),
                'title'         => $name,
                'slug'          => strtolower(str_replace(' ', '_', $name)),
                'desc'          => $faker->paragraph,
                'image'         => $faker->imageUrl(),
                'status'        => 'active'
            ]);
        }
    }
}

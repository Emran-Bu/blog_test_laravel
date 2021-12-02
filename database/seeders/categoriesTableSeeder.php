<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Category;

class categoriesTableSeeder extends Seeder
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

        foreach(range(1, 10) as $index){
            $name = $faker->name;
            Category::create([
                'user_id'   => rand(1, 20),
                'name'      => $name,
                'slug'      => strtolower(str_replace(' ', '_', $name)),
                'status'    => 'active'
            ]);
        }

    }
}

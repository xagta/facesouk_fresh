<?php

use App\Models\Artisant;
use Illuminate\Database\Seeder;

class ArtisantProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        \App\Models\ArtisantProduct::truncate() ;

        $artisants=Artisant::all()->pluck('id') ;


        for ($i = 0; $i < 5; $i++) {
          $p= \App\Models\ArtisantProduct::create([
                'image_url' => $faker->imageUrl(),
                'name' => $faker->text(),
                'description' => $faker->realText(200),
                'artisant_id'=> $faker->randomElement($artisants),
            ]);


        }
    }
}

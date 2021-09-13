<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
class PostsTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 50; $i++){
           $postObject = new Post();
           $postObject -> title = $faker->sentence(5);
           $postObject-> content =$faker->text();
           $postObject->author=$faker->text(50);
           $postObject->cover = $faker->imageUrl(640, 480, 'books', true);
           $postObject-> save(); 
        }
    }
}

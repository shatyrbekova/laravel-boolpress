<?php

use App\Category;
use Illuminate\Database\Seeder;
use App\Post;
use App\AuthorDetail;
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
        $categoryList=[
            'thriller',
            'avventra',
            'azione',
            'fantascienza',
            'romanzo',
            'biografia'
        ];
        $listofCategoryID =[];

        foreach($categoryList as $category){
            $categoryObject = new Category();
            $categoryObject ->name=$category;
            $categoryObject->save();
            $listofCategoryID[]=$categoryObject->id;
        }
        for ($i = 0; $i < 50; $i++){
            $authorDetail=new AuthorDetail();
            $authorDetail->mail= preg_replace('/@example\..*/', '@domain.com', $faker->unique()->safeEmail);
            $authorDetail->address=$faker->words(1, true);
            $authorDetail->phone=$faker->phoneNumber();
            $authorDetail->save();
            
           $postObject = new Post();
           $postObject -> title = $faker->sentence(5);
           $postObject-> content =$faker->text();
           $postObject->author=$faker->text(50);
           $postObject->cover = $faker->imageUrl(640, 480, 'books', true);
           $randomCategoryKey =array_rand($listofCategoryID,1);
           $categoryID=  $listofCategoryID[$randomCategoryKey];
           $postObject->category_id=$categoryID;

        //    $postObject->author_detail_id=$authorDetail->id;

           $postObject-> save(); 
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();   // truncating everytime we seed the database
        // Category::truncate();
        // Post::truncate();
        
        //!!!!!!!This is for getting same author name for all posts!!!!!!
        // $user= User::factory()->create([   // having same user for each post
        //     'name'=>'John Doe'
        // ]);

        // Post::factory(5)->create([  //making sure all posts have the same author name
        //     'user_id' =>$user->id
        // ]);
        //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

            Post::factory(6)->create();
        
        // $user= User::factory()->create();

        // $family= Category::create([  // database seeding
        //     'name' => 'Family',
        //     'slug'=> 'family'
        // ]);

        // $work= Category::create([
        //     'name' => 'Work',
        //     'slug'=> 'work'
        // ]);

        // $hobby= Category::create([
        //     'name' => 'Hobby',
        //     'slug'=> 'hobby'
        // ]);

        // Post::create([
        //     'user_id'=> $user->id,
        //     'category_id'=> $family->id,
        //     'title'=> 'My Family Post',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>
        //     '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo numquam maxime repudiandae quo repellendus. Ducimus, odit! Pariatur non numquam molestiae ullam sed fuga commodi ducimus. Hic quae porro cumque esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo numquam maxime repudiandae quo repellendus. Ducimus, odit! Pariatur non numquam molestiae ullam sed fuga commodi ducimus. Hic quae porro cumque esse.</p>',
        //     'slug'=> 'myfamilypost'
        // ]);
            
        // Post::create([
        //     'user_id'=> $user->id,
        //     'category_id'=> $work->id,    
        //     'title'=> 'My Work Post',
        //     'excerpt'=> 'Excerpt for my post.',
        //     'body'=>
        //     '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo numquam maxime repudiandae quo repellendus. Ducimus, odit! Pariatur non numquam molestiae ullam sed fuga commodi ducimus. Hic quae porro cumque esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo numquam maxime repudiandae quo repellendus. Ducimus, odit! Pariatur non numquam molestiae ullam sed fuga commodi ducimus. Hic quae porro cumque esse.</p>',
        //     'slug'=> 'myworkpost'
        // ]);
            
        // Post::create([
        //     'user_id'=> $user->id,
        //     'category_id'=> $hobby->id,
        //     'title'=> 'My Hobby Post',
        //     'excerpt'=> 'Excerpt for my post.',
        //     'body'=>
        //     '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo numquam maxime repudiandae quo repellendus. Ducimus, odit! Pariatur non numquam molestiae ullam sed fuga commodi ducimus. Hic quae porro cumque esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo numquam maxime repudiandae quo repellendus. Ducimus, odit! Pariatur non numquam molestiae ullam sed fuga commodi ducimus. Hic quae porro cumque esse.</p>',
        //     'slug'=> 'myhobbypost'
        // ]);


    }
}

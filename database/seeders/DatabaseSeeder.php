<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe',
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);

        //Post::factory(5)->create();


        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);
        
        // $hobbies = Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium nihil, ut sapiente cumque ipsum sequi vitae esse iure quas eos doloremque molestiae commodi praesentium, dolorem tempora ratione! Sed, provident!</p>',

        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Job Post',
        //     'slug' => 'my-job-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium nihil, ut sapiente cumque ipsum sequi vitae esse iure quas eos doloremque molestiae commodi praesentium, dolorem tempora ratione! Sed, provident!</p>',

        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $hobbies->id,
        //     'title' => 'My Dance Post',
        //     'slug' => 'my-dance-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium nihil, ut sapiente cumque ipsum sequi vitae esse iure quas eos doloremque molestiae commodi praesentium, dolorem tempora ratione! Sed, provident!</p>',

        // ]);




    }
}
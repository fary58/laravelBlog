<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        Post::factory(5)->create();

        // \App\Models\User::factory(10)->create();
    //     $user =User::factory()->create();


    //   $personal = Category::create([
    //         'name'=>'Personal',
    //         'slug'=>'personal'
    //     ]);

    //     $work = Category::create([
    //         'name'=>'Work',
    //         'slug'=>'work'
    //     ]);

    //     Post::create([

    //         'user_id'=> $user->id,
    //         'title' => "Title of the first post",
    //         'category_id' => $personal->id,
    //         'slug'=> 'my-first-post',
    //         'excerpt' => 'View my first post',
    //         'body' => 'What is Lorem Ipsum?
    //         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
    //         the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of
    //         type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
    //         the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
    //         with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
    //         publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
    //     ]);


    //     Post::create([

    //         'user_id'=> $user->id,
    //         'title' => "Title of the second post",
    //         'category_id' => $work->id,
    //         'slug'=> 'my-second-post',
    //         'excerpt' => 'View my second post',
    //         'body' => 'What is Lorem Ipsum?
    //         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
    //         the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of
    //         type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
    //         the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
    //         with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
    //         publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
    //     ]);

    }
}

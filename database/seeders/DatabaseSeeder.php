<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // fitur ajaib untuk meng insert 10 database acak

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            

        // membuat user baru
        // User::create([
        //     'name' => 'michael',
        //     'email' => 'michael@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Fatimah',
        //     'email' => 'fatimah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create(); 

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // isi table Post

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta quaerat numquam provident sapiente quos repellendus nesciunt eligendi deserunt deleniti asperiores.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aperiam ex a itaque deserunt voluptatem, tenetur velit quas error repudiandae dicta ipsa excepturi fugiat, nisi alias repellendus distinctio! Saepe recusandae quo enim unde voluptates sint! Porro mollitia soluta, pariatur sed natus eum nihil est iure reprehenderit id rerum voluptatum qui modi at exercitationem saepe cupiditate dignissimos ab repellat veritatis animi voluptas! Excepturi ut impedit eligendi inventore, debitis est sequi repellat eaque, eius libero fugit in enim sunt earum repudiandae qui perspiciatis minima voluptatum odit accusamus dignissimos. Quisquam rerum ducimus beatae deserunt excepturi ipsum esse, nulla ea officia maxime sunt nisi!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta quaerat numquam provident sapiente quos repellendus nesciunt eligendi deserunt deleniti asperiores.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aperiam ex a itaque deserunt voluptatem, tenetur velit quas error repudiandae dicta ipsa excepturi fugiat, nisi alias repellendus distinctio! Saepe recusandae quo enim unde voluptates sint! Porro mollitia soluta, pariatur sed natus eum nihil est iure reprehenderit id rerum voluptatum qui modi at exercitationem saepe cupiditate dignissimos ab repellat veritatis animi voluptas! Excepturi ut impedit eligendi inventore, debitis est sequi repellat eaque, eius libero fugit in enim sunt earum repudiandae qui perspiciatis minima voluptatum odit accusamus dignissimos. Quisquam rerum ducimus beatae deserunt excepturi ipsum esse, nulla ea officia maxime sunt nisi!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta quaerat numquam provident sapiente quos repellendus nesciunt eligendi deserunt deleniti asperiores.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aperiam ex a itaque deserunt voluptatem, tenetur velit quas error repudiandae dicta ipsa excepturi fugiat, nisi alias repellendus distinctio! Saepe recusandae quo enim unde voluptates sint! Porro mollitia soluta, pariatur sed natus eum nihil est iure reprehenderit id rerum voluptatum qui modi at exercitationem saepe cupiditate dignissimos ab repellat veritatis animi voluptas! Excepturi ut impedit eligendi inventore, debitis est sequi repellat eaque, eius libero fugit in enim sunt earum repudiandae qui perspiciatis minima voluptatum odit accusamus dignissimos. Quisquam rerum ducimus beatae deserunt excepturi ipsum esse, nulla ea officia maxime sunt nisi!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta quaerat numquam provident sapiente quos repellendus nesciunt eligendi deserunt deleniti asperiores.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aperiam ex a itaque deserunt voluptatem, tenetur velit quas error repudiandae dicta ipsa excepturi fugiat, nisi alias repellendus distinctio! Saepe recusandae quo enim unde voluptates sint! Porro mollitia soluta, pariatur sed natus eum nihil est iure reprehenderit id rerum voluptatum qui modi at exercitationem saepe cupiditate dignissimos ab repellat veritatis animi voluptas! Excepturi ut impedit eligendi inventore, debitis est sequi repellat eaque, eius libero fugit in enim sunt earum repudiandae qui perspiciatis minima voluptatum odit accusamus dignissimos. Quisquam rerum ducimus beatae deserunt excepturi ipsum esse, nulla ea officia maxime sunt nisi!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);



    }
}
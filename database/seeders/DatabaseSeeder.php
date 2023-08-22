<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();


        // membuat data seed 
        // User::create([
        //     'name' => 'Tajun nur',
        //     'email' => 'tajunnur46@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Reza Nabila',
        //     'email' => 'rn@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Postingan Pertama',
        //     'slug' => 'postingan-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum minima esse, cupiditate, adipisci harum, dolor voluptates a ad nisi officia soluta ipsam? Nostrum molestiae velit totam, provident possimus soluta explicabo adipisci modi veritatis. </p> <p>Unde in sequi obcaecati praesentium, voluptatem officia magni, doloremque impedit accusamus eaque similique odio expedita incidunt!</p>'
        // ]);
        // Post::create([
        //     'title' => 'Postingan Kedua',
        //     'slug' => 'postingan-kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum minima esse, cupiditate, adipisci harum, dolor voluptates a ad nisi officia soluta ipsam? Nostrum molestiae velit totam, provident possimus soluta explicabo adipisci modi veritatis. </p> <p>Unde in sequi obcaecati praesentium, voluptatem officia magni, doloremque impedit accusamus eaque similique odio expedita incidunt!</p>'
        // ]);
        // Post::create([
        //     'title' => 'Postingan Ke Tiga',
        //     'slug' => 'postingan-ke-tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum minima esse, cupiditate, adipisci harum, dolor voluptates a ad nisi officia soluta ipsam? Nostrum molestiae velit totam, provident possimus soluta explicabo adipisci modi veritatis. </p> <p>Unde in sequi obcaecati praesentium, voluptatem officia magni, doloremque impedit accusamus eaque similique odio expedita incidunt!</p>'
        // ]);
        // Post::create([
        //     'title' => 'Postingan Ke Empat',
        //     'slug' => 'postingan-ke-empat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum minima esse, cupiditate, adipisci harum, dolor voluptates a ad nisi officia soluta ipsam? Nostrum molestiae velit totam, provident possimus soluta explicabo adipisci modi veritatis. </p> <p>Unde in sequi obcaecati praesentium, voluptatem officia magni, doloremque impedit accusamus eaque similique odio expedita incidunt!</p>'
        // ]);

        // data factory
        User::factory(5)->create();
        Post::factory(10)->create();
    }
}

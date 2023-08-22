<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "judul" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tajun Nur",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit maxime numquam modi nemo dolores repellat pariatur in quae voluptate! Dolores magni minus atque nobis beatae nisi minima alias sequi excepturi! Placeat voluptate velit similique fuga recusandae ducimus laborum rem alias voluptas amet atque molestias earum quia, officia molestiae qui? Fugiat, accusantium mollitia. Hic mollitia aut commodi fugiat deserunt voluptas vitae a repellat sit, rem iure ratione, accusantium eligendi laboriosam dolores saepe itaque sunt fuga quisquam. Eos necessitatibus eum sunt similique nobis laborum veritatis dignissimos illum ea! Alias neque, tempora, odit, suscipit maxime beatae voluptatibus culpa laboriosam exercitationem a optio iste."
        ],
        [
            "judul" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Reza Nya Nabila",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi aperiam, facere, sunt accusantium nobis dolores temporibus totam, vitae odit praesentium adipisci enim. Eaque suscipit non odio voluptate cumque repellat odit provident impedit aliquid ipsum officia nostrum possimus praesentium minima sequi voluptas sapiente, quasi unde blanditiis alias? Nulla officia nostrum animi voluptate beatae qui magni. Eos pariatur, libero excepturi fugiat possimus quia rem deserunt nostrum animi dolor soluta asperiores esse voluptas hic est iusto in? Sed, autem error? Facilis inventore quis eum pariatur, expedita ratione, eveniet iste mollitia assumenda eius sit? Amet, alias. Quisquam odit laboriosam corrupti voluptas quas necessitatibus quia ad beatae saepe iste! Praesentium, quod expedita doloremque odit numquam asperiores, quae officiis architecto voluptatibus minus deleniti at dolor porro vero dicta itaque aperiam. Porro adipisci explicabo distinctio illo asperiores totam nihil. Expedita error illo, nesciunt magnam quia adipisci eaque modi fugit maxime temporibus accusantium repellendus consequuntur doloribus inventore!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        $post = [];

        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}

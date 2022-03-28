<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Herfian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora amet ab provident quo aut voluptate qui culpa fugiat eius itaque temporibus tenetur, doloribus in nemo rerum quas expedita earum ratione quia commodi facilis eum illo laudantium animi. Quae, dignissimos. Quidem, qui perferendis. Nobis, porro iure excepturi dignissimos accusamus error nesciunt totam ab dolorem suscipit asperiores in dolore harum eveniet eligendi modi voluptate architecto praesentium iste debitis quaerat hic, adipisci impedit aliquid. Dicta soluta quis a quaerat aliquam dolore facere optio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mark",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque laborum ipsa adipisci facilis atque laboriosam tenetur nulla! Neque optio ab quam libero delectus incidunt blanditiis nostrum provident exercitationem doloremque. Quis quisquam placeat magni. Non optio blanditiis aliquam minima. Quasi aut pariatur dolore repellat officiis, alias, assumenda nihil quod quae delectus nulla nam, perferendis sapiente consequuntur explicabo quo praesentium dolorum exercitationem architecto? Nulla quisquam in minima. Sint, quod. Eos, ut quae tenetur totam pariatur aperiam voluptatem recusandae corporis maxime a amet incidunt natus molestiae cum dolor eum fugiat sed voluptate itaque sapiente laborum. Eveniet libero assumenda tempora minima laborum aliquam perspiciatis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
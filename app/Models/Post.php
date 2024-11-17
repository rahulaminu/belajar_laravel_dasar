<?php

namespace App\Models; 

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Rahul Aminu',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero optio dolores sed, molestiae nulla officiis illum eum obcaecati hic deleniti aperiam nesciunt labore iure eius officia porro maxime ab voluptatum.'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Rahul Aminu',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia repellat adipisci deserunt numquam, incidunt deleniti et ad. Magnam accusamus, unde consectetur ratione illo, sequi facere ipsam adipisci voluptate quia soluta!'
            ],
        ];
    }

    public static function find($slug) :array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug );

        if(!$post) {
            abort(404);
        }

        return $post;
    }
}

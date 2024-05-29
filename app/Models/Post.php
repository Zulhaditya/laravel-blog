<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Zulhaditya Hapiz',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo tempora eius hic. Distinctio
        eveniet quae rem voluptates itaque veniam asperiores maiores. Laboriosam magnam, cum est odit quos repellat sapiente quod!'
      ],
      [
        'id' => 2,
        'title' => 'Judul Artikel 2',
        'slug' => 'judul-artikel-2',
        'author' => 'Inayah Wulandari',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti iusto esse, facere,
        autem officiis assumenda deserunt id quam doloremque totam magni distinctio porro animi ut mollitia! Repellat sed
        deserunt debitis?'
      ]
    ];
  }

  public static function find($slug): array
  {


    // return Arr::first(static::all(), function ($post) use ($slug) {
    //   return $post['slug'] == $slug;
    // });

    $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

    if (!$post) {
      abort(404);
    }

    return $post;
  }
}

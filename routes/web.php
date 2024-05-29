<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
  return view('about', ['name' => 'Inayah Fitri Wulandari', 'title' => 'About']);
});

Route::get('/posts', function () {
  return view('posts', ['title' => 'Blog', 'posts' => [
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
  ]]);
});

Route::get('/contact', function () {
  return view('contact', ['title' => 'Contact']);
});

Route::get('/posts/{slug}', function ($slug) {
  $posts = [
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
      'slug' => 'judul-artikel-2',
      'title' => 'Judul Artikel 2',
      'author' => 'Inayah Wulandari',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti iusto esse, facere,
      autem officiis assumenda deserunt id quam doloremque totam magni distinctio porro animi ut mollitia! Repellat sed
      deserunt debitis?'
    ]
  ];

  $post = Arr::first($posts, function ($post) use ($slug) {
    return $post['slug'] == $slug;
  });

  return view('post', ['title' => 'Single Post', 'post' => $post]);
});

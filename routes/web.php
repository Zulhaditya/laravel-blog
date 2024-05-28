<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Inayah']);
});

Route::get('/blog', function () {
    return view(
        'blog',
        ['title' => 'article-1', 'author' => 'author-1', 'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae asperiores at, facere aliquid quam minus aut iusto porro quia enim aliquam delectus a voluptatum consequatur veritatis labore reprehenderit maxime esse!'],
        ['title' => 'article-2', 'author' => 'author-2', 'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam expedita voluptatum cumque odio labore voluptatem eveniet tempore vero consequuntur. Molestias quia asperiores ratione, fugit reprehenderit voluptatem! Eveniet accusamus neque saepe?
        '],
    );
});

Route::get('/contact', function () {
    return view(
        'contact',
        ['instagram' => 'https://instagram.com/zulhaditya'],
        ['github' => 'https://github.com/zulhaditya'],
    );
});

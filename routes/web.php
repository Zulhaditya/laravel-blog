<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
  return view('about', ['name' => 'Inayah Fitri Wulandari', 'title' => 'About']);
});

Route::get('/posts', function () {
  return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
  return view('contact', ['title' => 'Contact']);
});

Route::get('/posts/{post:slug}', function (Post $post) {
  return view('post', ['title' => 'Single Post', 'post' => $post]);
});

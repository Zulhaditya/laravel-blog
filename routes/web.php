<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('home', ['title' => '']);
});

Route::get('/about', function () {
  return view('about', ['name' => 'Inayah Fitri Wulandari', 'title' => 'About Me']);
});

Route::get('/posts', function () {
  return view('posts', ['title' => 'Latest article', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
  return view('contact', ['title' => 'Contact']);
});

Route::get('/posts/{post:slug}', function (Post $post) {
  return view('post', ['title' => 'Article details', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
  return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
  return view('posts', ['title' => 'Articles in : ' . $category->name, 'posts' => $category->posts]);
});

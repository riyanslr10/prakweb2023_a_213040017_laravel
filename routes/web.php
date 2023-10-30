<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Moch Riyan",
        "email" => "riyanputra@unpas.ac.id",
        "image" => "kucing.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Satu",
            "slug" => "judul-post-satu",
            "author" => "Moch Riyan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consectetur fuga temporibus tempora, iste excepturi inventore blanditiis molestiae quam dolorum rerum doloremque maxime qui illo! Id inventore similique corrupti commodi."
        ],
        [
            "title" => "Judul Post Dua",
            "slug" => "judul-post-dua",
            "author" => "Dea Abeliya",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates vitae aperiam temporibus. Debitis iste placeat ea adipisci molestiae minima quidem velit, quam architecto dignissimos quaerat. Delectus quis recusandae ipsa. Est, vitae accusamus magni amet inventore, at, natus reiciendis quae facere odio mollitia qui obcaecati eaque nulla ea enim dolor maiores."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Satu",
            "slug" => "judul-post-satu",
            "author" => "Moch Riyan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consectetur fuga temporibus tempora, iste excepturi inventore blanditiis molestiae quam dolorum rerum doloremque maxime qui illo! Id inventore similique corrupti commodi."
        ],
        [
            "title" => "Judul Post Dua",
            "slug" => "judul-post-dua",
            "author" => "Dea Abeliya",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates vitae aperiam temporibus. Debitis iste placeat ea adipisci molestiae minima quidem velit, quam architecto dignissimos quaerat. Delectus quis recusandae ipsa. Est, vitae accusamus magni amet inventore, at, natus reiciendis quae facere odio mollitia qui obcaecati eaque nulla ea enim dolor maiores."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
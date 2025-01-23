<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Lavina',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis praesentium facilis magnam veritatis inventore illum quae distinctio rerum consectetur esse et impedit ducimus libero omnis maxime minus, neque repellat, expedita quis. Dolore fuga consequatur delectus voluptatem explicabo quia quae necessitatibus laudantium asperiores error recusandae vitae velit sit, exercitationem optio sed eveniet ad nam corporis alias! Earum nemo id ratione labore? Provident id eos quia voluptas, voluptates dolor nobis omnis ducimus accusantium non iusto voluptate, deleniti officia temporibus quasi rem libero at soluta sunt! Nulla odit voluptatum corporis voluptatem? Nostrum fugiat eligendi aperiam neque nulla, reprehenderit perferendis quod facilis numquam fuga, alias at, porro aut. Itaque sapiente impedit maxime nobis? Cupiditate vitae excepturi totam perspiciatis quas beatae doloremque omnis quia, eveniet inventore vero perferendis repellat veritatis voluptas similique laudantium iure. Officiis corrupti exercitationem id veniam illum amet magnam nihil ipsum in, earum consectetur perferendis, autem dolore tempore architecto, error quisquam. Tempore natus voluptate dolore eius, et fuga consectetur. Fuga maxime cupiditate, ab vero deserunt excepturi fugiat odit numquam quis laudantium dignissimos eligendi esse facilis molestias nulla sapiente! Ab molestiae ipsam et. Nostrum, ullam doloribus reprehenderit minus ut voluptate repellendus sequi molestias iusto nesciunt ratione fugiat totam ipsam modi quaerat tempore! Maiores.'
        ],
        [
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Arayana',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos iusto facere, enim debitis suscipit sit delectus voluptas dolore maxime voluptates et! Facilis, iure non nisi odio eum officia molestias possimus in pariatur labore dolore harum nihil voluptas dicta corrupti ad aut, qui corporis culpa necessitatibus deleniti quia! Id obcaecati, nihil dolor perferendis repellat labore. Voluptas, unde fuga nulla magni cupiditate velit blanditiis eligendi cum similique inventore nobis, sequi ut provident quo molestiae obcaecati nesciunt numquam vel recusandae illo! Corporis iste numquam voluptate, id eos ullam repudiandae consequatur. Similique quisquam recusandae sed odit. Porro illo veritatis incidunt corporis, explicabo quisquam quam, voluptatibus qui nostrum minima laborum placeat delectus molestias odit amet facere autem. Earum rerum, iure temporibus, quia laudantium error fugiat voluptatem libero officia consequuntur dignissimos nesciunt iusto rem quae perferendis, veritatis asperiores? Voluptate doloribus praesentium omnis ratione! Veritatis esse quibusdam ullam animi repellendus dolorem dignissimos itaque tempora, aut ad iste numquam consequuntur ipsam aperiam praesentium quam amet placeat, quae accusamus, omnis perferendis magnam sint magni fugiat. Molestias alias libero omnis, dignissimos earum maiores placeat id dolore natus! Temporibus molestias soluta optio minima quo mollitia debitis consequuntur earum id, doloremque beatae voluptatem. Deserunt nihil accusantium ducimus ex magni expedita voluptas alias!'
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Lavina',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis praesentium facilis magnam veritatis inventore illum quae distinctio rerum consectetur esse et impedit ducimus libero omnis maxime minus, neque repellat, expedita quis. Dolore fuga consequatur delectus voluptatem explicabo quia quae necessitatibus laudantium asperiores error recusandae vitae velit sit, exercitationem optio sed eveniet ad nam corporis alias! Earum nemo id ratione labore? Provident id eos quia voluptas, voluptates dolor nobis omnis ducimus accusantium non iusto voluptate, deleniti officia temporibus quasi rem libero at soluta sunt! Nulla odit voluptatum corporis voluptatem? Nostrum fugiat eligendi aperiam neque nulla, reprehenderit perferendis quod facilis numquam fuga, alias at, porro aut. Itaque sapiente impedit maxime nobis? Cupiditate vitae excepturi totam perspiciatis quas beatae doloremque omnis quia, eveniet inventore vero perferendis repellat veritatis voluptas similique laudantium iure. Officiis corrupti exercitationem id veniam illum amet magnam nihil ipsum in, earum consectetur perferendis, autem dolore tempore architecto, error quisquam. Tempore natus voluptate dolore eius, et fuga consectetur. Fuga maxime cupiditate, ab vero deserunt excepturi fugiat odit numquam quis laudantium dignissimos eligendi esse facilis molestias nulla sapiente! Ab molestiae ipsam et. Nostrum, ullam doloribus reprehenderit minus ut voluptate repellendus sequi molestias iusto nesciunt ratione fugiat totam ipsam modi quaerat tempore! Maiores.'
        ],
        [
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Arayana',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos iusto facere, enim debitis suscipit sit delectus voluptas dolore maxime voluptates et! Facilis, iure non nisi odio eum officia molestias possimus in pariatur labore dolore harum nihil voluptas dicta corrupti ad aut, qui corporis culpa necessitatibus deleniti quia! Id obcaecati, nihil dolor perferendis repellat labore. Voluptas, unde fuga nulla magni cupiditate velit blanditiis eligendi cum similique inventore nobis, sequi ut provident quo molestiae obcaecati nesciunt numquam vel recusandae illo! Corporis iste numquam voluptate, id eos ullam repudiandae consequatur. Similique quisquam recusandae sed odit. Porro illo veritatis incidunt corporis, explicabo quisquam quam, voluptatibus qui nostrum minima laborum placeat delectus molestias odit amet facere autem. Earum rerum, iure temporibus, quia laudantium error fugiat voluptatem libero officia consequuntur dignissimos nesciunt iusto rem quae perferendis, veritatis asperiores? Voluptate doloribus praesentium omnis ratione! Veritatis esse quibusdam ullam animi repellendus dolorem dignissimos itaque tempora, aut ad iste numquam consequuntur ipsam aperiam praesentium quam amet placeat, quae accusamus, omnis perferendis magnam sint magni fugiat. Molestias alias libero omnis, dignissimos earum maiores placeat id dolore natus! Temporibus molestias soluta optio minima quo mollitia debitis consequuntur earum id, doloremque beatae voluptatem. Deserunt nihil accusantium ducimus ex magni expedita voluptas alias!'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

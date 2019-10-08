<?php

use App\Post;
use App\Category;


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

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/', function () {
    //$posts=Post::all();
    $posts=Post::latest()->paginate(5);
    return view('index',['postas'=>$posts]);
})->name('blog.index');


// Route::get('/', function () {
//     return view('index');
// })->name('blog.index');

Route::get('/contact', function () {
    return view('contact');
})->name('blog.contact');

Route::get('/about-us', function () {
    return view('about-us');
})->name('blog.about-us');

Route::get('/archive-blog', function () {
    return view('archive-blog');
})->name('blog.archive-blog');

Route::get('/single-post', function () {
    return view('single-post');
})->name('blog.single-post');

Route::get('/test', function () {
    $result=factory(\App\User::class,50)->create();
    dd($result);
})->name('blog.test');

// Route::get('/category', function () {
//     $result=factory(\App\Category::class,10)->create();
//     dd($result);
// })->name('blog.category');

Route::get('/categories', function () {
    $posts=Post::latest()->paginate(5);
    return view('categories',['postas'=>$posts]);
 })->name('blog.categories');

//___________________________________________

// Route::get('/categories/features', function () {
//     $result='eeeeeeeeeee';
//     dd($result);
//     //return view('categories');
//  })->name('blog.categories-features');

//  Route::get('/categories/food', function () {
//     $result='eeeeeeeeeee';
//     dd($result);
//     //return view('categories');
//  })->name('blog.categories-food');

//  Route::get('/categories/travel', function () {
//     $result='eeeeeeeeeee';
//     dd($result);
//     //return view('categories');
//  })->name('blog.categories-travel');

//  Route::get('/categories/recipe', function () {
//     $result='eeeeeeeeeee';
//     dd($result);
//     //return view('categories');
//  })->name('blog.categories-recipe');

//  Route::get('/categories/bread', function () {
//     $result='eeeeeeeeeee';
//     dd($result);
//     //return view('categories');
//  })->name('blog.categories-bread');

//  Route::get('/categories/breakfast', function () {
//     $result='eeeeeeeeeee';
//     dd($result);
//     //return view('categories');
//  })->name('blog.categories-breakfast');

//  Route::get('/categories/meat', function () {
//     $result='eeeeeeeeeee';
//     dd($result);
//     //return view('categories');
//  })->name('blog.categories-meat');

//  Route::get('/categories/fastfood', function () {
//     $result='eeeeeeeeeee';
//     dd($result);
//     //return view('categories');
//  })->name('blog.categories-fastfood');

//   Route::get('/categories/salad', function () {
//     $result='eeeeeeeeeee';
//     dd($result);
//     //return view('categories');
//  })->name('blog.categories-salad');

//  Route::get('/categories/soup', function () {
//     $result='eeeeeeeeeee';
//     dd($result);
//     //return view('categories');
//  })->name('blog.categories-soup');
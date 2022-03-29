<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
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

Route::get('/', [PostController::class, 'index'])->name('home');    // using controller to make things simpler
// Home is the name of the route

// Find a post by slug and pass it to a view called post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Find all the posts corresponding to a specific category
Route::get('categories/{category:slug}', function (Category $category) { /*Wild card *curly braces* */
    return view('posts', [   //passing post to the view
        'posts'=> $category->posts,
        'currentCategory'=> $category,
        'categories'=> Category::all()
        //  'posts' => $category->posts->load(['category', 'author'])//Eager load relationship on existing model 
     ]);
 });

 // Find all the posts corresponding to a specific author, using author:username to allow username in url
Route::get('authors/{author:username}', function (User $author) { /*Wild card *curly braces* */
    return view('posts', [   //passing post to the view
        'posts'=> $author->posts,
        'categories'=> Category::all()
        //  'posts' => $author->posts->load(['category', 'author']) //Eager load relationship on existing model
     ]);
 });


//  Route::get('/', function () {
//     return view('posts', [  // latest function makes sure the latest post is on the top (sorting wrt id)  
//         // 'posts'=> Post::latest()->with('category')->get() /*Solving n+1 problem by replacing Post:all with this */
//         'posts'=> Post::latest('id')->with('category', 'author')->get() /*Solving n+1 problem by replacing Post:all with this */
//     ]);
// });

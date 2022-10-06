<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Comment;
use App\Http\Controllers\DashboardController;
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

//get api user detail
Route::get('/users/{id}', function ($id) {

    $user = User::find($id);
    return $user;
});

//get an api user :id with comments
Route::get('/users/{id}/comments', function ($id) {

    $user = User::find($id);
    $comment = Comment::where('user_id',$user->id)->get();
    return $comment;
});


Route::get('/welcome', function(){

    // $comments = Comment::whereIn('id',[2,3])->row();
    // $comments = Comment::find(2)->get_timestamp();

    $comments = Comment::where('user_id','3')->get();
    $user = User::find(2);

    $data = [
        'author' => $user->name,
        'comments' => $comments
    ];

    return view('layout.dashboard')->with($data);
});

Route::get('/', [DashboardController::class,'index'])->name('home');

// dashboard controller
Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth'])->name('dashboard');

// blog controller
Route::get('/blog/create', [BlogController::class, 'create'])->middleware(['auth'])->name('blog.create');
Route::post('/blog/submit', [BlogController::class, 'store'])->middleware(['auth'])->name('blog.submit');

require __DIR__.'/auth.php';

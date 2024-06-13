<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StoryController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/',[StoryController::class,'index']);
Route::get('/',function()
{
    return view('frontend.index');
});

Route::get('/adetails',function()
{
    return view('frontend.adetails');
});
Route::get('/awatching',function()
{
    return view('frontend.awatching');
});
Route::get('/bdetails',function()
{
    return view('frontend.bdetails');
});
Route::get('/blog',function()
{
    return view('frontend.blog');
});
Route::get('/categories',function()
{
    return view('frontend.categories');
});
Route::get('/main',function()
{
    return view('frontend.main');
});
Route::get('/login',function()
{
    return view('frontend.login');
});
Route::get('/signup',function()
{
    return view('frontend.signup');
});
Route::get('/footer',function()
{
    return view('footer');
});

Route::get('/table',function()
{
    return view('frontend.table');
});
// Route::get('/table',function()
// {
//     return view('layouts.table');
// });
Route::get('/write',function()
{
    return view('frontend.write');
});
Route::get('/read',function()
{
    return view('frontend.read');

});



Route::get('/new',function()
{
    return view('frontend.new');

});


Route::get('/main1',function()
{
    return view('frontend.main1');
});
Route::get('/toc',function()
{
    return view('frontend.toc');
});

Route::get('/writing',function()
{
    return view('frontend.writing');
});
Route::get('/cat',function()
{
    return view('frontend.fourlayer');
});
Route::get('/writing2',function()
{
    return view('frontend.writing2');
});


require __DIR__.'/auth.php';

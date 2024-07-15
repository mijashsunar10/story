<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\FourLayerController;
use App\Http\Controllers\Index;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StorydetailsController;
use App\Http\Controllers\StorywritingController;
use App\Models\AdminLogin;
use App\Models\FourLayer;
use App\Models\Storydetails;
use App\Models\Storywriting;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/storydetails',function()
// {
//     return view('frontend.storydetails');
// });
Route::get('/storyreading',function()
{
    return view('frontend.storyreading');
});
Route::get('/storywriting',function()
{
    return view('frontend.storywriting');
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

Route::get('/tableofContent',function()
{
    return view('frontend.tableofContent');
});
// Route::get('/table',function()
// {
//     return view('layouts.table');
// });
Route::get('/video',function()
{
    return view('frontend.video');
});
Route::get('/read',function()
{
    return view('frontend.read');

});
Route::get('/stroyintro',function()
{
    return view('frontend.stroyintro');
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
Route::get('/fourlayer',function()
{
    return view('frontend.fourlayer');
});
Route::get('/writing2',function()
{
    return view('frontend.writing2');
});
Route::get('/template',function()
{
    return view('layouts.index');
});
Route::get('/userdashboard',function()
{
    return view('layouts.userdashboard');
});

Route::get('/four1',function()
{
    return view('frontend.four1');
});


Route::resource('/',Index::class)->middleware('auth');
Route::resource('storydetails',StorydetailsController::class);
Route::resource('/admin/login',AdminLoginController::class);

Route::get('/fourlayer', [FourLayerController::class, 'index'])->name('fourlayer.index');
Route::get('/fourlayer/category/{categoryId}', [FourLayerController::class, 'showByCategory'])->name('fourlayer.category');

// Route::get('/storywriting', [Storywriting::class, 'index'])->name('storywriting');
// Route::get('/storywriting/category/{categoryId}', [Storywriting::class, 'showByCategory'])->name('storywriting.category');

Route::resource('storywriting',StorywritingController::class);

Route::get('/storywriting/storydetails/{storydetailsId}', [Storywriting::class, 'showByStorydetails'])->name('storywriting.details');






require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdAdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReviewController;




Route::get('/',[AdminController::class,'homepage']);

/* page controllers*/


route::get('/home',[PageController::class,'index'])->name('home');
Route::get('/recipes', [PageController::class, 'recipes'])->name('recipes');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/videoTutorials', [PageController::class, 'videoTutorials'])->name('videoTutorials');




/*AdAdmin controllers*/ 

Route::get('/recipe_page',[AdAdminController::class,'recipe_page']);
Route::post('/add_recipe',[AdAdminController::class,'add_recipe']);

Route::get('/recipe_data',[AdAdminController::class,'recipe_data']);

Route::get('/review_all', [AdAdminController::class, 'review_all']);


Route::get('/delete_review/{id}',[AdAdminController::class,'delete_review']);

Route::get('/delete_recipe/{id}',[AdAdminController::class,'delete_recipe']);

Route::get('/edit_recipe/{id}',[AdAdminController::class,'edit_recipe']);

Route::get('/dashboard',[AdAdminController::class,'dashboard']);

Route::post('/editrecipe/{id}',[AdAdminController::class,'editrecipe']);


Route::get('/home', function () {
    if (Auth::check() && Auth::user()->usertype === 'admin') {
        return redirect('/dashboard');
    }

    return redirect('/'); 
});

//Route::get('/admin/latestreview', [AdAdminController::class, 'latestreview'])->name('admin.latestreview');






//admin controllers


Route::get('/recipe_details/{id}',[AdminController::class,'recipe_details']);

Route::get('/user_add',[AdminController::class,'user_add'])->middleware('auth');

Route::post('/user_recipe',[AdminController::class,'user_recipe'])->middleware('auth');

Route::get('/my_recipe',[AdminController::class,'my_recipe'])->middleware('auth');

Route::get('/rec_del/{id}',[AdminController::class,'rec_del'])->middleware('auth');

Route::get('/rec_update/{id}',[AdminController::class,'rec_update'])->middleware('auth');

Route::post('/update_recipe/{id}',[AdminController::class,'update_recipe'])->middleware('auth');

Route::get('review', [AdminController::class, 'review']);


Route::get('/aboutus',[AdminController::class,'aboutus']);


Route::post('/submit-review', [AdminController::class, 'store'])->middleware('auth');


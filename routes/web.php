<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;


//Login Controller To Route
Route::get('login', [\App\Http\Controllers\Backend\auth\LoginController::class, 'index'])->name('login');
Route::post('addlogin', [\App\Http\Controllers\Backend\auth\LoginController::class, 'addlogin'])->name('addlogin');


Route::middleware(['auth'])->group(function(){
    //Dashboard Controller To Route
    Route::get('admin/dashboard', [DashboardController::class, 'index']);
    Route::post('userlogout', [\App\Http\Controllers\Backend\auth\LoginController::class, 'logout'])->name('userlogout');

//Category Controller To Route
    Route::get('categoryList', [\App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('Backend.categoryList');
    Route::get('createCategory', [\App\Http\Controllers\Backend\CategoryController::class, 'create']);
    Route::post('addCategory', [\App\Http\Controllers\Backend\CategoryController::class, 'store']);
    Route::get('updateCategory/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('updateCategory');
    Route::post('updateCategory/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'update']);
    Route::delete('deleteCategory/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'destroy']);


//Blog Post Controller To Route
    Route::get('blogPostList', [\App\Http\Controllers\Backend\BlogPostController::class, 'index'])->name('Backend.blogPostList');
    Route::get('createBlogPost', [\App\Http\Controllers\Backend\BlogPostController::class, 'create']);
    Route::post('addBlogPost', [\App\Http\Controllers\Backend\BlogPostController::class, 'store']);
    Route::get('updateBlogPost/{id}', [\App\Http\Controllers\Backend\BlogPostController::class, 'edit'])->name('updateBlogPost');
    Route::post('updateBlogPost/{id}', [\App\Http\Controllers\Backend\BlogPostController::class, 'update']);
    Route::delete('deleteBlogPost/{id}', [\App\Http\Controllers\Backend\BlogPostController::class, 'destroy']);

//User Controller To Route
    Route::get('userList', [\App\Http\Controllers\Backend\UserController::class, 'index']);

//Comment Controller To Route
    Route::get('comments', [\App\Http\Controllers\Backend\CommentController::class, 'index'])->name('commentList');
    Route::delete('deleteComment/{id}', [\App\Http\Controllers\Backend\CommentController::class, 'destroy']);

// General Setting To Route
    Route::get('general-Setting', [\App\Http\Controllers\Backend\GeneralSettingController::class, 'index'])->name('generalSetting');
    Route::get('createGeneralSetting', [\App\Http\Controllers\Backend\GeneralSettingController::class, 'create']);
    Route::post('addGeneralSetting', [\App\Http\Controllers\Backend\GeneralSettingController::class, 'store']);
    Route::get('editGeneralSetting/{id}', [\App\Http\Controllers\Backend\GeneralSettingController::class, 'edit'])->name('editGeneralSetting');
    Route::post('editGeneralSetting/{id}', [\App\Http\Controllers\Backend\GeneralSettingController::class, 'update']);
    Route::delete('deleteGeneralSetting/{id}', [\App\Http\Controllers\Backend\GeneralSettingController::class, 'destroy']);
});


//Frontend Controller To Route
Route::get('/', [\App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('category/{cat_id}', [\App\Http\Controllers\Frontend\FrontendController::class, 'categoryPost'])->name('Frontend.categoryPost');
Route::get('details/{news_id}', [\App\Http\Controllers\Frontend\FrontendController::class, 'blogDetails'])->name('Frontend.detailsPost');
Route::post('comment/{id}', [\App\Http\Controllers\Backend\CommentController::class, 'store']);

Route::get('searching', [\App\Http\Controllers\Backend\BlogPostController::class, 'search']);
Route::get('/blog/{id}', [\App\Http\Controllers\Backend\BlogPostController::class, 'show'])->name('blog.show');


Route::post('subscriber', [\App\Http\Controllers\Backend\SubscriberController::class, 'store'])->name('subscribe');


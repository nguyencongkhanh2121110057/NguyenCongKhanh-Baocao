<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\SiteController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\AuthController;

Route::get('/', [SiteController::class,'index'])->name('site.index');
Route::get('/san-pham',[SiteController::class,'product'])->name('site.product');
Route::get('/bai-viet',[SiteController::class,'post'])->name('site.post');


Route::get('/gio-hang',function(){echo"tat ca";});
Route::get('/tim-kiem',function(){echo"tat ca";});
Route::get('/khach-hang',function(){echo"tat ca";});
Route::get('/lien-he',function(){echo"tat ca";});


//...............................................................
// Route::get('/',[SiteController::class,'index'] )->name('home');
Route::get('/admin/login',[AuthController::class,'getlogin'])->name('site.login');
Route::post('/admin/login',[AuthController::class,'postlogin'])->name('admin.postlogin');
// Route::resource('brand', BrandController::class) ;
//admin
//product
// Route::get('/', [DashboardController::class,'index'])->name('dashboard.index');
Route::get('product/trash',[ProductController::class,'trash'])->name('product.trash');
Route::get('product/status/{product}',[ProductController::class,'status'])->name('product.status');
Route::get('product/delete/{product}',[ProductController::class,'delete'])->name('product.delete');
Route::get('product/restore/{product}',[ProductController::class,'restore'])->name('product.restore');
Route::resource('product', ProductController::class);
//brand
Route::get('brand/trash',[BrandController::class, 'trash'])->name('brand.trash');
    Route::get('brand/delete/{brand}',[BrandController::class, 'delete'])->name('brand.delete');
    Route::get('brand/restore/{brand}',[BrandController::class, 'restore'])->name('brand.restore');
    Route::get('brand/status/{brand}',[BrandController::class, 'status'])->name('brand.status');
    Route::resource('brand',BrandController::class);
//slider
Route::get('slider/trash',[SliderController::class,'trash'])->name('slider.trash');
Route::get('slider/status/{slider}',[SliderController::class,'status'])->name('slider.status');
Route::get('slider/delete/{slider}',[SliderController::class,'delete'])->name('slider.delete');
Route::get('slider/restore/{slider}',[SliderController::class,'restore'])->name('slider.restore');
Route::resource('slider', SliderController::class);
//post
Route::get('post/trash',[PostController::class,'trash'])->name('post.trash');
Route::get('post/status/{post}',[PostController::class,'status'])->name('post.status');
Route::get('post/delete/{post}',[PostController::class,'delete'])->name('post.delete');
Route::get('post/restore/{post}',[PostController::class,'restore'])->name('post.restore');
Route::resource('post', PostController::class);
//contact
Route::get('contact/trash',[ContactController::class,'trash'])->name('contact.trash');
Route::get('contact/status/{contact}',[ContactController::class,'status'])->name('contact.status');
Route::get('contact/delete/{contact}',[ContactController::class,'delete'])->name('contact.delete');
Route::get('contact/restore/{contact}',[ContactController::class,'restore'])->name('contact.restore');
Route::resource('contact', ContactController::class);
//categoty
Route::get('category/trash',[CategoryController::class,'trash'])->name('category.trash');
Route::get('category/status/{category}',[CategoryController::class,'status'])->name('category.status');
Route::get('category/delete/{category}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('category/restore/{category}',[CategoryController::class,'restore'])->name('category.restore');
Route::resource('category', CategoryController::class);
//menu
Route::get('menu/trash',[MenuController::class,'trash'])->name('menu.trash');
Route::get('menu/status/{menu}',[MenuController::class,'status'])->name('menu.status');
Route::get('menu/delete/{menu}',[MenuController::class,'delete'])->name('menu.delete');
Route::get('menu/restore/{menu}',[MenuController::class,'restore'])->name('menu.restore');
Route::resource('menu', MenuController::class);
//topic
Route::get('topic/trash',[TopicController::class,'trash'])->name('topic.trash');
Route::get('topic/status/{topic}',[TopicController::class,'status'])->name('topic.status');
Route::get('topic/delete/{topic}',[TopicController::class,'delete'])->name('topic.delete');
Route::get('topic/restore/{topic}',[TopicController::class,'restore'])->name('topic.restore');
Route::resource('topic', TopicController::class);
//order
Route::get('order/trash',[OrderController::class,'trash'])->name('order.trash');
Route::get('order/status/{order}',[OrderController::class,'status'])->name('order.status');
Route::get('order/delete/{order}',[OrderController::class,'delete'])->name('order.delete');
Route::get('order/restore/{order}',[OrderController::class,'restore'])->name('order.restore');
Route::resource('order', OrderController::class);
//user

Route::get('user/trash',[UserController::class,'trash'])->name('user.trash');
Route::get('user/status/{user}',[UserController::class,'status'])->name('user.status');
Route::get('user/delete/{user}',[UserController::class,'delete'])->name('user.delete');
Route::get('user/restore/{user}',[UserController::class,'restore'])->name('user.restore');
//
Route::get('/admin/login',[AuthController::class,'getlogin'])->name('site.login');
Route::post('/admin/login',[AuthController::class,'postlogin'])->name('admin.postlogin');
//
Route::prefix('admin')->group(function () {
    Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');
    Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('brand',BrandController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('menu',MenuController::class);
    Route::resource('slider',SliderController::class);
    Route::resource('topic',TopicController::class);
    Route::resource('order',OrderController::class);
    Route::resource('post',PostController::class);
    Route::resource('user',UserController::class);
});
Route::get('slug', [SiteController::class,'index'])->name('site.slug');
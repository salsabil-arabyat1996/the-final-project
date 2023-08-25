<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Category;
use App\Http\Controllers\Admin\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//  Route::get('/', function () {
//      return view('welcome');
//  });

Auth::routes();


 Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class,'index']);
 Route::get('/collections', [App\Http\Controllers\Frontend\FrontendController::class, 'categories'])->name('collections');
 Route::get('/collections/{category_name}', [App\Http\Controllers\Frontend\FrontendController::class, 'products'])->name('collections.products');
 Route::get('/collections/{category_name}/{product_name}', [App\Http\Controllers\Frontend\FrontendController::class, 'productsview'])->name('collections.products');
Route ::get('/about', [App\Http\Controllers\Frontend\FrontendController::class, 'about'])->name('about');
Route ::get ('/gallery',[App\Http\Controllers\Frontend\FrontendController::class, 'gallery'] )-> name("gallery");

Route::get('/note',[App\Http\Controllers\Frontend\FrontendController::class,'note'])->name('note');



Route::middleware(['auth'])->group(function(){
    Route::get('cart',[App\Http\Controllers\Frontend\CartController::class,'index']);
    Route::get('/checkout',[App\Http\Controllers\Frontend\CheckoutController::class,'index']);
    Route::get('wishlist',[App\Http\Controllers\Frontend\WishlistController::class,'index']);

     Route::get('orders',[App\Http\Controllers\Frontend\OrderController::class,'index']);
     Route::get('orders/{orderId}',[App\Http\Controllers\Frontend\OrderController::class,'show']);

});


 Route::get('thank-you',[App\Http\Controllers\Frontend\FrontendController::class,'thankyou']);
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 # Admin Panel
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){


       Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

  //category Route
   Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
    Route::get('/category', 'index');
    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin.category');
    Route::get('category/create','create')->name('create');
    Route::post('category','store')->name('category.store');
    // Route::get('admin/category/{category}/edit', 'App\Http\Controllers\Admin\CategoryController@edit')->name('admin.category.edit');
    Route::get('admin/category/{category}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('admin/category/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');


 });


 // products
 Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
    Route::get('/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products.index');
    Route::get('admin/products/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products','store');
    Route::post('/products', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{product}/edit', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{product}', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin.products.update');
    Route::get('/product-image/{product_image_id}/delete', [App\Http\Controllers\Admin\ProductController::class, 'destroyImage'])->name('admin.product-image.delete');
    Route::get('/products/{product}/delete', [App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('admin.product.delete');


 });

   //admin/orders
   Route::controller(App\Http\Controllers\Admin\OrderController::class)->group(function () {
    Route::get('/orders', 'index');
    Route::get('/orders/{orderId}', 'show');
    Route::put('/orders/{orderId}','updateOrderStatus');

 });

  Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () {
    //  Route::get('/users', 'index');
     Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index');
     Route::get('admin/users/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.users.create');
     Route::post('/users','store');
    Route::get('/users/{user_id}/edit','edit');
    // Route::put('users/{user_id}','update');
    Route::put('admin/users/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
    // Route::get('users/{user->id}/deleate','destory');
    Route::delete('/admin/users/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');

    // Route::delete('/admin/users/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');
  });



});

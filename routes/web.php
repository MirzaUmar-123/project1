<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\TransactionController;


Route::get('/', function () {
    return view('welcome');
});







Route::get('/products', [ProductController::class, 'index'])->name('showallproducts');
Route::post('/products/store', [ProductController::class, 'store'])->name('storeproducts');
Route::put('/products/update', [ProductController::class, 'update'])->name('updateproducts');
Route::delete('/products/delete/${slug}', [ProductController::class, 'destroy'])->name('deleteproducts');


Route::get('/brand', [BrandController::class, 'index'])->name('showallbrands');
Route::post('/brand/store', [BrandController::class, 'store'])->name('storebrands');
Route::put('/brand/update', [BrandController::class, 'update'])->name('updatebrands');
Route::delete('/brands/delete/${slug}', [BrandController::class, 'destroy'])->name('deletebrands');


Route::get('/cart', [CartController::class, 'index'])->name('showallcarts');
Route::post('/cart/store', [CartController::class, 'store'])->name('storecarts');
Route::put('/cart/update', [CartController::class, 'update'])->name('updatecarts');
Route::delete('/cart/delete/${id}', [CartController::class, 'destroy'])->name('deletecarts');


Route::get('/category', [CategoryController::class, 'index'])->name('showallcategories');
Route::post('/category/store', [CategoryController::class, 'store'])->name('storecategories');
Route::put('/category/update', [CategoryController::class, 'update'])->name('updatecategories');
Route::delete('/category/delete/${id}', [CategoryController::class, 'destroy'])->name('deletecategories');


Route::get('/coupon', [CouponController::class, 'index'])->name('showallcoupons');
Route::post('/coupon/store', [CouponController::class, 'store'])->name('storecoupons');
Route::put('/coupon/update', [CouponController::class, 'update'])->name('updatecoupons');
Route::delete('/coupon/delete/${id}', [CouponController::class, 'destroy'])->name('deletecoupons');


Route::get('/order', [OrderController::class, 'index'])->name('showallorders');
Route::post('/order/store', [OrderController::class, 'store'])->name('storeorders');
Route::put('/order/update', [OrderController::class, 'update'])->name('updateorders');
Route::delete('/order/delete/${id}', [OrderController::class, 'destroy'])->name('deleteorders');


Route::get('/orderitem', [OrderItemController::class, 'index'])->name('showallorderitems');
Route::post('/orderitem/store', [OrderItemController::class, 'store'])->name('storeorderitems');
Route::put('/orderitem/update', [OrderItemController::class, 'update'])->name('updateorderitems');
Route::delete('/orderitem/delete/${id}', [OrderItemController::class, 'destroy'])->name('deleteorderitems');


Route::get('/shipment', [ShipmentController::class, 'index'])->name('showallshipments');
Route::post('/shipment/store', [ShipmentController::class, 'store'])->name('storeshipments');
Route::put('/shipment/update', [ShipmentController::class, 'update'])->name('updateshipments');
Route::delete('/shipment/delete/${id}', [ShipmentController::class, 'destroy'])->name('deleteshipments');


Route::get('/user', [UserController::class, 'index'])->name('showallusers');
Route::post('/user/store', [UserController::class, 'store'])->name('storeusers');
Route::put('/user/update', [UserController::class, 'update'])->name('updateusers');
Route::delete('/user/delete/${id}', [UserController::class, 'destroy'])->name('deleteusers');


Route::get('/wishlist', [WishlistController::class, 'index'])->name('showallwishlists');
Route::post('/wishlist/store', [WishlistController::class, 'store'])->name('storewishlists');
Route::put('/wishlist/update', [WishlistController::class, 'update'])->name('updatewishlists');
Route::delete('/wishlist/delete/${id}', [WishlistController::class, 'destroy'])->name('deletewishlists');


Route::get('/review', [ReviewController::class, 'index'])->name('showallreviews');
Route::post('/review/store', [ReviewController::class, 'store'])->name('storereviews');
Route::put('/review/update', [ReviewController::class, 'update'])->name('updatereviews');
Route::delete('/review/delete/${id}', [ReviewController::class, 'destroy'])->name('deletereviews');


Route::get('/payment', [PaymentController::class, 'index'])->name('showallpayments');
Route::post('/payment/store', [PaymentController::class, 'store'])->name('sorepayments');
Route::put('/payment/update', [PaymentController::class, 'update'])->name('updatepayments');
Route::delete('/payment/delete/${id}', [PaymentController::class, 'destroy'])->name('deletepayments');


Route::get('/transaction', [TransactionController::class, 'index'])->name('showalltransactions');
Route::post('/transaction/store', [TransactionController::class, 'store'])->name('storetransactions');
Route::put('/transaction/update', [TransactionController::class, 'update'])->name('updatetransactions');
Route::delete('/transaction/delete/${id}', [TransactionController::class, 'destroy'])->name('deletetransactions');

<?php

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
route::get('/','HomeController@index');
Route::post('/tim-kiem','HomeController@search');
Route::get('/chi-tiet/{id}','ProductController@details_product');
Route::get('/thuc-don','ProductController@ShowProduct');

//Backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

//Category Product
Route::get('/add-category-product','CategoryController@add_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryController@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryController@delete_category_product');
Route::get('/all-category-product','CategoryController@all_category_product');
Route::get('/unactive-category-product/{category_product_id}','CategoryController@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryController@active_category_product');
Route::post('/save-category-product','CategoryController@save_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryController@update_category_product');



//Product
Route::get('/add-product','ProductController@add_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('//product-cate','ProductController@all_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');
Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');
Route::get('/product-cate/{category_id}','ProductController@ProductCate');


//Cart
Route::get('/add-cart/{product_id}','CartController@Addcart');
Route::post('/add-cart','CartController@Addqtycart');
Route::get('/delete-item-cart/{product_id}','CartController@Deleteitemcart');
Route::get('/delete-all-cart','CartController@delete_all_product');
Route::get('/view-cart','CartController@ViewCart');
Route::get('/delete-item-list-cart/{product_id}','CartController@Deleteitemlistcart');
Route::post('/update-cart-qty','CartController@Saveitemcart');

//Checkout
Route::get('/login','CheckoutController@login');
Route::get('/logout','CheckoutController@logout');
Route::post('/add-customer','CheckoutController@add_customer');
Route::post('/order-place','CheckoutController@order_place');
Route::post('/login-customer','CheckoutController@login_customer');
Route::get('/checkout','CheckoutController@checkout');
Route::get('/payment','CheckoutController@payment');
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');
Route::post('/confirm-order','CheckoutController@confirm_order');
Route::get('/regis','CheckoutController@show_regis');
Route::post('/add-customer','CheckoutController@add_customer');
//Order
Route::get('/manage-order','OrderController@manage_order');
Route::get('/view-order/{order_id}','OrderController@view_order');


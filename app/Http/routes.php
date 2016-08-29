<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
  'uses'  => 'ProductController@getIndex',
  'as'    => 'product.index'
]);

Route::get('/profile', function() {
   return view('about');
});

Route::get('/add-to-cart/{id}', [
  'uses'  => 'ProductController@getAddToCart',
  'as'    => 'product.addToCart'
]);

Route::get('/single/{id}', [
  'uses'  => 'ProductController@getSingleItem',
  'as'    => 'product.single'
]);

Route::get('/reduce/{id}', [
  'uses'  => 'ProductController@getreduceByOne',
  'as'    => 'product.reduceByOne'
]);

Route::get('/add/{id}', [
  'uses'  => 'ProductController@getAddByOne',
  'as'    => 'product.addByOne'
]);

Route::get('/remove/{id}', [
  'uses'  => 'ProductController@getRemovItem',
  'as'    => 'product.remove'
]);

Route::get('/shopping-cart', [
  'uses'  => 'ProductController@getCart',
  'as'    => 'product.shoppingCart'
]);

Route::get('/checkout', [
  'uses'  => 'ProductController@getCheckout',
  'as'    => 'checkout',
  'middleware' => 'auth'
]);

Route::post('/checkout', [
  'uses'  => 'ProductController@postCheckout',
  'as'    => 'checkout',
  'middleware' => 'auth'
]);

Route::group(['prefix' => 'user'], function() {
  // guest middleware
  Route::group(['middleware' => 'guest'], function() {
    Route::get('/signup', [
      'uses'       => 'UserController@getSignup',
      'as'         => 'user.signup'
    ]);

    Route::post('/signup', [
      'uses'  => 'UserController@postSignUp',
      'as'    => 'user.signup'
    ]);

    Route::get('/signin', [
      'uses'  => 'UserController@getSignin',
      'as'    => 'user.signin'
    ]);

    Route::post('/signin', [
      'uses'  => 'UserController@postSignin',
      'as'    => 'user.signin'
    ]);
  });
  // auth middleware
  Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', [
      'uses'  => 'UserController@getProfile',
      'as'    => 'user.profile'
    ]);

    Route::get('/admin/profile', [
      'uses'  => 'UserController@getAdminProfile',
      'as'    => 'admin.profile'
    ]);

    Route::post('/admin/profile/create', [
      'uses'  => 'ProductController@postAdminProductCreate',
      'as'    => 'admin.product'
    ]);

    Route::get('/admin/profile/index', [
      'uses' => 'ProductController@getAdminIndex',
      'as'   => 'admin.all'
    ]);

    // For Update Qty
    Route::get('admin/profile/index/update/{id}', [
      'uses' => 'ProductController@getProductUpdate',
      'as'   => 'product.update'
    ]);

    // For Delete Product
    Route::get('admin/profile/index/delete/{id}', [
      'uses'  => 'ProductController@getProductDelete',
      'as'    => 'product.delete'
    ]);

    Route::get('/logout', [
      'uses'  => 'UserController@getLogout',
      'as'    => 'user.logout'
    ]);
  });

});

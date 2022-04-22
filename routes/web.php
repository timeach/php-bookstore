<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function(){
    return view( 'home.index');
});

Route::get('/About', function (){
    return view('About.index');
});

Route::get('/Contact', function (){
    return view('Contact.index');
});

Route::get('/Supplier/bookPerPub', function (){
    return view('Supplier.bookPerPub');
});

Route::get('/Supplier/book', function (){
    return view('Supplier.book');
});

Route::get('/Books', 'BooksController@index');

Route::get('/Supplier/Books', 'BooksController@index');

Route::get('/Books/Create', 'BooksController@Create');

Route::post('/Books/Create','BooksController@CreatePost');

Route::get('cart', 'BooksController@cart');

Route::get('add-to-cart/{id}', 'BooksController@addToCart');

Route::get('/Supplier/add-to-cart/{id}', 'BooksController@addToCart');

Route::patch('update-cart', 'BooksController@update');

Route::delete('remove-from-cart', 'BooksController@remove');


Route::get('Cars/', "CarController@index");

Route::get('Cars/Create', "CarController@Create");

Route::post('Cars/Create', 'CarController@CreatePost');


Route::get('Supplier/', "SupplierController@index");

Route::get('Supplier/Create', "SupplierController@Create");

Route::post('Supplier/Create', 'SupplierController@CreatePost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

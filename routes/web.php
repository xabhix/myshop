<?php
use App\item;
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

// Route::get('/{latest?}', function () {
//     $item=item::select('*')->with('category')->get();
//     return view('showitem',compact('item'));
// });

Auth::routes();
Route::get('/{latest?}','ItemController@index');
Route::get('/{recentitem}','ItemController@FilterLatest');
Route::get('cartitem/{id}/{item}','ItemController@addcart');
Route::post('/itemcategoryadd','CategoryController@addcategory');
Route::get('profile/itemcategory','CategoryController@itemcategory');
Route::get('profile/itemdelete/{id}','ItemController@deleteitem');
Route::post('/updateitem','ItemController@updateitem');
Route::get('profile/edititem','ItemController@edititemform');
Route::get('profile/edititem/{id}','ItemController@edit_item');
Route::get('profile/itemtable','ItemController@itemtable')->name('itemtable');
Route::post('/itemadd','ItemController@itemadd')->name('itemadd');
Route::get('profile/itemform','ItemController@itemform')->name('itemform');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/update', 'HomeController@update')->name('update');
Route::get('profile/edit/{id}','HomeController@edit');
Route::get('/logout','HomeController@logout')->name('logout');

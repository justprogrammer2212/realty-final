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


Route::get('/', 'PageController@homePage')->name('indexPage');
Route::get('/offers', 'PageController@offersPage')->name('offersPage');
Route::get('/about', 'PageController@aboutPage')->name('aboutPage');
Route::get('/contact', 'PageController@contactPage')->name('contactPage');
Route::get('/search', 'OffersController@search')->name('search');

Route::get('/offers', 'OffersController@offers')->name('offersPage');

Route::get('/offers/category/{id}', 'OffersController@offersCategories')->name('offersCategory');

Route::get('/', 'OffersController@homePage_offers')->name('indexPage');
Route::get('/offer/{show}', 'OffersController@offer_show')->name('showOffer');
Route::post('/offer/add', 'OffersController@addOffer')->name('addOffer');


Route::get('/user/profile', 'UserProfileController@user')->name('user_profile');
Route::get('/user/profile/add', 'UserProfileController@userAdd')->name('user_profile_add');

Route::get('/user/profile/edit/{user_id}', 'UserProfileController@userEdit')->name('user_profile_edit')->middleware('checkRole');

Route::get('/offer/edit/{offer}', 'OffersController@offerEdit')->name('offer_edit');
Route::post('/offer/update/{offer}', 'OffersController@offerUpdate')->name('offer_update');
Route::post('/user/profile/avatar_u[load/{user}', 'AvatarController@uploadAvatar')->name('avatar_upload');
Route::post('/user/profile/update', 'UserProfileController@userUpdate')->name('user_profile_update');
Route::get('/user/offer-profile/delete/{user_id}', 'UserProfileController@userDelete')->name('user_profile_delete')->middleware('checkOffer');;

Route::get('/user/realtors/{offer_id}', 'RealtorController@listRealtors')->name('user_realtor_add');

Route::get('/user/realtors/{offer_id}/{realtor_id}', 'RealtorController@selectRealtor')->name('user_realtor_select');

Route::post('/user/realtors/{offer_id}/release', 'RealtorController@releaseRealtor')->name('user_realtor_release');

Route::post('/feedback/store', 'FeedbackController@store')->name('feedback.store');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin'], 'namespace' => 'Admin'], function () {
    Route::get('/', function () {
        return redirect()->route('admin.home');
    });

    Route::get('/home', 'IndexController@index')->name('home');

    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/edit/{user}', 'UserController@edit')->name('users.edit');
    Route::delete('/users/delete/{user}', 'UserController@destroy')->name('users.destroy');
    Route::patch('/users/update/{user}', 'UserController@update')->name('users.update');

    Route::get('/offers', 'OfferController@index')->name('offers.index');
    Route::get('/offers/edit/{offer}', 'OfferController@edit')->name('offers.edit');
    Route::patch('/offers/update/{offer}', 'OfferController@update')->name('offers.update');
    Route::delete('/offers/delete/{offer}', 'OfferController@destroy')->name('offers.destroy');

    Route::get('/categories', 'CategoryController@index')->name('categories.index');
    Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
    Route::post('/categories/store', 'CategoryController@store')->name('categories.store');
    Route::get('/categories/edit/{category}', 'CategoryController@edit')->name('categories.edit');
    Route::patch('/categories/update/{category}', 'CategoryController@update')->name('categories.update');
    Route::delete('/categories/delete/{category}', 'CategoryController@destroy')->name('categories.destroy');

    Route::get('/feedback', 'FeedbackController@index')->name('feedback.index');
    Route::get('/feedback/{feedback}', 'FeedbackController@show')->name('feedback.show');
    Route::post('/feedback/update/{feedback}', 'FeedbackController@update')->name('feedback.update');
});

Auth::routes();

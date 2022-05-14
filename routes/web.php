<?php

// use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'FrontendController@index')->name('front.index');
Route::get('/about', 'FrontendController@about')->name('front.about');
Route::get('/project', 'FrontendController@project')->name('front.project');
Route::get('/blog', 'FrontendController@blog')->name('front.blog');
Route::get('/blog/details/{slug}', 'FrontendController@blogdetail')->name('front.blog.detail');
Route::post('/subscribe', 'FrontendController@subscribe')->name('front.subscribe');
Route::get('/search', 'FrontendController@search')->name('front.search');
Route::get('/category/{name}', 'FrontendController@categoryname')->name('category.name');
Route::post('/comment/post', 'FrontendController@commentpost')->name('comment.post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('user/delete/{user_id}', 'HomeController@userdelete')->name('user.delete');
Route::get('home/subscriber', 'HomeController@subscriberlist')->name('home.subscriber.list');

// Profile controller route start
Route::resource('profile', 'ProfileController');
Route::post('profile/name/post', 'ProfileController@profilenamechange')->name('profile.name.post');
Route::post('profile/photo/post', 'ProfileController@profilephotopost')->name('profile.photo.post');
Route::post('profile/password/post', 'ProfileController@profilepasswordpost')->name('profile.password.post');




// HomebannerController 
Route::resource('banner', 'HomebannerController', ['as' => 'home', 'except' => 'show']);


// SocialController 
Route::resource('social', 'SocialController', ['as' => 'home', 'except' => 'show']);

// CategoryController 
Route::resource('category', 'CategoryController', ['as' => 'home', 'except' => 'show']);
// BlogController

//------------ Blog ------------
Route::resource('home/blog', 'BlogController', ['as' => 'home', 'except' => 'show']);
Route::get('home/blog/status/{blog}/{type}', 'BlogController@status')->name('home.blog.item.status');
Route::get('blog/delete/{key}/{id}', 'BlogController@delete')->name('home.blog.photo.delete');

// InstagramController 
Route::resource('instagram', 'InstagramController', ['as' => 'home', 'except' => 'show']);

// ProjectController 
Route::resource('home/project', 'ProjectController', ['as' => 'home', 'except' => 'show']);

// SpecialityController 
Route::resource('speciality', 'SpecialityController', ['as' => 'home', 'except' => 'show']);

// TeamController 
Route::resource('team', 'TeamController', ['as' => 'home', 'except' => 'show']);

// PartnerController 
Route::resource('partner', 'PartnerController', ['as' => 'home', 'except' => 'show']);




// SettingController

Route::get('basic/settings', 'SettingController@basicsettings')->name('basic.settings');
Route::post('basic/settings/update', 'SettingController@basicsettingsupdate')->name('basic.settings.update');

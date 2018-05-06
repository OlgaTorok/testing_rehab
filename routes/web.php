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

Auth::routes();
// Home controler
Route::get('/home', 'HomeController@index')->name('home');

// Separate controllers for admin and user
Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/user/home', 'User\HomeController@index')->name('user.home');

//-----------------------------------------//
//    Setting the routes for the ADMIN     //
//-----------------------------------------//

//Users
Route::get   ('/admin/users/',          'Admin\UserController@index'  )->name('admin.users.index');
Route::get   ('/admin/users/create',    'Admin\UserController@create' )->name('admin.users.create');
Route::get   ('/admin/users/{id}',      'Admin\UserController@show'   )->name('admin.users.show');
Route::post  ('/admin/users/store',     'Admin\UserController@store'  )->name('admin.users.store');
Route::get   ('/admin/users/{id}/edit', 'Admin\UserController@edit'   )->name('admin.users.edit');
Route::put   ('/admin/users/{id}',      'Admin\UserController@update' )->name('admin.users.update');
Route::delete('/admin/users/{id}',      'Admin\UserController@destroy')->name('admin.users.destroy');
Route::get   ('/admin/users/{id}/activities/create',      'Admin\UserController@activities_create'   )->name('admin.users.activities_create');
Route::post  ('/admin/users/{id}/activities/store',       'Admin\UserController@activities_store'  )->name('admin.users.activities_store');

//Activities
Route::get   ('/admin/activities/',          'Admin\ActivityController@index'  )->name('admin.activities.index');
Route::get   ('/admin/activities/create',    'Admin\ActivityController@create' )->name('admin.activities.create');
Route::get   ('/admin/activities/{id}',      'Admin\ActivityController@show'   )->name('admin.activities.show');
Route::post  ('/admin/activities/store',     'Admin\ActivityController@store'  )->name('admin.activities.store');
Route::get   ('/admin/activities/{id}/edit', 'Admin\ActivityController@edit'   )->name('admin.activities.edit');
Route::put   ('/admin/activities/{id}',      'Admin\ActivityController@update' )->name('admin.activities.update');
Route::delete('/admin/activities/{id}',      'Admin\ActivityController@destroy')->name('admin.activities.destroy');

Route::get   ('/admin/activities/{id}/create',      'Admin\ActivityController@steps_create'   )->name('admin.activities.steps_create');
Route::post  ('/admin/activities/{id}/store',       'Admin\ActivityController@steps_store'  )->name('admin.activities.steps_store');
Route::post  ('/admin/activities/{id}/store',       'Admin\ActivityController@upload_img'  )->name('admin.activities.upload_img');

//Route::get   ('/admin/activities/{id}/create',      'Admin\ActivityController@tips_create'   )->name('admin.activities.tips_create');
//Route::post  ('/admin/activities/{id}/store',       'Admin\ActivityController@tips_store'  )->name('admin.activities.tips_store');

//Steps
Route::get   ('/admin/steps/',          'Admin\StepController@index'  )->name('admin.steps.index');
Route::get   ('/admin/steps/create',    'Admin\StepController@create' )->name('admin.steps.create');
Route::get   ('/admin/steps/{id}',      'Admin\StepController@show'   )->name('admin.steps.show');
Route::post  ('/admin/steps/store',     'Admin\StepController@store'  )->name('admin.steps.store');
Route::get   ('/admin/steps/{id}/edit', 'Admin\StepController@edit'   )->name('admin.steps.edit');
Route::put   ('/admin/steps/{id}',      'Admin\StepController@update' )->name('admin.steps.update');
Route::delete('/admin/steps/{id}',      'Admin\StepController@destroy')->name('admin.steps.destroy');

//Categories
Route::get   ('/admin/categories/',          'Admin\CategoryController@index'  )->name('admin.categories.index');
Route::get   ('/admin/categories/create',    'Admin\CategoryController@create' )->name('admin.categories.create');
Route::get   ('/admin/categories/{id}',      'Admin\CategoryController@show'   )->name('admin.categories.show');
Route::post  ('/admin/categories/store',     'Admin\CategoryController@store'  )->name('admin.categories.store');
Route::get   ('/admin/categories/{id}/edit', 'Admin\CategoryController@edit'   )->name('admin.categories.edit');
Route::put   ('/admin/categories/{id}',      'Admin\CategoryController@update' )->name('admin.categories.update');
Route::delete('/admin/categories/{id}',      'Admin\CategoryController@destroy')->name('admin.categories.destroy');

//Levels
Route::get   ('/admin/levels/',          'Admin\LevelController@index'  )->name('admin.levels.index');
Route::get   ('/admin/levels/create',    'Admin\LevelController@create' )->name('admin.levels.create');
Route::get   ('/admin/levels/{id}',      'Admin\LevelController@show'   )->name('admin.levels.show');
Route::post  ('/admin/levels/store',     'Admin\LevelController@store'  )->name('admin.levels.store');
Route::get   ('/admin/levels/{id}/edit', 'Admin\LevelController@edit'   )->name('admin.levels.edit');
Route::put   ('/admin/levels/{id}',      'Admin\LevelController@update' )->name('admin.levels.update');
Route::delete('/admin/levels/{id}',      'Admin\LevelController@destroy')->name('admin.levels.destroy');

//Emoji
Route::get   ('/admin/emojis/',          'Admin\EmojiController@index'  )->name('admin.emojis.index');
Route::get   ('/admin/emojis/create',    'Admin\EmojiController@create' )->name('admin.emojis.create');
Route::get   ('/admin/emojis/{id}',      'Admin\EmojiController@show'   )->name('admin.emojis.show');
Route::post  ('/admin/emojis/store',     'Admin\EmojiController@store'  )->name('admin.emojis.store');
Route::get   ('/admin/emojis/{id}/edit', 'Admin\EmojiController@edit'   )->name('admin.emojis.edit');
Route::put   ('/admin/emojis/{id}',      'Admin\EmojiController@update' )->name('admin.emojis.update');
Route::delete('/admin/emojis/{id}',      'Admin\EmojiController@destroy')->name('admin.emojis.destroy');

//Tips
Route::get   ('/admin/tips/',          'Admin\TipController@index'  )->name('admin.tips.index');
Route::get   ('/admin/tips/create',    'Admin\TipController@create' )->name('admin.tips.create');
Route::get   ('/admin/tips/{id}',      'Admin\TipController@show'   )->name('admin.tips.show');
Route::post  ('/admin/tips/store',     'Admin\TipController@store'  )->name('admin.tips.store');
Route::get   ('/admin/tips/{id}/edit', 'Admin\TipController@edit'   )->name('admin.tips.edit');
Route::put   ('/admin/tips/{id}',      'Admin\TipController@update' )->name('admin.tips.update');
Route::delete('/admin/tips/{id}',      'Admin\TipController@destroy')->name('admin.tips.destroy');

//Ratings
Route::get   ('/admin/ratings/',          'Admin\RatingController@index'  )->name('admin.ratings.index');
Route::get   ('/admin/ratings/create',    'Admin\RatingController@create' )->name('admin.ratings.create');
Route::get   ('/admin/ratings/{id}',      'Admin\RatingController@show'   )->name('admin.ratings.show');
Route::post  ('/admin/ratings/store',     'Admin\RatingController@store'  )->name('admin.ratings.store');
Route::get   ('/admin/ratings/{id}/edit', 'Admin\RatingController@edit'   )->name('admin.ratings.edit');
Route::put   ('/admin/ratings/{id}',      'Admin\RatingController@update' )->name('admin.ratings.update');
Route::delete('/admin/ratings/{id}',      'Admin\RatingController@destroy')->name('admin.ratings.destroy');
//Image uploader
// Route::post('upload', 'UploadController@upload');




//-----------------------------------------------//
//         Setting the routes for the USER       //
//----------------------------------------------//
Route::resource('user/activities', 'User\ActivityController', ['as' => 'user']);
// Route::resource('user/steps', 'User\StepController', ['as' => 'user']);
// Route::resource('user/categories', 'User\CategoryController', ['as' => 'user']);
// Route::resource('user/tip', 'User\TipController', ['as' => 'user']);


Route::get('/user/activities', 'User\ActivityController@index')->name('user.activities.index');
Route::get('/user/activities/{id}', 'User\ActivityController@show')->name('user.activities.show');

// Route::post('/user/search', 'User\SearchController@filter');
Route::any('/search',function(){
    $find = Input::get ( 'find' );
    $activity = Activity::where('title','LIKE','%'.$find.'%')->get();
    if(count($activity) > 0)
        return view('/user/activities')->withDetails($activity)->withQuery ( $find );
    else
        return view ('/user/activities')->withMessage('No Details found. Try to search again !');
});

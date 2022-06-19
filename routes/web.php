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

//Models
Route::model('page', 'App\Models\Page');

//city,state,zip
Route::get('get-states/{cname?}', function ($id) {
    return getStates($id);
});

Route::get('get-cities/{sname?}', function ($id) {
    return getCities($id);
});

/* Web Pages */

Route::get('login', 'App\Http\Controllers\AuthController@getSignin')->name('login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::post('login', 'App\Http\Controllers\AuthController@postSignin')->name('login_post');

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::post('/add/user', 'FrontEnd\RegistrationController@addUser')->name('add_user');
});


//Admin Routes
Route::group(['namespace' => 'App\Http\Controllers','prefix' => 'admin','middleware' => 'roles'], function()
{
    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('admin_dashboard');

    /* Page Routes */
    Route::get('pages', 'Admin\PageController@index')->name('admin_pages');
    Route::get('pages/data', 'Admin\PageController@getData')->name('admin_pages_data');
    Route::get('page/create', 'Admin\PageController@add')->name('admin_page_add');
    Route::post('page/create', 'Admin\PageController@addProcess')->name('admin_page_add_post');
    Route::get('page/edit/{id}', 'Admin\PageController@edit')->name('admin_page_update');
    Route::post('page/{id}', 'Admin\PageController@editProcess')->name('admin_page_update_post');
    Route::get('page/delete/{id}', 'Admin\PageController@delete')->name('admin_page_delete');

    /*users*/
    Route::get('/manage/user/edit/{id}', 'Admin\UserManagementController@edit')->name('admin_edit_user');
    Route::post('/manage/user/edit/{id}', 'Admin\UserManagementController@update')->name('admin_post_edit_user');

});

//AccessForbidden Page
Route::get('access_denied', function () {
    return view('error.access_forbidden');
})->name('access_denied');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['roles']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['namespace' => 'App\Http\Controllers', /*'prefix' => 'admin','middleware' => 'roles'*/ ], function() {
    Route::get('/', 'FrontEnd\PageController@index')->name('home_page');
    Route::get('/{name?}', 'FrontEnd\PageController@page')->name('page_view');
});
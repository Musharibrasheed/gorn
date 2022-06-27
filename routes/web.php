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

Route::get('/showarticles/', 'App\Http\Controllers\FrontEnd\PostController@showarticles')->name('show_articles');

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
    Route::get('/apply-now/', 'Admin\PageController@applyNow')->name('admin_apply_now');
    Route::get('/apply-now/data', 'Admin\PageController@getApplyNowData')->name('admin_apply_now_data');
    Route::get('/apply-now/{id}/view', 'Admin\PageController@viewApplyNow')->name('admin_applynow_view');






    //Post Route

        /* Page Routes */
    Route::get('posts', 'Admin\PostController@index')->name('admin_posts');
    Route::get('posts/data', 'Admin\PostController@getData')->name('admin_posts_data');
    Route::get('posts/create', 'Admin\PostController@add')->name('admin_post_add');
    Route::post('posts/create', 'Admin\PostController@addProcess')->name('admin_post_add_post');
    Route::get('posts/edit/{id}', 'Admin\PostController@edit')->name('admin_post_update');
    Route::post('posts/{id}', 'Admin\PostController@editProcess')->name('admin_post_update_post');
    Route::get('posts/delete/{id}', 'Admin\PostController@delete')->name('admin_post_delete');



 

    /*users*/
    Route::get('/manage/user/edit/{id}', 'Admin\UserManagementController@edit')->name('admin_edit_user');
    Route::post('/manage/user/edit/{id}', 'Admin\UserManagementController@update')->name('admin_post_edit_user');

    /* Testimonials*/
    Route::get('/testimonials/', 'Admin\TestimonialsController@index')->name('admin_testimonials');
    Route::get('/testimonials/create/', 'Admin\TestimonialsController@add')->name('admin_add_testimonial');
    Route::post('/testimonials/create/', 'Admin\TestimonialsController@addProcess')->name('admin_add_testimonial_post');
    Route::get('/testimonials/edit/{id}', 'Admin\TestimonialsController@edit')->name('admin_edit_testimonial');
    Route::post('/testimonials/{id}', 'Admin\TestimonialsController@editProcess')->name('admin_edit_testimonial_post');
    Route::get('/testimonials/delete/{id}', 'Admin\TestimonialsController@delete')->name('admin_testimonial_delete');
    Route::get('/testimonials/data/', 'Admin\TestimonialsController@getData')->name('admin_testimonials_data');

    /* Articles */
    Route::get('/articles/', 'Admin\ArticlesController@index')->name('admin_articles');
    Route::get('/articles/create/', 'Admin\ArticlesController@add')->name('admin_add_article');
    Route::post('/articles/create/', 'Admin\ArticlesController@addProcess')->name('admin_add_article_post');
    Route::get('/articles/edit/{id}', 'Admin\ArticlesController@edit')->name('admin_edit_article');
    Route::post('/articles/{id}', 'Admin\ArticlesController@editProcess')->name('admin_edit_article_post');
    Route::get('/articles/delete/{id}', 'Admin\ArticlesController@delete')->name('admin_article_delete');
    Route::get('/articles/data/', 'Admin\ArticlesController@getData')->name('admin_articles_data');

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


    Route::get('/article/{name?}', 'FrontEnd\PostController@page')->name('post_view');

   


    Route::post('/demo/request/', 'FrontEnd\PageController@demoRequest')->name('demo_request');
    Route::post('/apply', 'FrontEnd\PageController@applyNow')->name('apply_now');
});
 


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['roles']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
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

// Route::get('/', function () {
//     return view('frontend.page.home');
// });
Route::get('contact', function () {
    return view('frontend.page.contact');
});
// Route::get('edit_profile', function () {
//     return view('frontend.page.edit_profile');
// })->name('edit_profile');


// Route::get('login', function () {
//     return view('frontend.page.login');
// })->name('login');

/* Forum Pages */

Route::get('forum', function () {
    return view('frontend.forum.forum');
});

Route::get('forum/forum-detail', function () {
    return view('frontend.forum.forum-detail');
});

Route::get('forum/all-categories', function () {
    return view('frontend.forum.all-categories');
});

Route::get('forum/all-members', function () {
    return view('frontend.forum.all-members');
});

Route::get('forum/forum-categories-topics', function () {
    return view('frontend.forum.forum-categories-topics');
});

Route::get('forum/create-thread', function () {
    return view('frontend.forum.create-thread');
});

Route::get('forum/forum-categories-threads', function () {
    return view('frontend.forum.forum-categories-threads');
});

Route::get('forum/my-topics', function () {
    return view('frontend.forum.my-topics');
});

/* Community Pages */

Route::get('community', function () {
    return view('frontend.community.community');
});

Route::get('community/create-group', function () {
    return view('frontend.community.create-group');
});

Route::get('community/create-event', function () {
    return view('frontend.community.create-event');
});

Route::get('community/group-listing', function () {
    return view('frontend.community.group-listing');
});

Route::get('community/group-inner-detail', function () {
    return view('frontend.community.group-inner-detail');
});


Route::get('community/community-events-calendar', function () {
    return view('frontend.community.community-events-calendar');
});

Route::get('community/post-approval', function () {
    return view('frontend.community.post-approval');
});

Route::get('community/community-inner-fundraisers', function () {
    return view('frontend.community.community-inner-fundraisers');
});

Route::get('community/community-inner-detailed-calendar-inner', function () {
    return view('frontend.community.community-inner-detailed-calendar-inner');
});

Route::get('community/member-request', function () {
    return view('frontend.community.member-request');
});

Route::get('community/events-listing', function () {
    return view('frontend.community.events-listing');
});

Route::get('community/profile', function () {
    return view('frontend.community.profile');
});

Route::get('community/community-inner-polls', function () {
    return view('frontend.community.community-inner-polls');
});

Route::get('community/community-group-live-chat', function () {
    return view('frontend.community.community-group-live-chat');
});

Route::get('community/proifle-message-detailed', function () {
    return view('frontend.community.proifle-message-detailed');
});


/* Market Pages */

Route::get('market', function () {
    return view('frontend.market.market');
});

Route::get('market/market-inner', function () {
    return view('frontend.market.market-inner');
});

Route::get('market/market-inner-detail', function () {
    return view('frontend.market.market-inner-detail');
});

Route::get('market/brand', function () {
    return view('frontend.market.brand');
});

Route::get('market/dashboard', function () {
    return view('frontend.market.dashboard');
});

Route::get('market/dashboard-products', function () {
    return view('frontend.market.dashboard-products');
});


Route::get('market/seller-orders', function () {
    return view('frontend.market.seller-orders');
});

Route::get('market/coupons', function () {
    return view('frontend.market.coupons');
});

Route::get('market/apply-for-certification', function () {
    return view('frontend.market.apply-for-certification');
});

Route::get('market/products-inventory', function () {
    return view('frontend.market.products-inventory');
});

Route::get('market/products-shipping', function () {
    return view('frontend.market.products-shipping');
});

Route::get('market/products-attributes', function () {
    return view('frontend.market.products-attributes');
});

Route::get('market/reviews', function () {
    return view('frontend.market.reviews');
});

Route::get('market/add-products', function () {
    return view('frontend.market.add-products');
});

Route::get('market/edit-products', function () {
    return view('frontend.market.edit-products');
});

Route::get('market/withdraw', function () {
    return view('frontend.market.withdraw');
});


Route::get('market/seller-order-inner', function () {
    return view('frontend.market.seller-order-inner');
});

Route::get('market/setting', function () {
    return view('frontend.market.setting');
});

//user routes
Route::group(['namespace' => 'App\Http\Controllers','prefix' => 'customer','middleware' => 'roles'], function()
{
    Route::get('/edit/user', 'FrontEnd\RegistrationController@edit')->name('edit_profile');
    Route::post('/edit/user', 'FrontEnd\RegistrationController@editProcess')->name('update_profile');
});

//Admin Routes
Route::group(['namespace' => 'App\Http\Controllers','prefix' => 'admin','middleware' => 'roles'], function()
{
    Route::get('menus', 'Admin\MenuController@index')->name('admin_menus');
    Route::get('menus/data', 'Admin\MenuController@getData')->name('admin_menus_data');
    Route::get('menu/create', 'Admin\MenuController@add')->name('admin_menu_add');
    Route::post('menu/create', 'Admin\MenuController@addProcess')->name('admin_menu_add_post');
    Route::get('menu/edit/{id}', 'Admin\MenuController@edit')->name('admin_menu_update');
    Route::post('menu/{id}', 'Admin\MenuController@editProcess')->name('admin_menu_update_post');
    Route::get('menu/delete/{id}', 'Admin\MenuController@delete')->name('admin_menu_delete');
    Route::get('menu/page/', 'Admin\MenuController@getPadeDetails')->name('admin_page_details');

    //site settings
    Route::get('site_setting', 'Admin\SiteSettingController@index')->name('site_settings');
    Route::post('site_setting', 'Admin\SiteSettingController@process')->name('site_settings_update');

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

    /* Testimonials*/
    Route::get('/testimonials/', 'Admin\TestimonialsController@index')->name('admin_testimonials');
    Route::get('/testimonials/create/', 'Admin\TestimonialsController@add')->name('admin_add_testimonial');
    Route::post('/testimonials/create/', 'Admin\TestimonialsController@addProcess')->name('admin_add_testimonial_post');
    Route::get('/testimonials/edit/{id}', 'Admin\TestimonialsController@edit')->name('admin_edit_testimonial');
    Route::post('/testimonials/{id}', 'Admin\TestimonialsController@editProcess')->name('admin_edit_testimonial_post');
    Route::get('/testimonials/delete/{id}', 'Admin\TestimonialsController@delete')->name('admin_testimonial_delete');
    Route::get('/testimonials/data/', 'Admin\TestimonialsController@getData')->name('admin_testimonials_data');

    /*users*/
    Route::get('/manage/users', 'Admin\UserManagementController@index')->name('admin_manage_users');
    Route::get('manage/users/data', 'Admin\UserManagementController@getData')->name('admin_manage_users_list');
    Route::get('/manage/user/add/', 'Admin\UserManagementController@add')->name('admin_add_user_get');
    Route::post('/manage/user/add/', 'Admin\UserManagementController@addUser')->name('admin_add_user');
    Route::get('/manage/user/edit/{id}', 'Admin\UserManagementController@edit')->name('admin_edit_user');
    Route::post('/manage/user/edit/{id}', 'Admin\UserManagementController@update')->name('admin_post_edit_user');
    Route::get('/manage/user/delete/{id}', 'Admin\UserManagementController@delete')->name('admin_delete_user');
    // Route::get('/ban/', 'Admin\UserManagementController@banUser')->name('admin_ban_user');
    Route::get('ban/{id}/{type}', 'Admin\UserManagementController@banUser')->name('admin_ban_user');

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
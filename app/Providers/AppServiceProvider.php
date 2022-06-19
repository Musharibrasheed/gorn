<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Models\Repositories\SiteSettingRepository;
use App\Models\Menu;
use App\Models\MenuDescription;
// use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // if (\Schema::hasTable('site_settings')){
        //     $site_setting = new SiteSettingRepository(new SiteSetting);
        //     View::share('site_setting', $site_setting->getByCol(1));
        // }

        view()->composer('*', function($view){
          $view->with('menu_header', $this->getmenu('Primary'));
        });

        view()->composer('*', function($view){
          $view->with('menu_footer', $this->getmenu('Footer'));
        });
        
    }

    public function getmenu($type){ 
        $menu = Menu::where('menu_description.language_id',1)
        ->leftJoin('pages', 'menu.page_id', '=', 'pages.id')
        ->leftJoin('menu_description', 'menu.id', '=', 'menu_description.menu_id')
        ->where('menu.menu_type',$type)
        ->where('menu.status','Active')
        ->orderBy('menu.sort','Asc')
        ->get();
    
        return $menu;
    }
}

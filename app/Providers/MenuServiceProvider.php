<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    $verticalMenuJson = file_get_contents(base_path('resources/menu/verticalMenu.json'));
    $verticalMenuData = json_decode($verticalMenuJson);
    // Share all menuData to all the views
    \View::share('menuData', [$verticalMenuData]);

    //admin page menu data

    $adminVerticalMenuJson = file_get_contents(base_path('resources/menu/adminVerticalMenu.json'));
    $adminVerticalMenuData = json_decode($adminVerticalMenuJson);
    \View::share('adminMenuData', [$adminVerticalMenuData]);
  }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\View;

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
        //

//        view()->share('categories', $categories);
        View::composer('*', function ($view) {
            $categories = Category::all();
            $view->with('init', $this->loadTranslate());
            $view->with('categories', $categories);
        });
    }

    private function loadTranslate()
    {
        $locale = app()->getLocale();
        if ($locale == 'pl') $lang = '';
        else $lang = $locale . '/';

        return [
            'lang' => '/' . $lang,
        ];
    }
}

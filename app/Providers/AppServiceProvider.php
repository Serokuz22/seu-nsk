<?php
namespace App\Providers;

use App\Models\Article;
use App\Models\ContentPage;
use App\Models\Price;
use App\Observers\ArticleObserver;
use App\Observers\ContentPageObserver;
use App\Observers\PriceObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ContentPage::observe(ContentPageObserver::class);
        Article::observe(ArticleObserver::class);
        Price::observe(PriceObserver::class);
    }
}

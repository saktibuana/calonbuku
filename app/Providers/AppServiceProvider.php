<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
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
        Blade::directive('currency', function ( $expression ) { return "Rp <?php echo number_format($expression,0,',','.'); ?>"; });
        $categories =Categories::all();
        view()->share('category',$categories);

        View::composer('*', function ($view) {
            $user = User::where('id',Auth::id())->with(['cart','cart.products','cart.products.users'])->withCount('cart')->get();
            $view->with('validCart', $user[0]->cart_count); // Mengirim data user ke semua view
        });
    }
}

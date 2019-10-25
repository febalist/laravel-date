<?php

namespace Febalist\Laravel\Date;

use Blade;
use Illuminate\Support\DateFactory;
use Illuminate\Support\ServiceProvider;

class DateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        DateFactory::useClass(Date::class);

        Blade::directive('datetime', function ($expression) {
            return "<?php echo $expression ? dater()->datetime($expression) : ''; ?>";
        });

        Blade::directive('date', function ($expression) {
            return "<?php echo $expression ? dater()->date($expression) : ''; ?>";
        });

        Blade::directive('time', function ($expression) {
            return "<?php echo $expression ? dater()->time($expression) : ''; ?>";
        });
    }

    public function register()
    {
        require_once __DIR__.'/helpers.php';
    }
}

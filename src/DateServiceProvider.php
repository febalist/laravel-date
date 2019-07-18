<?php

namespace Febalist\Laravel\Date;

use Illuminate\Support\DateFactory;
use Illuminate\Support\ServiceProvider;

class DateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        DateFactory::useClass(Date::class);
    }
}

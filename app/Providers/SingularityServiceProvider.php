<?php

namespace App\Providers;

use Assely\Singularity\SingularityServiceProvider as ServiceProvider;

class SingularityServiceProvider extends ServiceProvider
{
    /**
     * Base application singularities.
     *
     * @var array
     */
    protected $singularities = [
        'App\Users',
        'App\Comments',
    ];

    /**
     * Bootstrap singularity services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

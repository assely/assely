<?php

namespace App\Providers;

use Assely\Foundation\Providers\HttpServiceProvider as ServiceProvider;

class HttpServiceProvider extends ServiceProvider
{
    /**
     * Application Controllers namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Register addtional WordPress route conditions.
     *
     * @return array
     */
    public function routeConditions()
    {
        // Here is place where you can define addtional
        // WordPress route conditions. For example
        // a WooCommerce custom conditionals.
        return [
            // 'is_shop' => 'shop'
        ];
    }

    /**
     * Load application routes, assets and ajax listeners.
     *
     * @return void
     */
    protected function load()
    {
        require dirname(__DIR__) . '/Http/routes.php';

        require dirname(__DIR__) . '/Http/assets.php';

        require dirname(__DIR__) . '/Http/ajaxes.php';
    }
}

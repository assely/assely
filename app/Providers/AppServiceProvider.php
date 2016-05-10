<?php

namespace App\Providers;

use Assely\Support\Facades\Hook;
use Assely\Support\Support;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any app services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any app services.
     *
     * @return void
     */
    public function boot()
    {
        // Add theme supports for Wordpress essentials.
        $this->addSupport();

        // Clean theme from unnecessary Wordpress elements.
        $this->cleanUnnecessary();

        // Load application components.
        $this->requireComponents();
    }

    /**
     * Add theme support for essential stuff
     * that are not included by default.
     *
     * @return void
     */
    protected function addSupport()
    {
        Support::add([
            /**
             * Add support for head <title> tag.
             *
             * @see https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
             */
            'title-tag' => true,

            /**
             * Add support for posts thumbnails.
             *
             * @see https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
             */
            'post-thumbnails' => true,

            /**
             * Add support for post formats types.
             *
             * @see https://developer.wordpress.org/reference/functions/add_theme_support/#post-formats
             */
            'post-formats' => [],

            /**
             * Turn on HTML5 markup for Wordpress elements.
             *
             * @see https://developer.wordpress.org/reference/functions/add_theme_support/#html5
             */
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ],
        ]);
    }

    /**
     * Clean head from unnecessary WordPress stuff.
     *
     * @return void
     */
    protected function cleanUnnecessary()
    {
        // Hide which Wordpress version we have.
        Hook::action('wp_head', 'wp_generator')->detach();

        // Remove WP Emoji script and styles. In most
        // cases, we don't need this extra requests.
        Hook::action('wp_head', 'print_emoji_detection_script', ['piority' => 7])->detach();
        Hook::action('wp_print_styles', 'print_emoji_styles')->detach();
    }

    /**
     * Load essential application components.
     *
     * @return void
     */
    protected function requireComponents()
    {
        require dirname(__DIR__) . '/Support/menus.php';

        require dirname(__DIR__) . '/Support/sidebars.php';

        require dirname(__DIR__) . '/Support/thumbnails.php';
    }
}

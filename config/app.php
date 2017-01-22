<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Directory Path
    |--------------------------------------------------------------------------
    |
    | This path is used across all application to track or scaffording
    | files. It should points to the root of this application dir
    | which generally lives in WordPress themes directory.
    |
     */

    'directory' => get_template_directory(),

    /*
    |--------------------------------------------------------------------------
    | Application URL Path
    |--------------------------------------------------------------------------
    |
    | This path is used especially for application URLs generation.
    | It should points to the root of this application, same
    | as directory above, but in URI friendly format.
    |
     */

    'path' => get_template_directory_uri(),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value defines "environment" for your application.
    | This may affect how application services will work.
    | You need to set this value in your ".env" file.
    |
     */

    'env' => getenv('WP_ENV'),

    /*
    |--------------------------------------------------------------------------
    | Application Textdomain
    |--------------------------------------------------------------------------
    |
    | The application texdomain determines the default namespace for
    | string translation. Feel free to set this value as you want,
    | but remeber, it should be unique to avoid the colisions.
    |
     */

    'textdomain' => 'app',

    /*
    |--------------------------------------------------------------------------
    | Application Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
     */

    'providers' => [

        /*
         * Assely Components Service Providers
         */
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
        Assely\Adapter\AdapterServiceProvider::class,
        Assely\Console\ConsoleServiceProvider::class,
        Assely\Ajax\AjaxServiceProvider::class,
        Assely\Auth\AuthServiceProvider::class,
        Assely\Hook\HookServiceProvider::class,
        Assely\Cache\CacheServiceProvider::class,
        Assely\Nonce\NonceServiceProvider::class,
        Assely\Asset\AssetServiceProvider::class,
        Assely\Field\FieldServiceProvider::class,
        Assely\Html\HtmlServiceProvider::class,
        Assely\Metabox\MetaboxServiceProvider::class,
        Assely\Taxonomy\TaxonomyServiceProvider::class,
        Assely\Posttype\PosttypeServiceProvider::class,
        Assely\Profile\ProfileServiceProvider::class,
        Assely\User\UserServiceProvider::class,
        Assely\Comment\CommentServiceProvider::class,
        Assely\Column\ColumnServiceProvider::class,
        Assely\Menu\MenuServiceProvider::class,
        Assely\Thumbnail\ThumbnailServiceProvider::class,
        Assely\Sidebar\SidebarServiceProvider::class,
        Assely\View\ViewServiceProvider::class,

        /*
         * Assely Framework Service Providers
         */
        Assely\Foundation\Providers\FoundationServiceProvider::class,

        /*
         * Application Service Providers
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\ConsoleServiceProvider::class,
        App\Providers\HttpServiceProvider::class,
        App\Providers\SingularityServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish.
    |
     */

    'aliases' => [
        'Ajax' => 'Assely\Support\Facades\Ajax',
        'Asset' => 'Assely\Support\Facades\Asset',
        'Auth' => 'Assely\Support\Facades\Auth',
        'Cache' => 'Assely\Support\Facades\Cache',
        'Column' => 'Assely\Support\Facades\Column',
        'Comment' => 'Assely\Support\Facades\Comment',
        'Config' => 'Assely\Support\Facades\Config',
        'Form' => 'Assely\Support\Facades\Form',
        'Hook' => 'Assely\Support\Facades\Hook',
        'Image' => 'Assely\Support\Facades\Image',
        'Menu' => 'Assely\Support\Facades\Menu',
        'Nonce' => 'Assely\Support\Facades\Nonce',
        'Post' => 'Assely\Support\Facades\Post',
        'Route' => 'Assely\Support\Facades\Route',
        'Sidebar' => 'Assely\Support\Facades\Sidebar',
        'Support' => 'Assely\Support\Facades\Support',
        'Term' => 'Assely\Support\Facades\Term',
        'Thumbnail' => 'Assely\Support\Facades\Thumbnail',
        'User' => 'Assely\Support\Facades\User',
        'View' => 'Assely\Support\Facades\View',
    ],

];

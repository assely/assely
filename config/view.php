<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk.
    | Here you may specify an array of paths that
    | should be checked for your views.
    |
     */

    'paths' => [
        get_template_directory() . "/resources/views",
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
     */

    'compiled' => get_template_directory() . "/storage/framework/views",

];

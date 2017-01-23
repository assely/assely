<?php

/*
|--------------------------------------------------------------------------
| Application Custom Rewrite Rules
|--------------------------------------------------------------------------
|
| Here is where you can register all of the custom rewrite rules,
| which afterward can be targeted with your routes. Remember
| to flush rerites after creation or modification rules.
|
 */

Rewrite::rule('/{name}')->where([
    'name' => '([^/]+)',
]);

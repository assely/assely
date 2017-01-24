<?php

// Before running we need to check if everything is in place.
// If something went wrong, we will display friendly alert.
if ( ! require_once __DIR__ . '/bootstrap/compatibility.php') {
    return;
}

// Now, it's safe to load application.
$app = require_once __DIR__ . '/bootstrap/app.php';

// At this point, we also boot all
// registered service providers.
$app->boot();

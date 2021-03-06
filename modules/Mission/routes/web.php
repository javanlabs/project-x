<?php

use Modules\Mission\Controllers\MissionController;

$router->group(
    [
        'prefix' => config('modules.mission.route.prefix'),
        'as' => 'modules::',
        'middleware' => config('modules.mission.route.middleware'),
    ],
    function ($router) {
        $router->resource('mission', MissionController::class);
    }
);

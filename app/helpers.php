<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('registerRoutes')) {
    function registerRoutes($middlewares, $action) {
        $default = config('i18n.default_locale');
        $locales = config('i18n.supported_locales');
        $parts = explode('/', request()->path());
        $locale = $parts[0] ?? '';

        Route::group([
            'prefix' => (in_array($locale, $locales) && $locale != $default) ? $locale : '',
            'middleware' => array_merge(['locale'], $middlewares),
        ], $action);
    }
}

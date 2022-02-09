<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class I18nLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $default = config('i18n.default_locale');
        $locales = config('i18n.supported_locales');
        $parts = explode('/', $request->path());
        $locale = $parts[0] ?? '';

        if (!in_array($locale, $locales)) {
            App::setLocale($default);
        } else {
            App::setLocale($locale);
        }

        return $next($request);
    }
}

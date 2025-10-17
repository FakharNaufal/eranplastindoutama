<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = Session::get('locale', config('app.locale'));

        if ($request->has('lang')) {
            $locale = $request->get('lang');
            Session::put('locale', $locale);
        }

        if (!Session::has('locale')) {
            $browser = $request->getPreferredLanguage(['id','en']);
            Session::put('locale', $browser ?? 'id');
}

        if (! in_array($locale, ['id', 'en'])) {
            $locale = 'id';
        }

        App::setLocale($locale);

        return $next($request);
    }
}

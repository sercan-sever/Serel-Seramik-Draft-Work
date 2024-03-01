<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class BeforeMiddleware
{
    private array $data_;

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->data_ = LaravelLocalization::getSupportedLanguagesKeys();

        $langPrefix = $request->route()->getPrefix();
        $prefix = str_replace("/", "", $langPrefix);
        array_push($this->data_, 'admin');

        if (!in_array($prefix, $this->data_)) {

            session()->put('locale', LaravelLocalization::getDefaultLocale() ?? 'tr');
            app()->setLocale(session('locale'));
            LaravelLocalization::setLocale(session('locale'));

            return redirect()->route('default', ['lang' => session('locale')]);
        }

        session()->put('locale', $prefix ?? 'tr');
        app()->setLocale(session('locale'));
        LaravelLocalization::setLocale(session('locale'));

        view()->share('languages', LaravelLocalization::getSupportedLanguagesKeys());
        view()->share('activeLanguage', $prefix ?? 'tr');

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\CustomText;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class LanguageSwitcher
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
        if (auth()->user() && Cache::has('set_language_id') && cache('set_language_id') == auth()->user()->preffered_language) {
            return $next($request);
        }
        if (auth()->user() && isset(auth()->user()->preffered_language)) {
            Cache::flush();
            Cache::rememberForever('set_language_id', function () {
                return auth()->user()->preffered_language;
            });
            $custom_text_model = CustomText::where('language_id', auth()->user()->preffered_language)->get();
            foreach ($custom_text_model as $key => $custom_text) {
                foreach ($custom_text->jsonData as $new_key => $jsonData) {
                    Cache::rememberForever($new_key, function ()  use ($jsonData) {
                        return $jsonData;
                    });
                }
            }
        }
        // dd('ddd');
        if (session()->has('set-locale')) {
            App::setLocale(session()->get('set-locale'));
        }
        return $next($request);
    }
}

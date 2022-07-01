<?php

use Carbon\Carbon;
use App\Models\Setting;
use App\Source;
use Jenssegers\Agent\Agent;

function getUserPreferences()
{
    $preferences = [];
    $preferences['hidden_sources'] = [];
    $preferences['favorite_countries'] = [];
    $preferences['favorite_categories'] = [];

    if (Auth::check()) {
        $user = Auth::user();
        if ($user->hidden_sources()) {
            $preferences['hidden_sources'] = $user->hidden_sources()->get()->pluck('id')->toArray();
        }
        if ($user->favorite_countries()) {
            $preferences['favorite_countries'] = $user->favorite_countries()->get()->pluck('id')->toArray();
        }
        if ($user->favorite_categories()) {
            $preferences['favorite_categories'] = $user->favorite_categories()->get()->pluck('id')->toArray();
        }
    } else {
        if (isset($_COOKIE['hidden_sources'])) {
            $hidden_sources = json_decode($_COOKIE['hidden_sources']);
            if (is_array($hidden_sources)) {
                foreach ($hidden_sources as $hidden_source) {
                    $sources = Source::where('name', $hidden_source->name)->get()->pluck('id')->toArray();
                    $preferences['hidden_sources'] = array_merge($preferences['hidden_sources'], $sources);
                }
            }
        }
        if (isset($_COOKIE['favorite_countries'])) {
            $favorite_countries = json_decode($_COOKIE['favorite_countries']);
            if (is_array($favorite_countries)) {
                foreach ($favorite_countries as $favorite_country) {
                    $preferences['favorite_countries'][] = $favorite_country->id;
                }
            }
        }
        if (isset($_COOKIE['favorite_categories'])) {
            $favorite_categories = json_decode($_COOKIE['favorite_categories']);
            if (is_array($favorite_categories)) {
                foreach ($favorite_categories as $favorite_category) {
                    $preferences['favorite_categories'][] = $favorite_category->id;
                }
            }
        }
    }

    return $preferences;
}
function getAssetTimestamp()
{
    $setting = env('APP_ASSET_TIMESTAMP', false);
    $current_time = Carbon::now()->timestamp;

    if ($setting) {
        $html = '?' . $current_time;
    } else {
        $html = '';
    }
    return $html;
}

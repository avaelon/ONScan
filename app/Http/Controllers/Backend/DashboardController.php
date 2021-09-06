<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Stevebauman\Location\Facades\Location;
use Dnsimmons\OpenWeather\OpenWeather;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ip = request()->ip();
        $location = Location::get('180.178.189.75');
        $weather = new OpenWeather();
        $currentWeather = $weather->getCurrentWeatherByCityName($location->cityName);
        // dd($currentWeather, $weather, $location);
        $iconName = explode('/', $currentWeather['condition']['icon']) ;
        return view('backend.dashboard.index', compact('currentWeather', 'iconName', 'location'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Mean;
use App\Models\Delay;
use App\Models\City;

class AdminController extends Controller
{
    public function index() {
        $countries = Country::all();
        $means = Mean::all();
        $delays = Delay::all();
        $cities = City::all();
        return view('/admin', compact('countries', 'means', 'delays', 'cities'));
    }
}

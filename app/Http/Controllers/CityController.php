<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        return City::all();
    }

    public function index_from(){
        return City::where('to_only', "on")->get();
    }

    public function store(Request $req) {
        $toonly = 'false';
        if ($req->input('to_only_select'))
            $toonly = 'on';
        Country::find($req->input('selected_country'))->cities()->create([
            'name' => $req->input('name'),
            'to_only' => $toonly
        ]);
        return redirect()->route('admin');
    }

    public function delete($id) {
        $country = City::find($id);
        $country->delete();
        return redirect()->route('admin');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Country;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        return Country::all();
    }

    public function store(Request $req) {
        $filePath = '';
        if($req->file('country_flag')) {
            $fileName = $req->input('name').'.'.$req->file('country_flag')->getClientOriginalExtension();
            $filePath = $req->file('country_flag')->storeAs('flags', $fileName, 'public');
        }
        Country::create([
            'name' => $req->input('name'),
            'timezone' => $req->input('timezone'),
            'telephone_code' => $req->input('telephone_code'),
            'country_flag' => $filePath
        ]);
        return redirect()->route('admin');
    }

    public function delete($id) {
        $country = Country::find($id);
        $country->delete();
        return redirect()->route('admin');
    }
}

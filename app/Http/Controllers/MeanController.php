<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mean;

class MeanController extends Controller
{
    public function index() {
        return Mean::all();
    }

    public function store(Request $req) {
        $filePath = '';
        if($req->file('image')) {
            $fileName = $req->input('name').'_'.$req->file('image')->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('means', $fileName, 'public');
        }
        Mean::create([
            'name' => $req->input('name'),
            'number_places' => $req->input('number_place'),
            'important' => $req->input('important_check'),
            'image' => $filePath
        ]);
        return redirect()->route('admin');
    }

    public function delete($id) {
        $country = Mean::find($id);
        $country->delete();
        return redirect()->route('admin');
    }
}

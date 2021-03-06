<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delay;

class DelayController extends Controller
{
    public function index(){
        return Delay::all();
    }

    public function store(Request $req) {
        Delay::create([
            'name' => $req->input('name')
        ]);
        return redirect()->route('admin');
    }

    public function delete($id) {
        $country = Delay::find($id);
        $country->delete();
        return redirect()->route('admin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediter;

class TravelController extends Controller
{

    public function index(){
        return view('travel');
    }

    public function store(Request $request){
        $newItem = new Expediter;
        $newItem->from = $request->input('from');
        $newItem->to = $request->input('to');
        $newItem->urgent = $request->input('urgent');
        if ($request->input('delay') == "1 Jour")
            $newItem->delay = "Urgent";
        else
            $newItem->delay = $request->input('delay');
        $newItem->weight = $request->input('weight');
        $newItem->description = $request->input('description');
        $newItem->name = $request->input('name');
        $newItem->first_name = $request->input('first_name');
        $newItem->phone_number = $request->input('phone_number');
        $newItem->type = $request->input('typee');
        $newItem->date = $request->input('date');
        $newItem->save();
        return $newItem;
    }

    public function get(){
        return Expediter::all();
    }
}

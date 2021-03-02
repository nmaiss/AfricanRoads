<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transporter;

class TransporterController extends Controller
{
    public function index($type){
        return view('transport', compact('type'));
    }

    public function store(Request $request){
        $newItem = new Transporter;
        $newItem->mean = $request->input('choosed_mean');
        $newItem->date = $request->input('date');
        $newItem->hour = $request->input('hour');
        $newItem->from = $request->input('from');
        $newItem->to = $request->input('to');
        $newItem->number_places = $request->input('number_places');
        $newItem->name = $request->input('name');
        $newItem->first_name = $request->input('first_name');
        $newItem->company = $request->input('company');
        $newItem->country = $request->input('country');
        $newItem->phone_number = $request->input('phone_number');
        $newItem->type = $request->input('typee');
        $newItem->save();
        return $newItem;
    }

    public function get(){
        return Transporter::all();
    }
}

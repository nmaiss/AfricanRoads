<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediter;
use App\Models\Transporter;

class OffersController extends Controller
{
    public function index(){
        return view('offers');
    }
}

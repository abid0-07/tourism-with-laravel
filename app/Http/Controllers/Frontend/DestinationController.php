<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(){
        $heading = 'Destination';
        return view('frontend.destination', compact('heading'));
    }
}
<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $heading = 'Team';
        return view('frontend.team', compact('heading'));
    }
}
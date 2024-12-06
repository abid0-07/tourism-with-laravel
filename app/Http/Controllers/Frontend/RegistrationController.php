<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        $heading = 'Registration';
        return view('frontend.registration', compact('heading'));
    }
}
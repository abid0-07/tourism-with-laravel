<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $heading = 'Contact Us';
        return view('frontend.contact', compact('heading'));
    }
}
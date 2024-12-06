<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $heading = 'Testimonial';
        return view('frontend.testimonial', compact('heading'));
    }
}
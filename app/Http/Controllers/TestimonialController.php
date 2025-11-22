<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        return view('frontend.testimonials');// Logic to retrieve and display all testimonials
    }
}

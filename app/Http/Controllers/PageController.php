<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\Blog;

class PageController extends Controller
{
    public function home()
    {
        $blogs = Blog::where('is_published', true)
            ->latest()
            ->paginate(3);

        return view('frontend.home', compact('blogs'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.service');
    }

    public function serviceDetails()
    {
        return view('frontend.service-detail');
    }

    public function team()
    {
        return view('frontend.team');
    }

    public function teamDetail()
    {
        return view('frontend.team-detail');
    }

    public function contact()
    {
        return view('frontend.contacts');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email_address' => 'required|email',
            'phone_no' => 'nullable|string',
            'con_message' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return response()->json(['message' => 'Message sent successfully.']);
    }
}

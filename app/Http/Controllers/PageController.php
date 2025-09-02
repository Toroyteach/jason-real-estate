<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function home()
    {
        $blogs = Blog::where('is_published', true)
            ->latest()
            ->paginate(3);
    
        $teams = $this->getTeam(); // pass to homepage
        $services = $this->getServices();
    
        return view('frontend.home', compact('blogs', 'teams', 'services'));
    }

    public function about()
    {
        $services = $this->getServices();
        $teams = $this->getTeam();
        return view('frontend.about', compact('services', 'teams'));
    }

    public function services()
    {
        $services = $this->getServices();
        return view('frontend.service', compact('services'));
    }

    public function serviceDetails($slug)
    {
        $services = $this->getServices();
        $service = collect($services)->firstWhere('slug', $slug);

        if (!$service) {
            abort(404);
        }

        return view('frontend.service-detail', compact('service'));
    }

    private function getServices()
    {
        $json = Storage::get('services.json');
        return json_decode($json);
    }
    
    public function teams()
    {
        $teams = $this->getTeam();
        return view('frontend.team', compact('teams'));
    }
    
    public function teamDetails($slug)
    {
        $teams = $this->getTeam();
        $team = collect($teams)->firstWhere('slug', $slug);
    
        if (!$team) {
            abort(404);
        }
    
        return view('frontend.team-detail', compact('team'));
    }

    private function getTeam()
    {
        $json = Storage::get('teams.json');
        return json_decode($json);
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

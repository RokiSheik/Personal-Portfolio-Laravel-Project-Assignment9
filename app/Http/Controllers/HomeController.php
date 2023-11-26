<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("pages.home");
    }

    public function about()
    {
        return view("pages.about");
    }

    public function contact()
    {
        return view("pages.contact");
    }

    public function projects()
    {
        return view("pages.projects");
    }
    public function services()
    {
        return view("pages.services");
    }
    public function pricing()
    {
        return view("pages.pricing");
    }
    
}

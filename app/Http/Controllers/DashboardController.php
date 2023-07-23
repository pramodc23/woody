<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
    	return view('dashboard');
    }

    public function about()
    {
    	return view('about');
    }

    public function service()
    {
    	return view('service');
    }
    
    public function project()
    {
    	return view('project');
    }

    public function contact()
    {
        return view('contact');
    }
}

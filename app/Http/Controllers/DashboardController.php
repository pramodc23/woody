<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Auth;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function about()
    { 
        //hello world abount page
        return view('about');
    }

    public function service()
    {
        //hello world service page
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

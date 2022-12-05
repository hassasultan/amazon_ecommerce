<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role == 0)
        {
            return redirect()->route('admin.home');
        }
    }
    public function dashboard()
    {
        if(auth()->user()->role == 0)
        {
            return view('dashboard.admin.pages.home');
        }
    }
}

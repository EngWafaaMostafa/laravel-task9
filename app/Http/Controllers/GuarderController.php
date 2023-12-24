<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuarderController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function gurad()
    {
        return view('gurad');
    }
    public function contactus()
    {
        return view('contactus');
    }
}

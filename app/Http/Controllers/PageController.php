<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('Homepages.index');
    }

    public function about()
    {
        return view('Homepages.about');
    }

    public function services()
    {
        return view('Homepages.services');
    }

    public function contact()
    {
        return view('Homepages.contacts');
    }

}

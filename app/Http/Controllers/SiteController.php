<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home.index');
    }

    public function docApi()
    {
        return view('site.home.docapi');
    }
}

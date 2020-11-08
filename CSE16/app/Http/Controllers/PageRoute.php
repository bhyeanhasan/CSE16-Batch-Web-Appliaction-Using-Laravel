<?php

# Ei controller sudhu view return korbe ,just ek page theke arek page e jaoar ulr mapping

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageRoute extends Controller
{

    function welcome_page()
    {
        return view('welcome');
    }
    function about_page()
    {
        return view('about');
    }
    function contact_page()
    {
        return view('contact');
    }
    function add_notice_page()
    {
        return view('add_notice');
    }

}

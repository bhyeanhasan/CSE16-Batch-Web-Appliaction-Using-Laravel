<?php

# Ei controller sudhu view return korbe ,just ek page theke arek page e jaoar ulr mapping

namespace App\Http\Controllers;
use App\Models\Notice;
use Illuminate\Http\Request;

class PageRoute extends Controller
{
    #ei controller muloto ek page theke arek page e jaoata control korbe, kno functionality rakhte chai na

    function welcome_page()
    {
        $all_notice = Notice::all();
        return view('welcome',compact('all_notice'));
    }
    function about_page()
    {
        return view('pages.about');
    }
    function contact_page()
    {
        return view('pages.contact');
    }
    function add_notice_page()
    {
        return view('notice.add_notice');
    }
    function post_page()
    {
        return view('blog_post.create_post');
    }


}

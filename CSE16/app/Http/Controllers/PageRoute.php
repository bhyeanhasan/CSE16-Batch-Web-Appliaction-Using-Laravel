<?php

# Ei controller sudhu view return korbe ,just ek page theke arek page e jaoar ulr mapping

namespace App\Http\Controllers;
use App\Models\blog_post;
use App\Models\Notice;
use Illuminate\Http\Request;
use DB;
class PageRoute extends Controller
{
    #ei controller muloto ek page theke arek page e jaoata control korbe

    function welcome_page()
    {
        $all_notice = DB::table('notices')
            ->orderBy('id', 'desc')
            ->get();

        $student_all_information = DB::table('students')
            ->join('users','students.email','users.email')
            ->select('students.*','users.*')
            ->get();

        $all_post = DB::table('blog_posts')
            ->join('students','blog_posts.poster_email','=','students.email')
            ->select('blog_posts.*','students.profile_pic','students.roll')
            ->orderBy('id', 'desc')
            ->get();

        return view('welcome',compact('all_notice','student_all_information','all_post'));
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

<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ManageNotice extends Controller
{
    function post_notice(Request $request)
    {

        $notice_image                   = $request->file('image');
        $notice_image_name_generated    = hexdec(uniqid());
        $notice_image_extention         = $request->file('image')->extension();
        $notice_image_name              = $notice_image_name_generated.$notice_image_extention;
        $notice_image_path              = 'image/notice/';
        $notice_image_database_name     = $notice_image_path.$notice_image_name;

        $notice_image->move($notice_image_path,$notice_image_name);

        $Notice_data = Notice::insert([
            'notice_by'         => Auth::id(),
            'notice_heading'    => $request->heading,
            'notice_body'       => $request->body,
            'notice_link'       => $request->link,
            'notice_picture'    => $notice_image_database_name,
            'created_at'        => Carbon::now(),
        ]);

    }
    function update_notice()
    {

    }
    function delete_notice($id)
    {
        $notice = Notice::find($id);
        $img = $notice->notice_picture;
        unlink($img);
        $notice->delete();
        return Redirect()->back();
    }
    function view_all_notice()
    {
        $all_notice = Notice::all();
        return view('notice',compact('all_notice'));
    }

}

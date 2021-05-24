<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ManageNotice extends Controller
{
<<<<<<< HEAD

=======
>>>>>>> parent of b8a90bb (view)
    function post_notice(Request $request)
    {
        #Html er maddhome pathano image ta nilam
        $notice_image                   = $request->file('image');

        #ekta uniqe nam rakhlam
        $notice_image_name_generated    = hexdec(uniqid());
        #extention ta nilam
        $notice_image_extention         = $request->file('image')->extension();
        #new nam dilam
        $notice_image_name              = $notice_image_name_generated.$notice_image_extention;
        #notice er jonno image jekhane rakhte chai
        $notice_image_path              = 'image/notice/';
        #database e pathsoho rakhbo tai
        $notice_image_database_name     = $notice_image_path.$notice_image_name;

        #image ta age save korte hobe
        $notice_image->move($notice_image_path,$notice_image_name);

        #valugula ar image path+name save korlam
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

        #database theke age notice er picture er nam ta nilam
        $img = $notice->notice_picture;

        #age picture ta project theke delete korlam
        unlink($img);

        #ebar database theke information gula erase kore dilam
        $notice->delete();
        return Redirect()->back();
    }



    function view_all_notice($id)
    {
        $notice_main    =   Notice::find($id);
        $all_notice = Notice::all();
<<<<<<< HEAD
        return view('notice.notice')->with("all_notice",$all_notice)->with("notice_main",$notice_main);
=======
        return view('notice',compact('all_notice'));
>>>>>>> parent of b8a90bb (view)
    }

}

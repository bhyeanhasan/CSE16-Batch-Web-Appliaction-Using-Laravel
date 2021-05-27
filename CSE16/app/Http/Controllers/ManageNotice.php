<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;

class ManageNotice extends Controller
{

    function post_notice(Request $request)
    {

        $pictures_data              = array();

        #kno image deoa hoice kina check korbe
        if($request->hasFile('image'))
        {
            $post_image_name_generated  = hexdec(uniqid());
            $post_image_path            = 'image/notice/';
            $num                        = 0;

            #ekadhik image er jonno protita save korebo
            foreach ($request->file('image') as $picture)
            {
                $picture_name       = $post_image_name_generated.$num.".".$picture->extension();
                $picture_database   = $post_image_path.$picture_name;
                $pictures_data []   = $picture_database;        #image gula array te rakhbo
                $num                = $num+1;
                $picture->move($post_image_path,$picture_name);
            }
        }

        #valugula ar image path+name save korlam
        $Notice_data = Notice::insert([
            'notice_by'         => Auth::user()->email,
            'notice_heading'    => $request->heading,
            'notice_body'       => $request->body,
            'notice_picture'    => implode("|",$pictures_data),
            'created_at'        => Carbon::now(),
        ]);
        return back();
    }


    function delete_notice($id)
    {
        $notice = Notice::find($id);

        #database theke age notice er picture er nam ta nilam
        $img = $notice->notice_picture;

        #age picture ta project theke delete korlam

        if (file_exists($img) )
        {
            unlink($img);
        }

        #ebar database theke information gula erase kore dilam
        $notice->delete();
        return Redirect()->back();
    }

    function link($id)
    {
        $link = Notice::find($id);
        $go =$link->notice_link;

        if($go != null)
        {
            return Redirect::away($go);
        }

    }

    function view_all_notice($id)
    {
//      jeta dekhabo samne
//        $notice_main    =   Notice::find($id);
        $notice_main = null;

        if($id != 0)
        {
            $notice_main = DB::table('notices')
                ->join('students','notices.notice_by','=','students.email')
                ->join('users','notices.notice_by','=','users.email')
                ->select('notices.*','students.profile_pic','students.roll','users.name')
                ->where('notices.id',$id)
                ->get()->first();
        }



//      Sobgula Notice
//        $all_notice = Notice::all();

        $all_notice = DB::table('notices')
            ->join('students','notices.notice_by','=','students.email')
            ->join('users','notices.notice_by','=','users.email')
            ->select('notices.*','students.profile_pic','students.roll','users.name')
            ->get();

            return view('notice.notice')->with("all_notice",$all_notice)->with("notice_main",$notice_main);


    }

}

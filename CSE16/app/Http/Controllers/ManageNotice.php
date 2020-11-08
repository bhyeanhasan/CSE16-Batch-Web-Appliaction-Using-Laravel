<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class ManageNotice extends Controller
{
    function post_notice(Request $request)
    {
        $Notice_data = Notice::insert([
            'notice_heading' => $request->heading,
            'notice_body' => $request->body,
            'notice_link' => $request->link,
            'notice_picture' => $request->image
        ]);

    }
    function update_notice()
    {

    }
    function delete_notice()
    {

    }
}

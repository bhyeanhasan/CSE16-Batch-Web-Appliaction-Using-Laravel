<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageStudent extends Controller
{
    function profile_check()
    {
        # as the user not logged in or not created
        $profile = $profile = Student::select('*')->where('email',Auth::user()->email)->first();

        if($profile != null)
        {
            return view('student.profile',compact('profile'));
        }
        else
        {
            return view('student.profile_create');
        }
    }

    function student_create(Request $request)
    {
        $student_profile_pic                 = $request->file('profile_pic');
        $student_cover_pic                   = $request->file('cover_pic');

        $student_name_generated             = hexdec(uniqid());
        $student_profile_extention            = $request->file('profile_pic')->extension();
        $student_cover_extention            = $request->file('cover_pic')->extension();
        $student_image_path                 = 'image/student/';

        $student_profile_name               = "profile".$student_name_generated.$student_profile_extention;
        $student_cover_name                 = "cover".$student_name_generated.$student_cover_extention;
        $student_profile_database_name      = $student_image_path.$student_profile_name;
        $student_cover_database_name        = $student_image_path.$student_cover_name;

        $student_profile_pic->move($student_image_path,$student_profile_name);
        $student_cover_pic->move($student_image_path,$student_cover_name);
        Student::insert([
            'id'            =>  Auth::user()->id,
            'roll'          =>  $request->roll,
            'reg'           =>  $request->reg,
            'phone'         =>  $request->phone,
            'email'         =>  Auth::user()->email,
            'address'       =>  $request->address,
            'blood_group'   =>  $request->blood_group,
            'birth_date'    =>  $request->birth_date,
            'bio'           =>  $request->bio,
            'profile_pic'   =>  $student_profile_database_name,
            'cover_pic'     =>  $student_cover_database_name,
            'created_at'    =>  Carbon::now(),
            ]);

    }



}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ManageStudent extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    function profile_check()
    {
        # age check kore dekhbe user tar profile create korce kina , ekhane email ke primary dhorci
        $student = Student::select('*')->where('email',Auth::user()->email)->first();

        #user age student profile crate kore thakle direct tar profile e nia jabe
        if($student != null)
        {
            return view('student.public_profile',compact('student'));
        }
        #Profile create na korle profile create er page e nia jabe
        else
        {
            return view('student.profile_create');
        }
    }

    function student_create(Request $request)
    {
        # actual file jeta html er maddhom e asbe
        $student_profile_pic            = $request->file('profile_pic');
        $student_cover_pic              = $request->file('cover_pic');

        # uniqe korar jonno
        $student_name_generated         = hexdec(uniqid());

        # extention paoar jonno
        $student_profile_extention      = $request->file('profile_pic')->extension();
        $student_cover_extention        = $request->file('cover_pic')->extension();

        # Jekhane pic save hobe
        $student_image_path             = 'image/student/';

        #notun je nam hobe
        $student_profile_name           = $student_name_generated."profile.".$student_profile_extention;
        $student_cover_name             = $student_name_generated."cover.".$student_cover_extention;

        #database e je nam e save hobe, path soho
        $student_profile_database_name  = $student_image_path.$student_profile_name;
        $student_cover_database_name    = $student_image_path.$student_cover_name;

        #html er maddhome asa image duita directory te save korlam
        $student_profile_pic->move($student_image_path,$student_profile_name);
        $student_cover_pic->move($student_image_path,$student_cover_name);

        #ebar html theke asa value ar image er path soho nam database e save korlam
        Student::insert([
            'id'            =>  Auth::user()->id,       #Jehetu One to One relationship, ekta user ekta e student
            'roll'          =>  $request->roll,
            'reg'           =>  $request->reg,
            'phone'         =>  $request->phone,
            'email'         =>  Auth::user()->email,    #Jehetu One to One relationship, ekta user ekta e student
            'address'       =>  $request->address,
            'blood_group'   =>  $request->blood_group,
            'birth_date'    =>  $request->birth_date,
            'bio'           =>  $request->bio,
            'profile_pic'   =>  $student_profile_database_name,
            'cover_pic'     =>  $student_cover_database_name,
            'created_at'    =>  Carbon::now(),
            ]);

    }

    function student_all(Request $request)
    {
        #Join two table
        $student_all_information = DB::table('students')
            ->join('users','students.email','users.email')
            ->select('students.*','users.*')
            ->get();

        return view('student.students_all',compact('student_all_information'));
    }

    function public_profile($roll)
    {
        #Join two table with condition
        $students = DB::table('students')
            ->join('users','students.email','users.email')
            ->where('students.roll','=',$roll)
            ->select('students.*','users.*')
            ->get();

        return view('student.profile',compact('students'));

    }

    function student_edit(Request $request)
    {
        $student_all_information = DB::table('students')
            ->join('users','students.email','users.email')
            ->where('students.email','=', Auth::user()->email)
            ->update([
                'users.name'                =>  $request->name,
                'students.roll'             =>  $request->roll,
                'students.reg'              =>  $request->reg,
                'students.phone'            =>  $request->phone,
                'students.address'          =>  $request->address,
                'students.blood_group'      =>  $request->blood_group,
                'students.birth_date'       =>  $request->birth_date,
                'students.bio'              =>  $request->bio,
            ]);

        return redirect()->route('student');
    }

    function student_update_page()
    {
        $student = DB::table('students')
            ->join('users','students.email','users.email')
            ->where('students.email','=',Auth::user()->email)
            ->select('students.*','users.*')
            ->get()->first();

        return view('student.update',compact('student'));
    }

    function change_profile_cover(Request $request)
    {
        # actual file jeta html er maddhom e asbe
        $student_profile_pic        = $request->file('profile_pic');
        $student_cover_pic          = $request->file('cover_pic');

        # uniqe korar jonno
        $student_name_generated     = hexdec(uniqid());

        # Jekhane pic save hobe
        $student_image_path         = 'image/student/';

        #jodi profile pic chnage kora hy
        if($student_profile_pic)
        {
            $student_profile_extention          = $request->file('profile_pic')->extension();
            $student_profile_name               = $student_name_generated."profile.".$student_profile_extention;
            $student_profile_database_name      = $student_image_path.$student_profile_name;

            $student_profile_pic->move($student_image_path,$student_profile_name);

            $old_profile_pic = DB::table('students')
                ->where('students.email','=', Auth::user()->email)
                ->select('profile_pic')
                ->get()->first();

            unlink($old_profile_pic->profile_pic);

            $student_pictures = DB::table('students')
                ->where('students.email','=', Auth::user()->email)
                ->update([
                        'profile_pic'              =>  $student_profile_database_name,
                ]);
        }

        #jodi cover pic change kora hy
        if($student_cover_pic)
        {
            $student_cover_extention        = $request->file('cover_pic')->extension();
            $student_cover_name             = $student_name_generated."cover.".$student_cover_extention;
            $student_cover_database_name    = $student_image_path.$student_cover_name;

            $student_cover_pic->move($student_image_path,$student_cover_name);

            $old_cover_pic = DB::table('students')
                ->where('students.email','=', Auth::user()->email)
                ->select('cover_pic')
                ->get()->first();

            unlink($old_cover_pic->cover_pic);

            $student_pictures = DB::table('students')
                ->where('students.email','=', Auth::user()->email)
                ->update([
                    'cover_pic'              =>  $student_cover_database_name,
                ]);
        }

        return redirect()->route('student');
    }

}

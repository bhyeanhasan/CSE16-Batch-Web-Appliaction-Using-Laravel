<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{asset("vendor/mdi-font/css/material-design-iconic-font.min.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("vendor/font-awesome-4.7/css/font-awesome.min.css")}}" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="{{asset("vendor/select2/select2.min.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("vendor/datepicker/daterangepicker.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("vendor/main.css")}}" rel="stylesheet" media="all">

</head>

<body>
<div class="page-wrapper  p-t-100 p-b-100 font-robo" style="background-color: #F38C35">
    <div class="wrapper wrapper--w680">

        <div class="card card-1">

            <img id="cover" src="{{asset($student->cover_pic)}}" style="height: 350px; width: 100%">



            <div class="card-body">


                <form action={{route('student_edit')}} method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="container">

                        <div class="row">

                            <div class="col-md-12 text-center">
                                <img id="blah" src="{{asset($student->profile_pic)}}" class="rounded-circle" style="height: 200px; width: 200px;margin-top: -150px">



                            </div>

                            <div class="col-md-12 mb-1">
                                <h2 class="title text-center">Please Complete your Profile</h2>
                            </div>

                            <div class="col-md-12">
                                <h6>Name</h6>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" value="{{ Auth::user()->name }}" name="name">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h6>Phone</h6>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" value="{{ $student->phone }}" name="phone">
                                </div>
                                @error("phone")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <h6>Roll No</h6>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" value="{{ $student->roll }}" name="roll">
                                </div>
                                @error("roll")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <h6>Registration No</h6>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" value="{{ $student->reg }}" name="reg">
                                </div>
                                @error("reg")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="col-md-6">
                                <h6>Blood Group</h6>
                                <div class="input-group">

                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="blood_group">

                                            <option selected>{{ $student->blood_group }}</option>
                                            <option>Blood Group A+</option>
                                            <option>Blood Group A-</option>
                                            <option>Blood Group B+</option>
                                            <option>Blood Group B-</option>
                                            <option>Blood Group O+</option>
                                            <option>Blood Group O-</option>
                                            <option>Blood Group AB+</option>
                                            <option>Blood Group AB-</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <h6>Address</h6>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" value="{{$student->address}}" name="address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h6>Birth Day</h6>

                                <div class="input-group">
                                    <input class="input--style-1" type="date" value="{{ $student->birth_date }}" name="birth_date">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h6>Sort Bio</h6>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" value="{{ $student->bio }}" name="bio">
                                </div>
                            </div>






                        </div>

                    </div>







                    <div class="p-t-20 text-center mb-2">
                        <button class="btn btn--radius btn--green" type="submit">Update</button>
                    </div>

                </form>

                <form action={{route('student_pic')}} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 mb-3">
                        Profile Picture  <span class="text-danger">( 1:1 )200*200 jpg</span>
                        <div class="">
                            <input   type="file" name="profile_pic" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        Cover Picture <span class="text-danger">( 1:2 )350*700 jpg</span>
                        <div class="">
                            <input class="" type="file"  name="cover_pic" onchange="document.getElementById('cover').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                    </div>


                    <div class="p-t-20 text-center">
                        <button class="btn btn--radius btn--green" type="submit">Change Picture</button>
                    </div>
                </form>


                <div class="my-3 text-center">
                    <a  href="/">Home Page</a>
                </div>
                <div class="text-center">

                    <a  href="https://image.online-convert.com/convert-to-jpg" target="_blank">If your image not in jpg. Click here to convert your Image Online</a>

                </div>


            </div>
        </div>
    </div>
</div>

<script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("vendor/select2/select2.min.js")}}"></script>
<script src="{{asset("vendor/datepicker/moment.min.js")}}"></script>
<script src="{{asset("vendor/datepicker/daterangepicker.js")}}"></script>
<script src="{{asset("js/global.js")}}"></script>

</body>
</html>
















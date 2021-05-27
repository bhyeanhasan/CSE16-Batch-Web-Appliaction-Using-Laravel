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

                    <div class="container">

                        <div class="row">

                            <div class="col-md-12 text-center">
                                <img id="blah" src="{{ asset($student->profile_pic)}}" class="rounded-circle" style="height: 200px; width: 200px;margin-top: -150px">
                            </div>

                            <div class="col-md-12 mt-2">
                                <h3 class="title text-center p-0 m-0">{{ Auth::user()->name }}</h3>
                            </div>

                            <div class="col-md-12 mb-4">
                                <h4 style="text-align: center;"><i class="fa fa-comment-o" aria-hidden="true"></i> {{$student->bio}}</h4>
                            </div>



                            <div class="col-md-12">

                                <div class="divider running mb-3" style="height:5px;background-color:#1E8440;margin-bottom: 5px"></div>

                                <h4 class="py-2"><i class="fa fa-id-badge" aria-hidden="true"></i> ID No				: {{$student->roll}}</h4>
                                <h4 class="py-2"><i class="fa fa-id-card-o" aria-hidden="true"></i> Registration No 	: {{ $student->reg }}</h4>
                                <h4 class="py-2"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email				: {{ Auth::user()->email }}</h4>
                                <h4 class="py-2"><i class="fa fa-map-marker" aria-hidden="true"></i>Address 			: {{ $student->address }} </h4>
                                <h4 class="py-2"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Phone	: {{ $student->phone }}</h4>
                                <h4 class="py-2"><i class="fa fa-handshake-o" aria-hidden="true"></i> Blood Group		: {{ $student->blood_group }}  </h4>
                                <h4 class="py-2"><i class="fa fa-birthday-cake" aria-hidden="true"></i> Birth Day		: {{ $student->birth_date }}  </h4>

                                <div class="col-md-12 text-center my-3">
                                    <a href="/student_page/update" type="button" class="btn btn-danger" >Update Profile</a>
                                </div>

                                <div class="divider running mt-3" style="height:5px;background-color:#1E8440;margin-bottom: 5px"></div>


                                <div class="text-center">
                                    <h4>
                                        CSE 16 Batch <br>
                                        Patuakhali Science and Technology University
                                    </h4>

                                    <a href="/">Home</a>

                                </div>

                            </div>




                        </div>

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

{{--    <div>--}}
{{--        <h4>Name = {{ Auth::user()->name }}</h4>--}}
{{--        <h4>Email = {{ Auth::user()->email }}</h4>--}}
{{--        <h4>Roll = {{$profile->roll}}</h4>--}}
{{--        <h4>Reg = {{$profile->reg}}</h4>--}}
{{--        <h4>Address = {{$profile->address}}</h4>--}}
{{--        <h4>Blood Group = {{$profile->blood_group}}</h4>--}}
{{--        <h4>Birthday = {{$profile->birth_date}}</h4>--}}
{{--        <h4>Bio = {{$profile->bio}}</h4>--}}
{{--        <img src="{{$profile->profile_pic}}" width="100px" height="100px">--}}
{{--        <img src="{{$profile->cover_pic}}" width="100px" height="100px">--}}
{{--    </div>--}}



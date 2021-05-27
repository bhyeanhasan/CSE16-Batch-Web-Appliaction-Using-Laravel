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


        @foreach($students as $student)

            <div class="card card-1">

                <img id="cover" src="{{asset($student->cover_pic)}}" style="height: 350px; width: 100%">

                <div class="card-body">

                        <div class="container">

                            <div class="row">

                                <div class="col-md-12 text-center">
                                    <img id="blah" src="{{asset($student->profile_pic)}}" class="rounded-circle" style="height: 200px; width: 200px;margin-top: -150px">
                                </div>

                                <div class="col-md-12 mt-2">
                                    <h3 class="title text-center p-0 m-0">{{$student->name}}</h3>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <h4 style="text-align: center;"><i class="fa fa-comment-o" aria-hidden="true"></i> {{$student->bio}}</h4>
                                </div>



                                <div class="col-md-12">

                                    <div class="divider running mb-3" style="height:5px;background-color:#1E8440;margin-bottom: 5px"></div>

                                    <h4 class="py-2"><i class="fa fa-id-badge" aria-hidden="true"></i> ID No				: {{$student->roll}}</h4>
                                    <h4 class="py-2"><i class="fa fa-id-card-o" aria-hidden="true"></i> Registration No 	: {{ $student->reg }}</h4>
                                    <h4 class="py-2"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email				: {{ $student->email }}</h4>
                                    <h4 class="py-2"><i class="fa fa-map-marker" aria-hidden="true"></i>Address 			: {{ $student->address }} </h4>

                                    @guest()
                                        <h4 class="py-2"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Phone	: <span class="text-danger">Sorry You are not Loged In</span></h4>
                                    @else
                                        <h4 class="py-2"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Phone	: {{ $student->phone }}</h4>
                                    @endif

                                    <h4 class="py-2"><i class="fa fa-handshake-o" aria-hidden="true"></i> Blood Group		: {{ $student->blood_group }}  </h4>
                                    <h4 class="py-2"><i class="fa fa-birthday-cake" aria-hidden="true"></i> Birth Day		: {{ $student->birth_date }}  </h4>

                                    <div class="col-md-12 text-center my-3">
                                        <button type="button" class="btn btn-warning" ><a href="mailto:{{$student->email}}">Email Now</a></button>
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

        @endforeach



    </div>
</div>

<script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("vendor/select2/select2.min.js")}}"></script>
<script src="{{asset("vendor/datepicker/moment.min.js")}}"></script>
<script src="{{asset("vendor/datepicker/daterangepicker.js")}}"></script>
<script src="{{asset("js/global.js")}}"></script>

</body>
</html>

















{{--@foreach($students as $student)--}}
{{--    <div style="margin-top: -250px" class="page-content">--}}

{{--        <div class="form-v4-content">--}}

{{--            <div class="form-left p-1 m-0">--}}

{{--                <div  style="text-align: center;">--}}
{{--                    <img src="{{ asset($student->profile_pic) }}" style="height: 250px; width: 100%;border-radius: 5px;">--}}
{{--                </div>--}}

{{--                <div style="text-align: center;">--}}
{{--                    <img src="{{ asset($student->cover_pic) }}" class="rounded-circle" style="height: 200px; width: 200px; margin-top: -75px;">--}}
{{--                </div>--}}

{{--                <div class="mt-2" style="text-align: center;">--}}
{{--                    <h2>{{$student->name}}</h2>--}}
{{--                    <button type="button" class="btn btn-warning" ><a href="mailto:{{$student->email}}">Send email</a></button>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <form class="form-detail" action="#" method="post" id="myform">--}}
{{--                <h2 style="text-align: center;">Contact & Identity</h2>--}}

{{--                <h5 class="p-1 mb-3" style="text-align: center;">{{$student->bio}}</h5>--}}

{{--                <h6 class="py-1"><i class="fa fa-id-badge" aria-hidden="true"></i> <b>ID No</b> 				: {{$student->roll}}</h6>--}}
{{--                <h6 class="py-1"><i class="fa fa-id-card-o" aria-hidden="true"></i> <b>Registration No 	</b> : {{ $student->reg }}</h6>--}}
{{--                <h6 class="py-1"><i class="fa fa-envelope" aria-hidden="true"></i> <b>Email</b> 				: {{ $student->email }}</h6>--}}
{{--                <h6 class="py-1"><i class="fa fa-map-marker" aria-hidden="true"></i> <b>Address </b>			: {{ $student->address }} </h6>--}}
{{--                <h6 class="py-1"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <b>Phone</b> 				: {{ $student->phone }}</h6>--}}
{{--                <h6 class="py-1"><i class="fa fa-handshake-o" aria-hidden="true"></i> <b>Blood Group </b>		: {{ $student->blood_group }}  </h6>--}}
{{--                <h6 class="py-1"><i class="fa fa-birthday-cake" aria-hidden="true"></i> <b>Birth Day 	</b>		: {{ $student->birth_date }}  </h6>--}}

{{--                <h5 class="pt-1 mb-5 mt-4" style="text-align: center;">--}}
{{--                    CSE 16 Batch <br>--}}
{{--                    Patuakhali Science and Technology University--}}
{{--                </h5>--}}

{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endforeach--}}


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
@foreach($student_all_information as $student)
>>>>>>> parent of 3214e23 (last w8)

    <div class="col-md-4">


        <div class="profile-card-2"><img src="{{ asset($student->profile_pic) }}" class="img img-responsive">
            <div class="profile-name">{{ $student->name }}</div>
            <div class="profile-username">{{ $student->roll }}</div>
{{--            <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>--}}
        </div>

    </div>
<<<<<<< HEAD
</div>

<script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("vendor/select2/select2.min.js")}}"></script>
<script src="{{asset("vendor/datepicker/moment.min.js")}}"></script>
<script src="{{asset("vendor/datepicker/daterangepicker.js")}}"></script>
<script src="{{asset("js/global.js")}}"></script>
=======
@foreach($student_all_information as $student)
    <h3>{{ $student->email }}</h3>
    <h3>{{ $student->roll }}</h3>
    <h3>{{ $student->address }}</h3>
@endforeach
>>>>>>> parent of 053087f (post advance)
=======
{{--    <h3>{{ $student->email }}</h3>--}}
{{--    <h3>{{ $student->roll }}</h3>--}}
{{--    <h3>{{ $student->address }}</h3>--}}
@endforeach
>>>>>>> parent of 3214e23 (last w8)

</body>
</html>

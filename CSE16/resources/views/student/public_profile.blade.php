<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

@foreach($student_all_information as $student)

    <div class="col-md-4">


        <div class="profile-card-2"><img src="{{ asset($student->profile_pic) }}" class="img img-responsive">
            <div class="profile-name">{{ $student->name }}</div>
            <div class="profile-username">{{ $student->roll }}</div>
{{--            <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>--}}
        </div>

    </div>
{{--    <h3>{{ $student->email }}</h3>--}}
{{--    <h3>{{ $student->roll }}</h3>--}}
{{--    <h3>{{ $student->address }}</h3>--}}
@endforeach

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>

    <div>
        <h4>Name = {{ Auth::user()->name }}</h4>
        <h4>Email = {{ Auth::user()->email }}</h4>
        <h4>Roll = {{$profile->roll}}</h4>
        <h4>Reg = {{$profile->reg}}</h4>
        <h4>Address = {{$profile->address}}</h4>
        <h4>Blood Group = {{$profile->blood_group}}</h4>
        <h4>Birthday = {{$profile->birth_date}}</h4>
        <h4>Bio = {{$profile->bio}}</h4>
        <img src="{{$profile->profile_pic}}" width="100px" height="100px">
        <img src="{{$profile->cover_pic}}" width="100px" height="100px">
    </div>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Update</title>
</head>
<body>

<form action={{route('student_edit')}} method="post" enctype="multipart/form-data">
    @csrf
        <input type="text" name="name" value="{{ Auth::user()->name }}"> <br> <br>
        <input type="text" name="roll" value="{{ $student->roll }}"> <br> <br>
        <input type="text" name="reg" value="{{ $student->reg }}"> <br> <br>
        <input type="text" name="phone" value="{{ $student->phone }}"> <br> <br>
        <input type="text" name="address" value="{{$student->address}}"> <br> <br>
        <input type="text" name="blood_group" value="{{$student->blood_group}}"> <br> <br>
        <input type="date" name="birth_date" value="{{ $student->birth_date }}"> <br> <br>
        <input type="text" name="bio" value="{{ $student->bio }}"> <br> <br>
        <input type="submit"> <br> <br>
</form>


<div>
    <form action={{route('student_pic')}} method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="profile_pic" > <br> <br>
        <input type="file" name="cover_pic" > <br> <br>
        <input type="submit">
    </form>
</div>
</body>
</html>

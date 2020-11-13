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
    <h3>{{ $student->email }}</h3>
    <h3>{{ $student->roll }}</h3>
    <h3>{{ $student->address }}</h3>
@endforeach

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Student</title>
</head>
<body>

<div>
    <form action={{route('student_post')}} method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="roll" placeholder="roll"> <br> <br>
        <input type="text" name="reg" placeholder="reg"> <br> <br>
        <input type="text" name="phone" placeholder="phone"> <br> <br>
        <input type="text" name="address" placeholder="address"> <br> <br>
        <input type="text" name="blood_group" placeholder="blood_group"> <br> <br>
        <input type="date" name="birth_date" placeholder="birth_date"> <br> <br>
        <input type="text" name="bio" placeholder="bio"> <br> <br>
        <input type="file" name="profile_pic" placeholder="profile_pic"> <br> <br>
        <input type="file" name="cover_pic" placeholder="cover_pic"> <br> <br>
        <input type="submit">
    </form>
</div>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Notice</title>
</head>
<body>

    @guest
        <h1>Its seems you are not a cseian, so you can't post a notice</h1>
    @else
        <form action={{route('notice_post')}} method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="heading" placeholder="Tittle"> <br> <br>
            <textarea type="text" name="body" placeholder="Body"></textarea> <br><br>
            <input type="text" name="link" placeholder="Link"> <br><br>
            <input type="file" name="image"> <br><br>
            <input type="submit">
        </form>
    @endif

</body>
</html>
<script>
    import Input from "../js/Jetstream/Input";
    export default {
        components: {Input}
    }
</script>

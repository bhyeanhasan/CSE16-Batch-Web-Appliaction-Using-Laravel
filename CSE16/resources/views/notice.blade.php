<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notice</title>
</head>
<body>

{{---------------------------------------------------------------------}}
    @foreach($all_notice as $notice)
        <h3>{{$notice->notice_heading}}</h3><br>
        <h5>{{$notice->notice_body}}</h5><br>
        <a href="{{url($notice->notice_link)}}" target="_blank"> LINK</a><br>
        <img src="{{$notice->notice_picture}}" height="100px" width="100px">
        <a href={{ url('notice/delete/'.$notice->id) }}>Delete</a>
        <br><br><br>
    @endforeach
{{---------------------------------------------------------------------}}


</body>
</html>
<script>
    import Button from "../js/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>

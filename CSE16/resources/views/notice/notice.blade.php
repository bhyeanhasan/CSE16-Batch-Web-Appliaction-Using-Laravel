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
    <div class="media">
        <div class="date_news" style="width: 80px;">
            <h6>{{$notice->created_at}}</h6>
        </div>
        <h6 style="margin-top: auto;margin-bottom: auto"><a href="#"> {{ $notice->notice_heading }} </a></h6>
    </div>
@endforeach


<div class="media">

        <h1>{{$notice_main->created_at}}</h1>
    <h5 style="margin-top: auto;margin-bottom: auto"><a href="#"> {{ $notice_main->notice_heading }} </a></h5>
</div>
{{---------------------------------------------------------------------}}


</body>
</html>
<script>
    import Button from "../../js/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>

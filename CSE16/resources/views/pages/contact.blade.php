<!DOCTYPE html>

<html lang="en">

<head>
    <title>CSE16-PSTU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset("layout/styles/layout.css")}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset("style/style.css")}}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset("css/util.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/main.css")}}">
</head>

<body id="top">

<!-- ################################################################################################ -->
<div class="wrapper row1" >
    <header id="header" class="hoc clear">
        <section>
            <!-- ################################################################################################ -->

            <div>
            </div>
            <div>
                <h1 id="logo"><a href="/"><img src="{{asset("images/Batch logo.png")}}" class="forlogo"></a></h1>
            </div>
            <div style="float: right">

                @guest()
                    <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a><br>
                    <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>
                @else
                    <a href="{{ route('student') }}"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a><br>
                    <a href="{{ route('logout_page') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                @endif

            </div>
            <!-- ################################################################################################ -->
        </section>
        <nav id="mainav">
            <!-- ################################################################################################ -->
            <ul class="clear">
                <li class="active"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li><a href="view_notice/{1}"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Notice</a></li>
                <li><a href="/view/post/{1}"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Blog Post</a></li>

                <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i> Class Resources</a>
                    <ul>

                        <li><a class="drop" href="#">Level 1</a>
                            <ul>
                                <li><a href="#">Semester 1 (1st)</a></li>
                                <li><a href="https://oboyob16.me/2nd_semester.html" target="_blank">Semester 2 (2nd)</a></li>
                            </ul>
                        </li>

                        <li><a class="drop" href="#">Level 2</a>
                            <ul>
                                <li><a href="https://oboyob16.me/3rd_semester.html" target="_blank">Semester 1 (3rd)</a></li>
                                <li><a href="#">Semester 2 (4th)</a></li>
                            </ul>
                        </li>

                        <li><a class="drop" href="#">Level 3</a>
                            <ul>
                                <li><a href="#">Semester 1 (5th)</a></li>
                                <li><a href="#">Semester 2 (6th)</a></li>
                            </ul>
                        </li>

                        <li><a class="drop" href="#">Level 4</a>
                            <ul>
                                <li><a href="#">Semester 1 (7th)</a></li>
                                <li><a href="#">Semester 2 (8th)</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>


                <li><a href="{{route('about')}}"><i class="fa fa-eye" aria-hidden="true"></i> Project OBOYOB</a></li>
                <li><a href="{{route('contact')}}"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Contact</a></li>
            </ul>
            <!-- ################################################################################################ -->
        </nav>
    </header>
</div>
<!-- ################################################################################################ -->


<!-- ################################################################################################ -->
<div class="container" style="margin-top: -100px">
    <div class="row">
        <div class="col-md-12">
            <marquee style="font-size:16px;"  scrollamount="6">
                <h5 >
                    ''' ''' অবয়ব ১৬ '''
                    ''' কম্পিউটার বিজ্ঞান ও প্রকৌশল অনুষদ ''''
                    ''' পটুয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয় '''
                    ''' ২০১৮-১৯ সেশন '''
                    ''' CSE-16 '''
                    ''' Faculty of Computer Science and Engineering '''
                    ''' Patuakhali Science and Technology University '''
                    ''' Session 2018-2019 '''
                </h5>

            </marquee>

        </div>
        <div class="col-md-12 text-center">
            <h1>If you have any quary or suggestion</h1>
            <h2>You can Mail to</h2>
            <p style="font-family: Arial; font-size: 20px">bhyean16@cse.pstu.ac.bd or bhyean@gmail.com</p>
        </div>


    </div>
</div>
<!-- ################################################################################################ -->







<!-- JAVASCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset("layout/scripts/jquery.min.js")}}"></script>
<script src="{{asset("layout/scripts/jquery.backtotop.js")}}"></script>
<script src="{{asset("layout/scripts/jquery.mobilemenu.js")}}"></script>

</body>
</html>
<script>
    import Input from "../../js/Jetstream/Input";
    export default {
        components: {Input}
    }
</script>

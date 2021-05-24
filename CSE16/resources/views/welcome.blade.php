<!DOCTYPE html>

<html lang="en">
<head>
    <title>CSE16 PSTU</title>
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
                <li><a href="#"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Notice</a></li>
                <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Blog Post</a></li>

                <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i> Class Resources</a>
                    <ul>

                        <li><a class="drop" href="#">Level 1</a>
                            <ul>
                                <li><a href="#">Semester 1 (1st)</a></li>
                                <li><a href="#">Semester 2 (2nd)</a></li>
                            </ul>
                        </li>

                        <li><a class="drop" href="#">Level 2</a>
                            <ul>
                                <li><a href="#">Semester 1 (3rd)</a></li>
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


                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Project OBOYOB</a></li>
                <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Contact</a></li>
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
                    ''' পটুয়াখালী বিজ্ঞান ও প্রযুক্তি বিস্ববিদ্যালয় '''
                    ''' ২০১৮-১৯ সেশন '''
                    ''' CSE-16 '''
                    ''' Faculty of Computer Science and Engineering '''
                    ''' Patuakhali Science and Technology University '''
                    ''' Session 2018-2019 '''
                </h5>

            </marquee>

        </div>

        <div class="col-md-12 mb-5" >

            <img class="okok" src="{{asset("images/batch.jpg")}}">
        </div>

    </div>
</div>
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<div class="container pb-0" style="margin-top: -150px">
    <div class="row">

{{--        Blog        --}}
        <div class="col-md-7 blog">
            <h1 class="text-center p-3"><em class="fa fa-share-alt-square" aria-hidden="true"></em> Blog</h1>
            <div class="divider running" style="height:5px;background-color:#1E8440;margin-top: -10px;margin-bottom: 5px"></div>
            <div class="row">

                <div class="col-md-12 mb-3">

                    <marquee direction="up" height="500" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10">

                        <!-- ################################################################################################ -->


                        <div class="card mb-3">
                            <div class="card-body pb-2 px-4">
                                <p class="card-title mb-1"> <img src="images/Batch logo.png" style="width: 100px" class="rounded-circle"> Card title treatment </p>
                                <h5 class="card-text mb-1"> With supporting text below as a natural lead-in to additional content. A small river named Duden flows by their place and supplies it with the necessary regelialia. </h5>
                                <a href="#" class="mb-1" style="float: right;" >See Post</a> </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body pb-2 px-4">
                                <p class="card-title mb-1"> <img src="images/Batch logo.png" style="width: 100px" class="rounded-circle"> Card title treatment </p>
                                <h5 class="card-text mb-1"> With supporting text below as a natural lead-in to additional content. A small river named Duden flows by their place and supplies it with the necessary regelialia. </h5>
                                <a href="#" class="mb-1">See Post</a> </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body pb-2 px-4">
                                <p class="card-title mb-1"> <img src="images/Batch logo.png" style="width: 100px" class="rounded-circle"> Card title treatment </p>
                                <h5 class="card-text mb-1"> With supporting text below as a natural lead-in to additional content. A small river named Duden flows by their place and supplies it with the necessary regelialia. </h5>
                                <a href="#" class="mb-1">See Post</a> </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body pb-2 px-4 post">
                                <p class="card-title mb-1"> <img src="images/Batch logo.png" style="width: 100px" class="rounded-circle"> Card title treatment </p>
                                <h5 class="card-text mb-1"> With supporting text below as a natural lead-in to additional content. A small river named Duden flows by their place and supplies it with the necessary regelialia. </h5>
                                <a href="#" class="mb-1">See Post</a> </div>
                        </div>


                        <!-- ################################################################################################ -->

                    </marquee>



                </div>

            </div>
        </div>

{{--        Blank      --}}
        <div class="col-md-1"> </div>

{{--        Notice      --}}
        <div class="col-md-4 notice">
            <h1 class="text-center p-3"><i class="fa fa-bell" aria-hidden="true"></i> Notice</h1>
            <div class="divider running" style="height:5px;background-color:#1E8440;margin-top: -10px;margin-bottom: 5px"></div>
            <div class="row">
                <div class="col-md-12">


                    <marquee direction="up" height="500" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10">

{{--                    Notice Part         --}}

                        @foreach($all_notice as $notice)

                            <div class="notice-body p-2">
                                <h6 class="text-center m-0">{{ $notice->notice_heading }}</h6>
                                <p class="m-0">
								<span style="color: #4eace0;">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									{{$notice->created_at}}
								</span>

                                    <span style="color: #FC427B;margin-left: 10px;">
									<i class="fa fa-download" aria-hidden="true"></i>
									<a href="view_notice/{{ $notice->id }}">View</a>
								</span>
                                </p>
                            </div>

                        @endforeach


                    </marquee>


                </div>
            </div>
        </div>

    </div>
</div>
<!-- ################################################################################################ -->


<!-- ################################################################################################ -->





<div class="demo m-4">
    <div class="container pt-0">
        <div class="row okbh">
            <div class="col-md-12 text-center pt-3" >
                <div class="divider mt-3 running" style="height:5px;background-color:#1E8440;margin-top: -10px;margin-bottom: 5px"></div>
                <h1 class="p-3" style="font-size: 25px">THE CSE16 BATCH</h1>
                <div class="divider mb-5 running" style="height:5px;background-color:#1E8440;margin-top: -10px;margin-bottom: 5px"></div>
            </div>

{{--            Profile     --}}

            @foreach($student_all_information as $student)

                <div class="col-md-3 col-sm-4">
                    <div class="pricingTable orange">
                        <div class="pricingTable-header">
                            <div class="price-value"> <img src="{{$student->profile_pic}}" class="rounded-circle h-full w-full"> </div>
                            <h3 class="title">{{$student->roll}}</h3>
                        </div>
                        <ul class="pricing-content">
                            <li><i class="fa fa-user-o" aria-hidden="true"></i>{{$student->name}}</li>
                        </ul>
                        <a href="/student/{{$student->roll}}" class="pricingTable-signup">Profile</a> </div>
                </div>

            @endforeach


        </div>
    </div>
</div>


<!-- Footer -->


<div class=" container footer-basic" style=" margin-top: -70px; background-color: #E7E7E7">
    <div calss="row">
        <div class="divider mb-5 running" style="height:5px;background-color:#1E8440;"></div>
    </div>

    <footer >


        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Project OBOYOB</a></li>

        </ul>
        <p class="copyright">B H Yean Hasan © 2020</p>
    </footer>
</div>
<!-- Footer -->






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


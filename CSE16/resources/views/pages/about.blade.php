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
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div style="margin-top: -50px">
                        <h1>Project Aboyob</h1>
                        <p>

                            পটুয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের কম্পিউটার বিজ্ঞান এবং প্রকৌশল অনুষদের ২০১৮-১৯ সেশনের প্রত্যেক শুভানুধ্যায়ীদের
                            কিছু লক্ষ্য এবং উদ্দেশ্য মাত্রা নিয়ে প্রজেক্ট অবয়বের যাত্রা শুরু হয়। প্রজেক্ট অবয়ব হলো এমন একটি চিন্তা যেখানে আমরা আমাদের নিজেদের মধ্যে যেকোনো ধরনের জ্ঞান বিনিময়ের মাধ্যমে নিজেদের একে অপরের মধ্যে আত্ম উন্নতি সাধন করতে পারব।ধারণাটিতে একটি ওপেন রিসোর্স এবং জ্ঞান ভাগ করে নেওয়ার ডেটাবেস প্ল্যাটফর্ম তৈরি করা হবে, যেখানে প্রতিটি অবয়বিয়ান যে কোনও জায়গা, যে কোনও মুহুর্ত, যে কোনও ধরণের চিন্তাভাবনা যুক্ত করতে, খুঁজে পেতে এবং ভাগ করতে সক্ষম হবে।
<br>
                            যেহেতু প্রজেক্ট অবয়ব চিন্তাভাবনা (knowlwdge) বিনিময়ের একটি প্ল্যাটফর্ম সুতরাং প্রথমেই যে জিনিসটি প্রয়োজন তা হল রিসোর্স। । যেহেতু আমাদের লক্ষ্যমাত্রা একাডেমিক ভাবে এমন কিছু করা যার ফলাফল আমরা ভবিষ্যতে দৃষ্টান্ত স্থাপনের ক্ষেত্রে ব্যবহার করতে পারি ; তাই আন্তরিকভাবে সকলের কাছে অনুরোধ প্রত্যেকে যেন প্রতি সপ্তাহে কিছু না কিছু রিসোর্স গ্রুপে শেয়ার করি এবং শেয়ার করার সময় সেই রিসোর্স সম্পর্কিত কিছু অনুধাবন বা উপলব্ধি উল্লেখ করি যাতে বাকিদের সেই রিসোর্স ব্যবহার করতে বা যে বিষয়ের উপরে রিসোর্স দেয়া হল তার প্রতি আগ্রহ গড়ে ওঠে।
                            হয়তোবা আমরা প্রজেক্ট এর গুরুত্ব উপলব্ধি তেমনভাবে করতে পারছিনা কারণ এরকম কোন প্রকল্পে আমাদের অতীত কোন অভিজ্ঞতা না
                            থাকায় প্রাথমিকভাবে কিছুটা বিড়ম্বনার স্বীকার হতে হচ্ছে, তবে আমি ব্যক্তিগতভাবে আত্মবিশ্বাসের সাথে বলতে পারি যদি আমাদের সকলের স্বতঃস্ফূর্ত অংশগ্রহণের মাধ্যমে আমরা আমাদের নিজেদের জন্য কিছু করতে পারি হয়তোবা ভবিষ্যৎ কম্পিউটার বিজ্ঞান এবং প্রকৌশল অনুষদের বা বিশ্ববিদ্যালয়ের যেকোনো অনুষদের শিক্ষার্থীদের জন্য তার দৃষ্টান্ত হিসেবে রয়ে যাবে। উক্ত চিন্তা মাথায় রেখে আপাতত প্রজেক্ট অবয়বের অধীনে কিছু কমিউনিটি গড়ে তোলার প্রচেষ্টা করা হচ্ছে।
<br>
                            কমিউনিটিগুলো বিষয় হচ্ছে -<br>
                            ১. অ্যান্ড্রয়েড অ্যাপ ডেভেলপমেন্ট<br>
                            ২. ওয়েব ডেভলপমেন্ট<br>
                            ৩. কম্পিটেটিভ প্রোগ্রামিং<br>
                            ৪. পাইথন<br>


                            পরিশেষ বলতে চাই, প্রজেক্ট অবয়ব থেকেও যে জিনিসটি সবথেকে বড় বিষয় তা হল অবয়ব ১৬ এর সবাইকে আন্তরিকভাবে ধন্যবাদ ৬ই জানুয়ারি,২০১৯ থেকে আজ পর্যন্ত একসাথে থাকার জন্য, একে অন্যের পাশে থাকার জন্য। আমি নিজেকে সত্যিই ভাগ্যবান মনে করি কারণ আমরা আমাদের ব্যাচের একে অপরের প্রতি স্নেহ এবং শ্রদ্ধাশীল । তাই সকলের সুস্বাস্থ্য কামনায় এবং প্রজেক্ট অবয়বের সমৃদ্ধি অর্জনের আশায়......
                            #অবয়ব ♥
                        </p>
                    </div>

                </div>
                <div class="col-md-2"></div>
            </div>
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

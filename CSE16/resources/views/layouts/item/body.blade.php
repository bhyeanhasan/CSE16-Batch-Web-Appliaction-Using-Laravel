<header id="header">
    <h1><a href="/">অবয়ব ১৬</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            @guest()
                <li><a href="{{ route('login') }}" class="button special" >Sign in</a></li>
                <li><a href="{{ route('register') }}" class="button special">Sing up</a></li>
            @else
                <li><a href="{{ route('student') }}" class="button special">Profile</a></li>
                <li><a href="{{ route('logout_page') }}" class="button special">Logout</a></li>
            @endif
        </ul>
    </nav>
</header>

<!-- Banner -->
<section id="banner" >
    <img src="{{ asset('image/design/Batch logo.png') }}" style="width: 20%">

    @guest()
        <h1 style="font-size: 30px;color: red">Sorry It Seemed You are not a CSEian<br>You cant access all the information</h1>
        <ul class="actions">
            <li>
                <a href="{{ route('register') }}" class="button big">Please Login First</a>
            </li>
        </ul>
    @else
        <h1 style="font-size: 30px">You are welcome to CSE Family</h1>
        <ul class="actions">
            <li>
                <a href="{{ route('student_all') }}" class="button big">WE ARE</a>
            </li>
        </ul>

    @endif



</section>

<div class="container-fluid">
    <div class="row">
        <div style="background: rgb(230,240,250);">

            <div style=" padding: 5px;" class="col-sm-12 col-xs-12">

                <marquee style="font-size:16px;" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10">
                    <h5 style="margin: 0px;padding: 5px">
                        ''' ''' অবয়ব ১৬ '''
                        ''' কম্পিউটার বিজ্ঞান ও প্রকৌশল অনুষদ ''''
                        ''' পটুয়াখালী বিজ্ঞান ও প্রযুক্তি বিস্ববিদ্যালয় '''
                        ''' ২০১৮-১৯ সেশন '''
                        ''' CSE-16 '''
                        ''' Faculty of Computer Science and Engineering '''
                        ''' Patuakhali Science and Technology University '''
                        ''' Session 2018-2019 '''
                    </h5>

                </marquee>

            </div>
        </div>

    </div>
</div>



<!-- One -->
<section id="one" class="wrapper style1 special">
    <div class="container">
        <header class="major">
            <h2>Consectetur adipisicing elit</h2>
            <p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>
        </header>
        <div class="row 150%">
            <div class="4u 12u$(medium)">
                <section class="box">
                    <i class="icon big rounded color1 fa-cloud"></i>
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
                </section>
            </div>
            <div class="4u 12u$(medium)">
                <section class="box">
                    <i class="icon big rounded color9 fa-desktop"></i>
                    <h3>Consectetur adipisicing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam consequatur repellat debitis maxime.</p>
                </section>
            </div>
            <div class="4u$ 12u$(medium)">
                <section class="box">
                    <span style="color:#1E8440;font-weight:bold;font-family:Tahoma;font-size:16px;">Notice Board</span>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="news">
                            <marquee direction="up" height="300" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2">


                                @foreach($all_notice as $notice)
                                    <div class="media">
                                        <div class="date_news" style="width: 80px;">
                                            <h6>{{$notice->created_at}}</h6>
                                        </div>
                                        <h6 style="margin-top: auto;margin-bottom: auto"><a href="#"> {{ $notice->notice_heading }} </a></h6>
                                    </div><p></p>
                                    <br>
                                @endforeach


                            </marquee>
                            <span class="more"><a href="#">...View All</a></span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2 special">
    <div class="container">
        <header class="major">
            <h2>Lorem ipsum dolor sit</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, autem.</p>
        </header>
        <section class="profiles">
            <div class="row">
                <section class="3u 6u(medium) 12u$(xsmall) profile">
                    <img src="{{asset('image/profile_placeholder.gif')}}" alt="" />
                    <h4>Lorem ipsum</h4>
                    <p>Lorem ipsum dolor</p>
                </section>
                <section class="3u 6u$(medium) 12u$(xsmall) profile">
                    <img src="{{asset('image/profile_placeholder.gif')}}" alt="" />
                    <h4>Voluptatem dolores</h4>
                    <p>Ullam nihil repudi</p>
                </section>
                <section class="3u 6u(medium) 12u$(xsmall) profile">
                    <img src="{{asset('image/profile_placeholder.gif')}}" alt="" />
                    <h4>Doloremque quo</h4>
                    <p>Harum corrupti quia</p>
                </section>
                <section class="3u$ 6u$(medium) 12u$(xsmall) profile">
                    <img src="{{asset('image/profile_placeholder.gif')}}" alt="" />
                    <h4>Voluptatem dicta</h4>
                    <p>Et natus sapiente</p>
                </section>
            </div>
        </section>
        <footer>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolore illum, temporibus veritatis eligendi, aliquam, dolor enim itaque veniam aut eaque sequi qui quia vitae pariatur repudiandae ab dignissimos ex!</p>
            <ul class="actions">
                <li>
                    <a href="#" class="button big">Lorem ipsum dolor sit</a>
                </li>
            </ul>
        </footer>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style3 special">
    <div class="container">
        <header class="major">
            <h2>Consectetur adipisicing elit</h2>
            <p>Lorem ipsum dolor sit amet. Delectus consequatur, similique quia!</p>
        </header>
    </div>
    <div class="container 50%">
        <form action="#" method="post">
            <div class="row uniform">
                <div class="6u 12u$(small)">
                    <input name="name" id="name" value="" placeholder="Name" type="text">
                </div>
                <div class="6u$ 12u$(small)">
                    <input name="email" id="email" value="" placeholder="Email" type="email">
                </div>
                <div class="12u$">
                    <textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
                </div>
                <div class="12u$">
                    <ul class="actions">
                        <li><input value="Send Message" class="special big" type="submit"></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>
